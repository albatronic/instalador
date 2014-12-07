<?php

/**
 * Description of EventosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ALBATRONIC
 * @date 15-01-2013
 */
class EventosController extends ControllerProject {

    protected $controller = "Eventos";
    protected $nivel = "";

    public function IndexAction() {

        $this->values['calendario'] = Calendario::getCalendario();
        
        /* BANNERS */
        /* Muestros los banners de la zona 1 (1), de tipo fijo (0) y que estén mostrados en listado (1) */ 
        $this->values['banner'] = Banners::getBanners(3, 0, -1);  
        
        
        if ($this->request[1]) {
            $this->values['fechaEvento'] = $this->request[1];
            $fecha = explode("-", $this->request[1]);
            $mes = $fecha[1];
            $ano = $fecha[0];
            $this->values['calendario'] = Calendario::getCalendario($mes, $ano);
            $this->values['eventos'] = Eventos::getEventos($this->request[1], $this->request[1], 0, 2, false);
        } else
            $this->values['eventos'] = Eventos::getEventos('','', 0, 1, false);

        return parent::IndexAction();
    }

}

?>
