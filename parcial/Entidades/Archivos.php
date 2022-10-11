<?php 

class Archivo {
    static function Escribir($nombreArhcivo, $texto) {

        $archivo = fopen($nombreArhcivo, "w");
        echo fwrite($archivo, $texto);
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
        
    } 
    static function EscribirCSV($nombreArhcivo, $objeto) {
        $archivo = fopen($nombreArhcivo, "w");
        $datos = [];

        foreach ($objeto as &$item) {
            array_push($datos, $item);
        }
        
        echo "</br>Escribiendo:</br>";
        fputcsv($archivo, $datos);
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
        
    }
    
    static function Leer($nombreArhcivo) {
        $archivo = fopen($nombreArhcivo, "r");
        echo fread($archivo, filesize($nombreArhcivo));
        // Lee el archivo completo
        echo "</br>Leer:</br>";
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
    }
    function LeerCSV($nombreArhcivo) {
        $archivo = fopen($nombreArhcivo, "r");
        $dato = fgetcsv($archivo);
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
        return $dato;
    }
    static function LeerJSON($nombreArhcivo) {
        $archivo = fopen($nombreArhcivo, "r");
        echo var_dump(fread($archivo, filesize($nombreArhcivo)));
        // Lee el archivo completo
        echo "</br>Leer:</br>";
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
    }
    function LeerPorLinea() {
        $archivo = fopen($nombreArhcivo, "r");
        // Lee línea a línea hasta EOF
        while(!feof($archivo))
        {
            echo fgets($archivo),"<br>";
        }
        echo "LeerPorLinea: <br>";
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
    }
    static function LeerPorLineaJSON($nombreArhcivo) {
        $dato = @file_get_contents($nombreArhcivo);
        echo "</br>JSON Leido:</br>";
        var_dump(json_decode($dato,false));
        echo "</br></br>";
    }

    function Copiar($nombreOrigen, $nombreDestino) {
        if (file_exists($destino)) {
            echo copy($nombreOrigen, $nombreDestino) ? "El archivo fue creado con exito" : "Hubo un error al copiar el archivo";
        }
        return "El archivo no existe.";
    }
    function Borrar($nombreArhcivo) {
        if (file_exists($destino)) {
            return unlink($nombreArhcivo) ? "El archivo fue creado con exito" : "Hubo un error al copiar el archivo";
        }
        return "El archivo no existe.";
    }
}

?>