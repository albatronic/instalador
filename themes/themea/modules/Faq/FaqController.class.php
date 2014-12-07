<?php

/**
 * Description of FaqController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class FaqController extends ControllerProject {

    protected $controller = "Faq";

    public function IndexAction() {

        switch ($this->request['METHOD']) {
            case 'GET':
                $this->values['faq'] = Contenidos::getContenidosSeccion($this->varWeb['Pro']['staticContents'][0]);
                break;
            case 'POST':
                $this->values['faq'] = Contenidos::getContenidosSeccion($this->varWeb['Pro']['staticContents'][0], $this->request['pagina']);
                break;
        }


        /* TESTIMONIOS */
        $this->values['testimonios'] = Contenidos::getContenidosSeccion($this->varWeb['Pro']['staticContents'][1]);

        return parent::IndexAction();
    }

}

?>
