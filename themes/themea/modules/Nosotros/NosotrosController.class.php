<?php

/**
 * Description of NosotrosController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class NosotrosController extends ControllerProject {

    protected $entity = "Nosotros";

    public function IndexAction() {
	$this->values['mensajesSEO'] = Contenidos::getContenidosSeccion(24);
	$this->values['clientes'] = Albumes::getAlbumes(1, 1,99,99);
	$this->values['equipo'] = Rrhh::getPersonal(4);
        return parent::IndexAction();
    }

}

?>
