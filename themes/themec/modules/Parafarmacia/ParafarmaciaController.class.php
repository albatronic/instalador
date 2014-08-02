<?php

/**
 * Description of ParafarmaciaController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ÁRTICO ESTUDIO
 * @date 06-nov-2012
 *
 */
class ParafarmaciaController extends ControllerProject {

    protected $entity = "Parafarmacia";
    protected $nivel = "";

    public function IndexAction() {
        /* BANNERS */
        /* Muestros los banners de la zona 1 (2), de tipo fijo (0) y que estén mostrados en listado (1) */ 
        $this->values['banner'] = Banners::getBanners(2, 0, -1);        
        
    return parent::IndexAction();
    
    
    }

}

?>
