<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 06-nov-2012
 *
 */
class EnlacesController extends ControllerProject {

    protected $controller = "Enlaces";

    public function IndexAction() {

        /* ENLACES DE INTERES */
        $this->values['seccionesEnlaces'] = Enlaces::getSeccionesDeEnlaces();

        return parent::IndexAction();
    }

    /**
     * Muestra los enlaces de interés de una sección de enlaces.
     * 
     * @return array
     */
    public function ListadoAction() {

        /* ENLACES DE INTERES */
        $this->values['enlacesInteres'] = Enlaces::getEnlacesDeInteres($this->request['IdEntity']);

        return array(
            'template' => $this->controller . '/listado.html.twig',
            'values' => $this->values
        );
    }

}

?>
