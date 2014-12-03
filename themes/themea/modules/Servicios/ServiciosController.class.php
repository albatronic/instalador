<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática Albatronic, SL
 * @date 06-nov-2012
 *
 */
class ServiciosController extends ControllerProject {

    protected $entity = "Servicios";

    public function IndexAction() {

        switch ($this->request['Entity']) {

            case 'ServServicios':
                $this->values['servicio'] = Servicios::getServicioDesarrollado($this->request['IdEntity']);
                // Tres servicios adicionales excluyendo el actual
                $this->values['otrosServicios'] = Servicios::getServicios(0, -1, 3, $this->request['IdEntity']);
                // Testimonio
                $this->values['testimonios'] = Contenidos::getContenidosSeccion($this->varWeb['Pro']['staticContents'][1]);
                $this->template = $this->entity . "/servicioDesarrollado.html.twig";
                break;

            case 'GconSecciones':
                $this->values['servicio'] = new GconSecciones($this->request['IdEntity']);
                // Se muestran todos los servicios
                $this->values['servicios'] = Servicios::getServicios(0, -1);
                $this->template = $this->entity . "/index.html.twig";
                break;
        }

        return array(
            'values' => $this->values,
            'template' => $this->template,
        );
    }

}
