<?php

/**
 * Description of FaqsController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ÁRTICO ESTUDIO
 * @date 06-nov-2012
 *
 */
class FaqsController extends ControllerProject {

    protected $entity = "Faqs";
    protected $nivel = "";

    public function IndexAction() {
	$this->values['faq'] = Contenidos::getContenidosSeccion($this->request['IdEntity']);
        
    return parent::IndexAction();
    
    
    }

}

?>
