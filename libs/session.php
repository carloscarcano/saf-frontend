<?php
class session
{
    static $sessionIdUsuario = 'usuarioId';
    static $sessionNombreUsuario = 'usuarioNombre';

    public static function recuperarSesion()
    {
        if (session_status() == PHP_SESSION_NONE)
        {
            error_log('session::construct => sesión recuperada');
            session_start();
        }
    }

    public static function iniciarSesion($idUsuario, $nombreUsuario)
    {
        $_SESSION[self::$sessionIdUsuario] = $idUsuario;
        $_SESSION[self::$sessionNombreUsuario] = $nombreUsuario;
        error_log('se inicia sesión (idusuario, nombre, session_status): ' . $_SESSION[self::$sessionIdUsuario] . '|' . $_SESSION[self::$sessionNombreUsuario] . '|' . session_status());
    }

    public static function cerrarSesion()
    {
        error_log('session:cerrarSesion => OK!');
        session_unset();
        session_destroy();
    }

    public static function existeSesion()
    {
        //error_log('session::existeSesion => ' . $_SESSION[self::$sessionIdUsuario]);
        return isset($_SESSION[self::$sessionIdUsuario]);
    }

    public static function obtenerSesion()
    {
        return [
            self::$sessionIdUsuario => isset($_SESSION[self::$sessionIdUsuario]) ? $_SESSION[self::$sessionIdUsuario] : '',
            self::$sessionNombreUsuario => isset($_SESSION[self::$sessionNombreUsuario]) ? $_SESSION[self::$sessionNombreUsuario] : ''
        ];
    }
}
?>
