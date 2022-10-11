<?php
include ("Pizza.php");
include ("Entidades/Archivos.php");

class Manejador {
    public function CargarPizzas($sabor, $presio, $tipo, $cantidad) {
        $resp = Pizza::CargarPizza($sabor, $presio, $tipo, $cantidad);
        Archivo::EscribirCSV("TEST-v2.csv", $resp);
        $dato = Archivo::LeerCSV("TEST-v2.csv");
        var_dump($dato);
        $entidad = new Pizza($dato[0], $dato[1], $dato[2], $dato[3], $dato[4]);
        echo "</br></br>";
        var_dump($entidad);
    }
    
}