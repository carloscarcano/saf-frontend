<?php
class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function redirect($ruta = '')
    {
        error_log('controller::redirect => ' . $ruta);
        header('location: /saf-portal/' . $ruta);
    }
}
?>