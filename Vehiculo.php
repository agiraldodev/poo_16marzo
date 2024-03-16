<?php

class Vehiculo {
    private $numeroLlantas;
    private $color;
    private $numeroPuertas;
    private $tipo;

    public function __construct($numeroLlantas, $color, $numeroPuertas, $tipo){
        $this->numeroLlantas=$numeroLlantas;
        $this->color=$color;
        $this->numeroPuertas=$numeroPuertas;
        $this->tipo=$tipo;
    }

    public function getInformacion(){
        return "Numero Llantas: " . $this->numeroLlantas . "Color: ". $this->color ."Número Puertas: ".$this->numeroPuertas ."Tipo: ". $this->tipo;
    }

}

class Moto extends Vehiculo { // Herencia de clases
    public function getInformacionMoto() {
        return parent::getInformacion();
    }

}

$carro = new Vehiculo(4, "Blanca", 6, "Carro");

echo $carro->getInformacion();