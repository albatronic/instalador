<?php

/**
 * Description of ProductosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática Albatronic, SL
 * @date 06-nov-2012
 *
 */
class ProductosController extends ControllerProject {

    protected $entity = "Productos";

    public function IndexAction() {

        $this->values['productos'] = Contenidos::getContenidosSeccion($this->request['IdEntity']);

        return parent::IndexAction();
    }

}

?>
