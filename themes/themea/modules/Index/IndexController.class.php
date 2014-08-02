<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class IndexController extends ControllerProject {

    protected $entity = "Index";

    public function IndexAction() {

        $this->values['serviciosPortada'] = Servicios::getServicios(0, 1, 3);
        $this->values['otrosServicios'] = Servicios::getServicios(0, 0, 4);
        $this->values['seccionesBlog'] = Blog::getSecciones();
        //$this->values['blog'] = Blog::getArticulos(0,true,1,0,2);
        $this->values['elegirnos'] = Contenidos::getContenidosSeccion(19, 1, 4);

        return parent::IndexAction();
    }

    /**
     * Vuelta a entrar en el portal proviniente de un proyecto
     *
     * @return array Array template, values
     */
    public function ReturnAction() {

        unset($_SESSION['usuarioPortal']['menu']);
        unset($_SESSION['project']);
        unset($_SESSION['VARIABLES']);
        unset($_SESSION['tpv']); // Para cuando regresa desde el ERP

        $this->values['accesosPortal'] = $_SESSION['usuarioWeb']['accesosPortal'];
        unset($usuario);

        return array(
            'template' => "Index/proyectos.html.twig",
            'values' => $this->values,
        );
    }

    /**
     * Mata la sesion y se va al home
     *
     * @return array Array template, values
     */
    public function LogoutAction() {

        unset($_SESSION['usuarioWeb']['Nombre']);
        unset($_SESSION['usuarioWeb']['IdPerfil']);
        $_SESSION['usuarioWeb']['Id'] = 0;

        return $this->IndexAction();
    }

    /**
     * Logea al usuario y construye las variables de sesion:
     *
     * $_SESSION['USER'] con el Id y el nombre de usuario
     * $_SESSION['usuarioWeb']['accesosPortal'] con las empresas, proyectos y aplicaciones accesibles
     *
     * Además actuliaza el registro de entradas en el portal
     *
     * @return array Array template, value
     */
    public function LoginAction() {

        $_SESSION['usuarioWeb']['Id'] = 0;

        $user = new PcaeUsuarios();
        $usuario = $user->find("EMail", $this->request['email']);
        unset($user);

        if ($usuario->getEMail() != '') {
            if ($usuario->getPassword() == md5($this->request['password'] . $this->getSemilla())) {

                $_SESSION['usuarioWeb'] = array(
                    'Id' => $usuario->getId(),
                    'IdPerfil' => '1',
                    'Nombre' => $usuario->getNombre(),
                );
                
                $_SESSION['usuarioPortal'] = $_SESSION['usuarioWeb'];

                //Actualizar el registro de entradas
                $usuario->setNLogin($usuario->getNLogin() + 1);
                $usuario->setUltimoLogin(date('Y-m-d H:i:s'));
                $usuario->save();

                // Crear la variable de sesion con el array de
                // las empresas, proyectos y apps accesibles.
                $_SESSION['usuarioWeb']['accesosPortal'] = $usuario->getArrayAccesos();

                $this->values['accesosPortal'] = $_SESSION['usuarioWeb']['accesosPortal'];

                $template = $this->entity . "/proyectos.html.twig";
            } else {
                $this->values['email'] = $this->request['email'];
                $this->values['errorPassword'] = true;
                return $this->IndexAction();
            }
        } else {
            $this->values['errorUsuario'] = true;
            return $this->IndexAction();
        }

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    public function ProyectosAction() {

        $template = $this->entity . "/proyectos.html.twig";
        $this->values['accesosPortal'] = $_SESSION['usuarioWeb']['accesosPortal'];
        $this->values['menuCabecera'] = Menu::getMenuN(1, 9);
        $this->values['menuPie'] = Menu::getMenuN(2, 8);

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

}