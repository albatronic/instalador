<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ALBATRONIC
 * @date 06-nov-2012
 *
 */
class IndexController extends ControllerProject {

    protected $controller = "Index";
    protected $nivel = "";

    public function IndexAction() {
        
        $this->values['calendario'] = Calendario::getCalendario();
        $this->values['serviciosPortada'] = Servicios::getServicios(0, 1, 4);
        
        /* BANNERS */
        /* Muestros los banners de la zona 1 (1), de tipo fijo (0) y que estén mostrados en listado (1) */ 
        $this->values['banner'] = Banners::getBanners(1, 0, -1);
        
        $this->values['eventos'] = Eventos::getEventos(date('Y-m-d'),'', 2, 1, false);
        
        return parent::IndexAction();
    }

}