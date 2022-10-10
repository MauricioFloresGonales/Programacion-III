<?php 

class Auto {
    private string $_color;
    private double $_precio;
    private string $_marca;
    private Datetime $_fecha;

    public function __construct($_marca, $_color, $_precio=0, $_fecha='') {
        $this->_marca = $_marca;
        $this->_color = $_color;
        $this->_precio = $_precio;
        $this->_fecha = $_fecha;
    }

    public function AgregarImpuestos($precio) {
        return $this->_precio = $precio + ($precio * 0.21);
    }
    public static function MostrarAutos(Auto $auto) {
        echo 'Marca: ', $auto->_marca, '<br>';
        echo 'Color: ', $auto->_color, '<br>';
        echo 'Precio: ', $auto->_precio, '<br>';
        echo 'Fecha: ', $auto->_fecha, '<br>';
    }
    public function Equals(Auto $auto) {
        return $this->_marca == $auto->_marca; 
    }
    public static function Add(Auto $autoUno, Auto $autoDos) {

        if ($autoUno->Equals($autoDos)) {
            if ($autoUno->_color == $autoDos->_color) {
                return $autoUno->_precio + $autoDos->_precio; 
            }
            echo 'No son del mismo color.<br>';
        }
        echo 'No son de la misma marca.<br>';
        return 0;
    }
}

?>