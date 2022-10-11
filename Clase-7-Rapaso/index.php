<?php
include ("Entidades/Manejador.php");

$metodoRequest = $_SERVER['REQUEST_METHOD'];
var_dump($metodoRequest);
$manejador = new Manejador();
switch ($metodoRequest) {
    case 'GET':
        echo '</br>Vino por GET </br>';
        $manejador->CargarPizzas(
            $_GET["sabor"],
            $_GET["presio"],
            $_GET["tipo"],
            $_GET["cantidad"], 
        );
        break;
    case 'POST':
        echo 'Vino por POST';
        $manejador->CargarPizzas();
        break;
    case 'PUT':
        echo 'Vino por PUT';
        break;
    case 'DELETE':
        echo 'Vino por DELETE';
        break;
}