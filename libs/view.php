<?php
class view
{
    private $viewData = [];

    function __construct()
    {

    }

    function render($nombre, $data = [])
    {
        $this->viewData = $data;
        require 'views/' . $nombre . '.php';
    }
    
    function viewData($data)
    {
        return $this->viewData[$data];
    }
}
?>