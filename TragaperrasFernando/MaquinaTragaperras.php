<?php
class MaquinaTragaperras {
    private $fruta1;
    private $fruta2;
    private $fruta3;
    private $monedas=0;
    private $apuestas=0;
    function __construct() {
        $this->fruta1="&#127827";
        $this->fruta2="&#127827";
        $this->fruta3="&#127827";
    }
    function jugar(){
        $this->fruta1="&#1278".rand(15, 27);
        $this->fruta2="&#1278".rand(15, 27);
        $this->fruta3="&#1278".rand(15, 27);
    }
    function getFruta1() {
        return $this->fruta1;
    }

    function getFruta2() {
        return $this->fruta2;
    }

    function getFruta3() {
        return $this->fruta3;
    }
    function aniadirMonedas(){
        $this->monedas++;
    }
    function aniadirApuesta(){
        $this->apuestas++;
    }
    function getMonedas(){
        return $this->monedas;
    }
    function getApuesta(){
        return $this->apuestas;
    }
}
