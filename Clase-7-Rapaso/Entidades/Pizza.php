<?php

Class Pizza {
    public int $_id;
    public string $_sabor;
    public float $_precio;
    public string $_tipo = 'molde' . 'piedra';
    public int $_cantidad;

    public function __construct($_id, $_sabor, $_precio, $_tipo, $_cantidad)
    {
        $this->_id = $_id;
        $this->_sabor = $_sabor;
        $this->_precio = $_precio;
        $this->_tipo = $_tipo;
        $this->_cantidad = $_cantidad;
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
    public function getCantidad() {
        return $this->_cantidad;
    }
    public function setPrecio ($precio) {
        $this->presio = $precio;
    }
    public function setCantidad ($cantidad) {
        $this->cantidad = $this->cantidad + $cantidad;
    }
    private static function IdIncremental ($ListaDePizzas) {
        $length = count($ListaDePizzas);
        $id = 0;

        if ($length == 0) {
            $id = 1;
        } else {
            foreach ($ListaDePizzas as $pizza) {
                if ($id < $pizza->getId()) {
                    $id = $pizza->getId();
                }
            }
            $id++;
        }
        return $id;
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
    public static function CargarPizza($sabor, $presio, $tipo, $cantidad) {
        return  new Pizza(1,$sabor,$presio,$tipo,$cantidad);
    }
    public function ActualizarPizza($pizzaIngresada) {
        $this->setPresio($pizzaIngresada->presio);
        $this->setCantidad($pizzaIngresada->cantidad);
    }
    public static function CargarMuchasPizzas($ListaDePizzas, $pizzasACargar) {
        foreach($pizzasACargar as $pizza) {
            $index = Pizza::GetIndexPizzaExistente($pizza);
            if (is_nan($index)) {
                $ListaDePizzas[$index]->ActualizarPizza($pizza);
            } else {
                Pizza::CargarPizza(
                    $ListaDePizzas, 
                    $pizza->sabor,
                    $pizza->presio,
                    $pizza->tipo,
                    $pizza->cantidad
                );
            }
        }
    }
    
    /*https://stackoverflow.com/questions/2959222/get-the-index-of-a-certain-value-in-an-array-in-php

    ARRAY SERCH*/
}