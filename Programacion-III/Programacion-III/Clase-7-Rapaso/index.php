<?php

$metodoRequest = $_SERVER['REQUEST_METHOD'];
var_dump($metodoRequest);
switch ($metodoRequest) {
    case 'GET':
        break;
    case 'POST':
        echo 'Vino por POST';
        $_ListaPizzas = array();
        echo count($_ListaPizzas);
        break;
    case 'PUT':
        echo 'Vino por PUT';
        break;
    case 'DELETE':
        echo 'Vino por DELETE';
        break;
}