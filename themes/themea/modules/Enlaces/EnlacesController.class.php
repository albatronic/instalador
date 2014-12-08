<?php

/**
 * Description of EnlacesController
 *

 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC
 * @date 07-Dec-2014
 *
 */
class EnlacesController extends ControllerProject {

    protected $controller = "Enlaces";

    public function IndexAction() {
        
        $this->values['seccion'] = new GconSecciones($this->request['IdEntity']);
        $this->values['enlaces'] = Enlaces::getAllEnlacesGroupBySeccion();

        return parent::IndexAction();
    }
}