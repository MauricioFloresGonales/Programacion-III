<?php
include ("Heladeria.php");
include ("Entidades/Archivos.php");

$resp = Heladeria::CargarHelado(
    $_GET["sabor"],
    $_GET["presio"],
    $_GET["tipo"],
    $_GET["stock"], 
);
Archivo::Escribir("heladeria.json", json_encode($resp));
Archivo::LeerPorLineaJSON("heladeria.json");