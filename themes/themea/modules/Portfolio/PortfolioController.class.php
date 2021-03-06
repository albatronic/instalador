<?php
/**
 * Description of PortfolioController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @since 5-12-2014
 */
class PortfolioController extends ControllerProject {

    protected $controller = "Portfolio";

    public function IndexAction() {

        $this->values['portfolioTipos'] = Contenidos::getSubSecciones($this->request['IdEntity']);
        $this->values['portfolio'] = Contenidos::getAllContenidosSeccion($this->request['IdEntity']);
        return parent::IndexAction();
    }
}
