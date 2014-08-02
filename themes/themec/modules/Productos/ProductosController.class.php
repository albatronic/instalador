<?php

/**
 * Description of ProductosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ÁRTICO ESTUDIO
 * @date 06-nov-2012
 *
 */
class ProductosController extends ControllerProject {

    protected $entity = "Productos";
    protected $nivel = "";

    public function IndexAction() {
        $this->values['novedades'] = $this->getListadoArticulos();

        return parent::IndexAction();
    }

    public function ProductoDesarrolladoAction() {
    $novedad=$this->getArticuloDesarrollado();
    $this->values['novedad'] = $novedad[0];
    $this->values['novedades'] = $this->getListadoArticulosRelacionados($this->values['novedad']['categoria']);

        return array(
            'template' => $this->entity . '/ProductoDesarrollado.html.twig',
            'values' => $this->values
        );
    }

    protected function getListadoArticulos() {

        $array = array();

        $articulos = new ErpArticulos();
        $filtro = "Publish='1'";

        $rows = $articulos->cargaCondicion('Id', $filtro, 'SortOrder ASC');
        unset($articulos);

        foreach ($rows as $row) {
            $articulo = new ErpArticulos($row['Id']);
            $IdArticulo = $articulo->getId();

        $imagenAsociada = new CpanDocs();
        $filtro = "Entity='ErpArticulos' and IdEntity='{$IdArticulo}' and Type='image1' and Publish='1'"; 

        $row = $imagenAsociada->cargaCondicion('Id,PathName', $filtro);

            $array[] = array(
                'titulo' => $articulo->getDescripcion(),
                'desarrollo' => $articulo->getReclamoCorto(),
                'url' => $articulo->getHref(),
                'imagen' => $row[0]['PathName'],
            );
        }

        unset($imagenAsociada);
        unset($articulo);
        return $array;
    }


    
    protected function getArticuloDesarrollado() {

        $array = array();
        $articulo = new ErpArticulos($this->request['IdEntity']);
                $categoria=$articulo->getIDCategoria()->getId();

        $articulos = new ErpArticulos();
        $filtro = "Publish='1' and IDCategoria='{$categoria}' and Id<>'{$this->request['IdEntity']}'";
        $rows = $articulos->cargaCondicion('Id', $filtro, 'SortOrder ASC');
        $numeroArticulosRelacionados=count($rows);
        
        
$imagenAsociada = new CpanDocs();
$filtro = "Entity='ErpArticulos' and IdEntity='{$this->request['IdEntity']}' and Type='image2' and Publish='1'"; 
$row = $imagenAsociada->cargaCondicion('PathName', $filtro);

$galeriaAsociada = new CpanDocs();
$filtro = "Entity='ErpArticulos' and IdEntity='{$this->request['IdEntity']}' and Type='galery' and Publish='1'"; 
$rows = $galeriaAsociada->cargaCondicion('PathName,Title', $filtro);
$numeroImagenesGaleria = count($rows);
$tieneGaleria=0; if ($numeroImagenesGaleria>0) $tieneGaleria=1;

            $array[] = array(
                'numeroArticulosRelacionados' => $numeroArticulosRelacionados,
                'categoria' => $articulo->getIDCategoria()->getId(),
                'titulo' => $articulo->getDescripcion(),
                'caracteristicas' => $articulo->getCaracteristicas(),
                'imagen' => $row[0]['PathName'],
                'galeria' => $rows,
                'tieneGaleria' => $tieneGaleria,
                'numeroImagenesGaleria' => $numeroImagenesGaleria,

            );

            
        unset($imagenAsociada);
        unset($galeriaAsociada);
        unset($articulo);            
        return $array;
    }
    
    
    protected function getListadoArticulosRelacionados($categoria) {

        $array = array();

        $articulos = new ErpArticulos();
        $filtro = "Publish='1' and IDCategoria='{$categoria}' and Id<>'{$this->request['IdEntity']}'";
        $rows = $articulos->cargaCondicion('Id', $filtro, 'SortOrder ASC LIMIT 0,4');
        $numeroArticulosRelacionados=count($rows);
        unset($articulos);

        foreach ($rows as $row) {
            $articulo = new ErpArticulos($row['Id']);
            $IdArticulo = $articulo->getId();

        $imagenAsociada = new CpanDocs();
        $filtro = "Entity='ErpArticulos' and IdEntity='{$IdArticulo}' and Type='image1' and Publish='1'"; 

        $row = $imagenAsociada->cargaCondicion('Id,PathName', $filtro);

            $array[] = array(
                'titulo' => $articulo->getDescripcion(),
                'desarrollo' => $articulo->getReclamoCorto(),
                'url' => $articulo->getHref(),
                'imagen' => $row[0]['PathName'],
            );
        }

        unset($imagenAsociada);
        unset($articulo);
        return $array;
    }
    
    
    /* protected function getListadoArticulos() {

      $array = array();

      $articulos=new ErpArticulos();
      $filtro = "Publish='1'";

      $rows=$articulos->cargaCondicion('Id',$filtro,'SortOrder ASC');
      print_r($rows);
      unset($articulos);

      foreach ($rows as $row){
      $articulo=new ErpArticulos($row['Id']);

      $aaa = new ErpArticulos();
      $rows = $aaa->cargaCondicion("Id","IdFamilia='{$articulo->getIDFamilia()->getId()}' and Id<>{$articulo->getId()}");

      // print_r($articulo);

      $array[]=array(
      'descripcion' => $articulo->getDescripcion(),
      'Pvp' => $articulo->getPvp(),
      'url' => $articulo->getHref(),

      );
      }

      unset($articulo);
      return $array;
      } */
}

?>
