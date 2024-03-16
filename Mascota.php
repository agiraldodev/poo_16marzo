<?php

class Animal {
    protected $nombre;
    protected $edad;
    protected $tipo;

    public function __construct($nombre, $tipo, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tipo = $tipo;
    }

    public function getInfoMascota() {
        return "Nombre: ".$this->nombre . "<br/>". "Tipo: ".$this->tipo;
    }

    public function hacerSonido() {
        return "Sonido desconocido";
    }
}

class Perro extends Animal {
    public function __construct($nombre, $tipo){
        parent::__construct($nombre, "Perro", $tipo);
    }

    public function hacerSonido() {
        return "Guau Guau Guau !!!";
    }
}

class Gato extends Animal {
    public function __construct($nombre, $tipo){
        parent::__construct($nombre, "Gato", $tipo);
    }

    public function hacerSonido() {
        return "Miau Miau Miau !!!";
    }
}

$perro = new Perro("Firulais", 4);
$gato = new Gato("Whiskas", 7);

echo $perro->getInfoMascota() . $perro->hacerSonido() . "<br/>" ;
echo $gato->getInfoMascota() . $gato->hacerSonido() . "<br/>";