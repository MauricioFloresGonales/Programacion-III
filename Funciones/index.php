<?php
function ValidarClase($objeto, $tipoDeClase) {
    echo "Test: ",is_a($objeto, $tipoDeClase) == true ? "Verdadero" : "Falso";
}