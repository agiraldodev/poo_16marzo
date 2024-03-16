<?php

class Estudiante {
    private $nombre;
    private $edad;
    private $curso;

    public function __construct($nombre, $edad, $curso) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }

    public function getInfoEstudiante() {
        return "El estudiante $this->nombre está en el curso $this->curso y tiene $this->edad";
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function setEdadIgual30() {
        $this->edad = 30;
    }


}

$estudiante = new Estudiante("Andres", 20, "Sistemas");

echo $estudiante->getInfoEstudiante();

$estudiante->setEdadIgual30();

echo $estudiante->getInfoEstudiante();


