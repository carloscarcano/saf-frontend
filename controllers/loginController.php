<?php
class loginController extends Controller
{
    function __construct()
    {
        parent::__construct();
        error_log('controlador login creado');
    }

    function render()
    {
        $this->view->render('login/index');
    }
}
?>