<?php

class MaquinaTragaperras
{
    private $fruta1;
    private $fruta2;
    private $fruta3;
    private $monedas=0;
    private $apuestas=0;

    /*** CONSTRUCTOR ***/

    function __construct() // CONSTRUCTOR
    {
        $this -> fruta1 = "&#127827";
        $this -> fruta2 = "&#127827";
        $this -> fruta3 = "&#127827";
    }
    function jugar(){    // SIEMPRE QUE ESTEMOS EN OTRA FUNCION HAY QUE USAR $this
        $this -> fruta1 = "&#1278".rand(15, 27);
        $this -> fruta2 = "&#1278".rand(15, 27);
        $this -> fruta3 = "&#1278".rand(15, 27);
    }

    public function getFruta1(): string
    {
        return $this->fruta1;
    }
    public function getFruta2(): string
    {
        return $this->fruta2;
    }
    public function getFruta3(): string
    {
        return $this->fruta3;
    }

    function aniadirMonedas(){
        $this->monedas++;
    }
    function aniadirApuestas(){
        $this->apuestas++;
    }
    function getMonedas(){
        return $this->monedas;
    }
    function getApuesta(){
        return $this->apuestas;
    }

}