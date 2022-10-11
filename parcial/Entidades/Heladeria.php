<?php

Class Heladeria {
    public int $_id;
    public string $_sabor;
    public float $_precio;
    public string $_tipo = 'agua' . 'crama';
    public int $_stock;

    public function __construct($_id, $_sabor, $_precio, $_tipo, $_stock)
    {
        $this->_id = $_id;
        $this->_sabor = $_sabor;
        $this->_precio = $_precio;
        $this->_tipo = $_tipo;
        $this->_stock = $_stock;
    }
    public function getId() {
        return $this->$_id;
    }
    public function setId ($id) {
        $this->id = $this->id;
    }
    public function getSabor() {
        return $this->_sabor;
    }
    public function getPresio() {
        return $this->_presio;
    }
    public function getTipo() {
        return $this->_tipo;
    }
    public function getStock() {
        return $this->_stock;
    }
    public function setPrecio ($precio) {
        $this->presio = $precio;
    }
    public function setStock ($cantidad) {
        $this->stock = $this->stock + $cantidad;
    }
    private static function GetIndexPizzaExistente($ListaDePizzas, $pizzaAValidar) {
        if ($ListaDePizzas != null) {
            $length = count($ListaDePizzas);
            if( $length > 0) {
                for ($i=0; $i < $length; $i++) { 
                    if ($ListaDePizzas[i]->getSabor() == $pizzaAValidar->sabor) {
                        if ($ListaDePizzas[i]->getTipo() == $pizzaAValidar->tipo) {
                            return $i;
                        }
                    }
                }
            }
        }
        echo 'el array está vacio';
        return false;
    }
    public static function CargarHelado($sabor, $presio, $tipo, $stock) {
        return new Heladeria(1,$sabor,$presio,$tipo,$stock);
    }
    public function ActualizarHelado($pizzaIngresada) {
        $this->setPresio($pizzaIngresada->presio);
        $this->setStock($pizzaIngresada->stock);
    }
    private static function HeladoExistente($ListaDeHelados, $HeladosAValidar) {
        if ($ListaDeHelados != null) {
            $length = count($ListaDeHelados);
            if( $length > 0) {
                for ($i=0; $i < $length; $i++) { 
                    if ($ListaDeHelados[i]->getSabor() == $HeladosAValidar->sabor) {
                        if ($ListaDeHelados[i]->getTipo() == $HeladosAValidar->tipo) {
                            return $i;
                        }
                    }
                }
            }
        }
        echo 'el array está vacio';
        return false;
    }
    
    /*https://stackoverflow.com/questions/2959222/get-the-index-of-a-certain-value-in-an-array-in-php

    ARRAY SERCH*/
}