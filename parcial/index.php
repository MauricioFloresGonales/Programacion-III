<?php


$metodoRequest = $_SERVER['REQUEST_METHOD'];
var_dump($metodoRequest);
switch ($metodoRequest) {
    case 'GET':
        echo '</br>Vino por GET </br>';
        include ("Entidades/ManejadorGet.php");
        break;
    case 'POST':
        echo 'Vino por POST';
        break;
    case 'PUT':
        echo 'Vino por PUT';
        break;
    case 'DELETE':
        echo 'Vino por DELETE';
        break;
}