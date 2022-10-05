<?php

Class Pizza {
    private integer $_id;
    private string $_sabor;
    private float $_precio;
    private string $_tipo = 'molde' . 'piedra';
    private integer $_cantidad;

    public function __Constructor($_id, $_sabor, $_precio, $_tipo, $_cantidad)
    {
        $this->_sabor = $_sabor;
        $this->_precio = $_precio;
        $this->_tipo = $_tipo;
        $this->_cantidad = $_cantidad;
    }
    public function getId() {
        return $this->$_id;
    }
    public function getSabor() {
        return $this->$_sabor;
    }
    public function getPresio() {
        return $this->$_presio;
    }
    public function getTipo() {
        return $this->$_tipo;
    }
    public function getCantidad() {
        return $this->$_cantidad;
    }
    public function setPrecio ($precio) {
        $this->presio = $precio;
    }
    public function setCantidad ($cantidad) {
        $this->cantidad = $this->cantidad + $cantidad;
    }
    private static function IdIncremental ($ListaDePizzas) {
        $length = count($_ListaPizzas);
        $id;

        if ($length == 0) {
            $id = 1;
        } else {
            $id = $length++;
        }
        return $id;
    }
    private static function pizzaValida($ListaDePizzas, $pizzaAValidar) {
        if ($ListaDePizzas != null) {
            $length = count($ListaDePizzas);
            if( $length > 0) {
                for ($i=0; $i < $length; $i++) { 
                    if ($pizza->getSabor() == $pizzaAValidar->sabor) {
                        if ($pizza->getTipo() == $pizzaAValidar->tipo) {
                            return $i;
                        }
                    }
                }
            }
        }
        echo 'el array está vacio';
        return false;
    } 
    public static function CargarPizza($ListaDePizzas, $pizzaACargar) {
        $nuevaPizza =  new Pizza(
            IdIncremental($ListaDePizzas),
            $pizzaACargar->sabor,
            $pizzaACargar->presio,
            $pizzaACargar->tipo,
            $pizzaACargar->cantidad
        );
        array_push($ListaDePizzas, CargarPizza($nuevaPizza));

    }
    public function ActualizarPizza($pizzaIngresada) {
        $this->setPresio($pizzaIngresada->presio);
        $this->setCantidad($pizzaIngresada->cantidad);
    }
    public static function CargarMuchasPizzas($ListaDePizzas, $pizzasACargar) {
        foreach($pizzasACargar as $pizza) {
            if (is_nan(pizzaValida($pizza))) {
                
            } else {
                CargarPizza($ListaDePizzas);
            }
        }
    }
    
    /*https://stackoverflow.com/questions/2959222/get-the-index-of-a-certain-value-in-an-array-in-php

    ARRAY SERCH*/
}