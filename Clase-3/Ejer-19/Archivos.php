<?php 

class Archivo {
    function Escribir($nombreArhcivo, $texto) {

        $archivo = fopen($nombreArhcivo, "w");
        echo fwrite($archivo, $texto);
        echo fclose($archivo) ? "fue cerrado el archivo" : "no se pudo cerrar el archivo";
        
    }
    
    function Leer($nombreArhcivo) {
        $archivo = fopen($nombreArhcivo, "r");
        echo fread($archivo, filesize($nombreArhcivo));
        // Lee el archivo completo
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

    function Copiar($nombreOrigen, $nombreDestino) {
        if (file_exists($destino)) {
            echo copy($nombreOrigen, $nombreDestino) ? "El archivo fue creado con exito" : "Hubo un error al copiar el archivo";
        }
        return "El archivo no existe."
    }
    function Borrar($nombreArhcivo) {
        if (file_exists($destino)) {
            return unlink($nombreArhcivo) ? "El archivo fue creado con exito" : "Hubo un error al copiar el archivo";
        }
        return "El archivo no existe."
    }
}

?>