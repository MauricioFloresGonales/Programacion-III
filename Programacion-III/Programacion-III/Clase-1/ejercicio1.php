<?php
    $numeroEntero = 1;
    $suma = 0;
    $resultadoFinal;

    while ($suma < 1000) {
        $suma = $suma + $numeroEntero;
        if ($suma < 1000) {
            $resultadoFinal = $suma;
            $numeroEntero++;
        }
    }
    echo '<br>Cantidad de veces sumadas: ', $numeroEntero, '<br>Resultado final: ', $resultadoFinal ;
?>