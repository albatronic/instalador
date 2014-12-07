<?php

/**
 * Description of PortfolioController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @since 6-12-2014
 */
class GaleriaController extends ControllerProject {

    protected $controller = "Galeria";

    public function IndexAction() {
        $this->values['galeria'] = Albumes::getAlbumes(-1, 0, -1, 999);
        return parent::IndexAction();
    }

}
