<?php

class Animal {

    // Atributos
    private $especie;
    private $numeroPatas;
    private $tipo;

    public function __construct($especie, $numeroPatas, $tipo) {
        $this->especie = $especie;
        $this->numeroPatas = $numeroPatas;
        $this->tipo = $tipo;
    }

    public function mostrarInformacion(){
        return "El animal es $this->especie y tiene $this->numeroPatas patas con el tipo $this->tipo";
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function setNumeroPatas($numeroPatas){
        $this->numeroPatas = $numeroPatas;
    }

    public function getNumeroPatas() {
        return $this->numeroPatas;
    }
}

// Instancia de la clase Animal
$animal1 = new Animal("Mamífero", 4, "Terrestre");
//echo $animal1->mostrarInformacion();

echo $animal1->getEspecie();
$animal1->setNumeroPatas(16);
echo $animal1->getNumeroPatas();