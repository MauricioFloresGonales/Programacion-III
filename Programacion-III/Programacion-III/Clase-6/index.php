<?php
////http://localhost/Programacion-III/Clase-6/index.php

    $metodoRequest = $_SERVER['REQUEST_METHOD'];

    switch ($metodoRequest) {
        case 'GET':
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