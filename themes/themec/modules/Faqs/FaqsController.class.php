<?php

/**
 * Description of FaqsController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ALBATRONIC
 * @date 06-nov-2012
 *
 */
class FaqsController extends ControllerProject {

    protected $controller = "Faqs";
    protected $nivel = "";

    public function IndexAction() {
	$this->values['faq'] = Contenidos::getContenidosSeccion($this->request['IdEntity']);
        
    return parent::IndexAction();
    
    
    }

}

?>
