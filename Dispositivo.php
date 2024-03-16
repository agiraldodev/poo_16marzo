<?php

class Dispositivo
{
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getInformacion()
    {
        return "Marca: $this->marca" . " ----- " . "Modelo: $this->modelo";
    }
}

class Televisor extends Dispositivo
{
    public function getInformacionTele()
    {
        return parent::getInformacion();
    }
}

class Celular extends Dispositivo
{
    private $imei;

    public function getInformacionCelu()
    {
        return parent::getInformacion();


    }

    public function getImei()
    {
        return $this->imei;
    }

    public function setImei($imei)
    {
        $this->imei = $imei;
    }

}

$mitelevisor = new Televisor("Samsung", 202424323424);
echo $mitelevisor->getInformacionTele();

$miCelular = new Celular("iPhone", "15 Pro Max");
$miCelular->setImei(6666666666666);
echo $miCelular->getInformacionCelu();