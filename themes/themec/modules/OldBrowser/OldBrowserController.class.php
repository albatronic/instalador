<?php
/**
 * Description of OldBrowserController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright ALBATRONIC
 * @date 06-nov-2012
 */
class OldBrowserController extends ControllerProject {

    protected $entity = "OldBrowser";
    
    public function IndexAction() {
        
        $this->values['datos']['logo'] = $this->varWeb['Pro']['globales']['logoOldBrowser'];
        $this->values['datos']['empresa'] = $this->varWeb['Pro']['globales']['empresa'];
        
        return array(
            'template' => $this->entity . "/index.html.twig",
            'values' => $this->values,
        );
    }
}

?>
