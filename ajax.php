<?php

class Ajax {

    function register() {
        
    }

    function login() {
        
    }

    function check_login() {
        
    }

}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    $ajax = new Ajax();
    if (method_exists($ajax, $action)) {
        echo json_encode($ajax->$action);
    } else {
        header("HTTP/1.0 404 Not Found");
        echo json_encode(array('Error' => "Metodo [$action] no encontrado"));
    }
}