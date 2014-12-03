<?php

/**
 * Description of ContenidosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática Albatronic, SL
 * @date 06-nov-2012
 *
 */
class ContenidosController extends ControllerProject {

    protected $entity = "Contenidos";

    public function IndexAction() {
        switch ($this->request['Entity']) {
            case 'GconSecciones':
                $this->values['contenidoDesarrollado'] = new GconSecciones($this->request['IdEntity']);
                break;
            case 'GconContenidos':
                $contenido = Contenidos::getContenidoDesarrollado($this->request['IdEntity']);
                $this->values['contenidoDesarrollado'] = $contenido;
                if ($contenido['contenido']->getBlogPublicar()->getIDTipo()) {
                    $this->values['blog']['categorias'] = Blog::getSecciones();
                    $this->values['postsPorMes'] = Blog::getArticulosMeses(12);
                    $this->values['otrosPosts'] = Blog::getArticulos(0, false, 1, 0, 1);
                }
                break;
        }
        $this->values['testimonios'] = Contenidos::getContenidosSeccion($this->varWeb['Pro']['staticContents'][1]);
        return parent::IndexAction();
    }

    public function BuscarAction() {

        $array = array();

        $texto = $this->request['textoBusqueda'];
        $filtro = "Texto LIKE '%$texto%'";

        Paginacion::paginar("CpanSearch", $filtro, "SortOrder", 1, 10);

        foreach (Paginacion::getRows() as $item) {
            $busqueda = new CpanSearch($item['Id']);
            $entidad = $busqueda->getEntity();
            $objeto = new $entidad($busqueda->getIdEntity());
            $array[] = array(
                'id' => $objeto->getPrimaryKeyValue(),
                'titulo' => $objeto->__toString(),
                'url' => $objeto->getHref(),
            );
        }
        unset($busqueda);
        unset($objeto);

        $template = "Contenidos/listadoBusqueda.html.twig";
        $this->values['listadoBusqueda'] = $array;
        return array('template' => $template, 'values' => $this->values);
    }

}

?>
