<?php
class ticketController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->render('ticket/index');
    }
}
?>