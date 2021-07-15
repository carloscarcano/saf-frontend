<?php

if ($_SERVER['SERVER_NAME'] == 'localhost')
    define('URL_BASE', $_SERVER['SERVER_NAME'] . '/saf-portal/');
else
    define('URL_BASE', $_SERVER['SERVER_NAME'] . '/');

define('DEFAULT_CONTROLLER', 'login');
define('API_REST_BASE_URL', 'http://saf-api-rest.azurewebsites.net/api/v1/ticket/');
?>
