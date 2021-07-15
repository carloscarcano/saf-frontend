<?php
class Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function redirect($ruta, $mensajes)
    {
        $data = [];
        $params = '';

        foreach($mensajes as $key => $mensaje)
        {
            array_push($data, $key . '=' . $mensaje);
        }

        $params = join('&', $data);

        if ($params =! '')
        {
            $params = '?' . $params;
        }

        error_log('redireccionamiento a: ' . constant('URL_BASE') . $ruta . $params);
        header('location: ' . constant('URL_BASE') . $ruta . $params);
    }
}
?>