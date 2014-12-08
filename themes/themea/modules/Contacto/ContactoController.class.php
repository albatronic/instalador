<?php

/**
 * Description of ContactoController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 20-abril-2013
 *
 */
class ContactoController extends ControllerProject {

    protected $controller = "Contacto";
    var $plantilla = array(
        'campos' => array(
            'Nombre' => array('valor' => 'Nombre y apellidos', 'error' => false),
            'Empresa' => array('valor' => 'Empresa', 'error' => false),
            'Email' => array('valor' => 'Email', 'error' => false),
            'Telefono' => array('valor' => 'Teléfono de contacto', 'error' => false),
            'Mensaje' => array('valor' => 'Mensaje', 'error' => false),
        ),
    );
    var $formContacta = array();

    public function IndexAction() {

        $envioOk = false;

        switch ($this->request['METHOD']) {
            case 'GET':
                $this->formContacta = $this->plantilla;
                break;

            case 'POST':
                $this->formContacta = $this->request['campos'];

                if ($this->Valida()) {
                    if (file_exists("{$_SESSION['theme']}/docs/plantillaMailContacto.html.twig")) {

                        $mailer = new Mail($this->varWeb['Pro']['mail']);
                        $envioOk = $this->enviaVisitante($mailer, "{$_SESSION['theme']}/docs/plantillaMailContacto.html.twig");

                        if ($envioOk) {
                            $envioOk = $this->enviaWebMaster($mailer, "{$_SESSION['theme']}/docs/plantillaMailWebMaster.html.twig");
                        }

                        $this->formContacta['mensaje'] = ($envioOk) ?
                                $this->varWeb['Pro']['mail']['mensajeExito'] :
                                $this->varWeb['Pro']['mail']['mensajeError'];

                        unset($mailer);
                    } else {
                        $this->formContacta['mensaje'] = "No se han definido las plantillas.";
                    }
                }
                break;
        }
        $this->formContacta['envioOk'] = $envioOk;

        $this->values['contenido'] = new GconSecciones($this->request['IdEntity']);
        $this->values['portfolio'] = Contenidos::getAllContenidosSeccion(52);

        $this->values['formContacta'] = $this->formContacta;

        return parent::IndexAction();
    }

    /**
     * Envía el correo de confirmación al visitante
     * en base a la plantilla htm $ficheroPlantilla.
     * 
     * @param Mail $mailer objeto mailer
     * @param string $ficheroPlantilla El archivo que tiene la plantilla htm a enviar
     * @return boolean TRUE si se envío con éxito
     */
    private function enviaVisitante($mailer, $ficheroPlantilla) {

        $array = array(
            'dominio' => $this->varWeb['Pro']['globales']['dominio'],
            'empresa' => $this->varWeb['Pro']['globales']['empresa'],
            'theme' => $_SESSION['theme'],
            'mensaje' => $this->varWeb['Pro']['mail']['mensajeConfirmacion'],
            'textolopd' => $this->varWeb['Pro']['mail']['textoLOPD'],
        );

        foreach ($this->formContacta['campos'] as $key => $valor) {
            $array[$key] = $valor['valor'];
        }

        $plantilla = ControllerWeb::renderTwigTemplate($ficheroPlantilla, $array);

        return $mailer->send(
                        $this->formContacta['campos']['Email']['valor'], $this->varWeb['Pro']['mail']['from'], $this->varWeb['Pro']['mail']['from_name'], 'Hemos recibido su mensaje', $plantilla, array()
        );
    }

    /**
     * Envía el correo de confirmación al webmaster
     * en base a la plantilla htm $ficheroPlantilla.
     * 
     * @param Mail $mailer objeto mailer
     * @param string $ficheroPlantilla El archivo que tiene la plantilla htm a enviar
     * @return boolean TRUE si se envío con éxito
     */
    private function enviaWebMaster($mailer, $ficheroPlantilla) {

        $array = array(
            'dominio' => $this->varWeb['Pro']['globales']['dominio'],
            'empresa' => $this->varWeb['Pro']['globales']['empresa'],
            'theme' => $_SESSION['theme'],
            'mensaje' => $this->varWeb['Pro']['mail']['mensajeConfirmacion'],
            'textolopd' => $this->varWeb['Pro']['mail']['textoLOPD'],
        );
        
        foreach ($this->formContacta['campos'] as $key => $valor) {
            $array[$key] = $valor['valor'];
        }

        $plantilla = ControllerWeb::renderTwigTemplate($ficheroPlantilla, $array);

        return $mailer->send(
                        $this->varWeb['Pro']['mail']['from'], $this->formContacta['campos']['Email']['valor'], $this->formContacta['nombre']['valor'], 'Ha recibido un mensaje en la web', $plantilla, array()
        );
    }

    private function Valida() {

        $error = false;

        if (!isset($this->formContacta['leidoPolitica']['valor'])) {
            $this->formContacta['leidoPolitica']['valor'] = '';
        }

        foreach ($this->formContacta as $campo => $valor) {
            $valor = trim(str_replace($this->plantilla['campos'][$campo]['valor'], "", $valor['valor']));
            $errorCampo = ($valor == '');
            $this->formContacta['campos'][$campo]['valor'] = (!$errorCampo) ?
                    $this->formContacta['campos'][$campo]['valor'] = $valor :
                    $this->formContacta['campos'][$campo]['valor'] = $this->plantilla['campos'][$campo]['valor'];
            $this->formContacta['campos'][$campo]['error'] = $errorCampo;
            $error = ($error or $errorCampo);
        }

        // Comprobar la validez ortográfica de la dirección de correo
        $mail = new Mail($this->varWeb['Pro']['mail']);
        if (!$mail->compruebaEmail($this->formContacta['campos']['Email']['valor'])) {
            $this->formContacta['campos']['Email']['error'] = 1;
            $error = true;
        }

        return !$error;
    }

}
