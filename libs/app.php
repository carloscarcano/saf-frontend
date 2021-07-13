<?php
class App
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0]))
        {
            require_once 'controllers/' . constant('DEFAULT_CONTROLLER') . 'Controller.php';
            $nombreClase = constant('DEFAULT_CONTROLLER') . 'Controller';

            $loginController = new $nombreClase;
            $loginController->render();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . 'Controller.php';
        if (file_exists($archivoController))
        {
            require_once $archivoController;
            $nombreClase = $url[0] . 'Controller';

            $controller = new $nombreClase;

            if (isset($url[1]))
            {
                if (method_exists($controller, $url[1]))
                {
                    if (isset($url[2]))
                    {
                        // llamada al controlador con parámetros en la url
                        $nparams = count($url) - 2;
                        $params = [];

                        for ($i = 0; $i < $nparams; $i++)
                        {
                            array_push($params, $url[$i] + 2);
                        }

                        $controller->{$url[1]}($params);
                    }
                    else
                    {
                        // llamada al controlador sin parámetros en url
                        $controller->{$url[1]}();
                    }
                }
                else
                {
                    // el action no existe en el controlador
                }
            }
            else
            {
                // no se especificó action, se carga el default
                $controller->render();
            }
        } 
        else
        {
            error_log('no se encontró un controlador para: ' . $url[0]);
        }
    }
}
?>