<?php

/**
 * Description of ServiciosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ALBATRONIC
 * @date 06-nov-2012
 *
 */
class ServiciosController extends ControllerProject {

    protected $entity = "Servicios";

    public function IndexAction() {

        $this->values['servicios'] = Servicios::getServicios();

        return parent::IndexAction();
    }

    public function ServicioDesarrolladoAction() {

        $this->values['servicioDesarrollado'] = Servicios::getServicio($this->request['IdEntity']);

        return array(
            'template' => $this->entity . '/servicioDesarrollado.html.twig',
            'values' => $this->values
        );
    }

}

?>
