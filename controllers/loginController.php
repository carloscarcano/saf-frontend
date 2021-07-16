<?php
class loginController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function validar()
    {
        $usuario = $_POST['usr'];
        $password = $_POST['pwd'];

        $acceso = false;
        $idUsuario = 0;
        $nombreUsuario = '';

        $hashCarlos = '$2y$10$ZFvFBoGg6B1vXVmK4lUmouLSQB6rNWLvIt0qoZCmSuSAtXZ.Ig0x2';
        $hashDiana = '$2y$10$eirIflltL/8fzPv5xvrW7ecR3xdnPRshUcbDQ5Tv5DHRao6YAVhwW';
        $hashMario = '$2y$10$9sAU/epNtyT8Nx/zEThEleI6yQTWFPfBUoRroKPkk852CvzPaAWK6';

        if ($usuario == 'carlos' && password_verify($password, $hashCarlos))
        {
            $acceso = true;
            $idUsuario = 1;
            $nombreUsuario = 'Juan Carlos Carcaño González';
        }
        else if ($usuario == 'diana' && password_verify($password, $hashDiana))
        {
            $acceso = true;
            $idUsuario = 2;
            $nombreUsuario = 'Diana Martínez Aguirre';
        }
        else if ($usuario == 'mario' && password_verify($password, $hashMario))
        {
            $acceso = true;
            $idUsuario = 3;
            $nombreUsuario = 'Mario Iván Correa Medina';
        }

        $result = array();
        $result['acceso'] = $acceso;

        if ($acceso)
        {
            // se inicia sesión si el usr/pwd es correcto
            session::iniciarSesion($idUsuario, $nombreUsuario);    
            $result['idUsuario'] = $idUsuario;
            $result['nombreUsuario'] = $nombreUsuario;
            $result['mensaje'] = 'usuario correcto';    
        }
        else
        {
            $result['mensaje'] = 'El nombre de usuario o contraseña es incorrecto.';
        }

        echo json_encode($result);
    }

    function salir()
    {
        error_log('loginController::salir => OK!');
        session::cerrarSesion();
        $this->redirect();
    }

    function render()
    {
        $this->view->render('login/index');
    }
}
?>