<?php

class MaquinaTragaperras
{
    private $fruta1;
    private $fruta2;
    private $fruta3;
    private $monedas = 0;
    private $apuestas = 0;

    function __construct()
    {
        $this->fruta1 = "&#127827";
        $this->fruta2 = "&#127827";
        $this->fruta3 = "&#127827";
    }

    function jugar()
    { // SIEMPRE QUE ESTEMOS EN OTRA FUNCION HAY QUE USAR $this
        $this->fruta1 = "&#1278" . rand(15, 27);
        $this->fruta2 = "&#1278" . rand(15, 27);
        $this->fruta3 = "&#1278" . rand(15, 27);
        $this->monedas--;
        $this->monedas;
    }

    function comprobar()
    {
        if ($this->apuestas == 0) {
            $this->apuestas = 1; // Si las monedas que apostamos son 0 las pasamos a ser 1 para poder operar con ellas.
        }

        if ($this->fruta1 == "&#127826" && $this->fruta2 == "&#127826" && $this->fruta3 == "&#127826") {
            $this->monedas += 10 * $this->apuestas;
            return $this->monedas;

        } else if ($this->fruta1 == 26 && $this->fruta2 == 26 || $this->fruta2 == 26 && $this->fruta3 = 26 || $this->fruta1 == 26 && $this->fruta3 == 26) {
            $this->monedas += 4 * $this->apuestas;
            return $this->monedas;

        } else if ($this->fruta1 == 26 || $this->fruta2 == 26 || $this->fruta3 == 26) {
            $this->monedas += 1 * $this->apuestas;
            return $this->monedas;
        }


        if ($this->fruta1 != 26 && $this->fruta2 != 26 && $this->fruta3 != 26) { // Si ninguna de las tres frutas son cerezas...
            if ($this->fruta1 == $this->fruta2 && $this->fruta2 == $this->fruta3) {     //... y hay tres frutas iguales...
                $this->monedas += 5 * $this->apuestas;
                return $this->monedas;

            }
        }

        if ($this->fruta1 != 26 && $this->fruta2 != 26 && $this->fruta3 != 26) { // Si ninguna de las 3 frutas son cerezas...
            if ($this->fruta1 == $this->fruta2 || $this->fruta2 == $this->fruta3 || $this->fruta1 == $this->fruta3) {   //... y dos de ellas son iguales...
                $this->monedas += 2 * $this->apuestas;      // ... GANAMOS 2
                return $this->monedas;
            }
        }
        $this->apuestas=0;
    }

    function reset()
    {
        $this->__construct();
        $this->apuestas = 0;
        $this->monedas = 0;
    }

    function getFruta1()
    {
        return $this->fruta1;
    }

    function getFruta2()
    {
        return $this->fruta2;
    }

    function getFruta3()
    {
        return $this->fruta3;
    }

    function aniadirMonedas()
    {
        $this->monedas++;
    }

    function aniadirApuesta()
    {
        $this->apuestas++;
    }

    function getMonedas()
    {
        return $this->monedas;
    }

    function getApuesta()
    {
        return $this->apuestas;
    }
}
