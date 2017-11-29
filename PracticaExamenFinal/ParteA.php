<?php

//crearEscribir();
abrirLeer();


// Creamos fichero y escribimos //

function crearEscribir(){
    $fichero = fopen("cesta.sa", "a+");
    fputs($fichero,"Juan***E1254");
    fputs($fichero,"\n");
    fputs($fichero,"Elena***K9087");
    fputs($fichero,"\n");
    fputs($fichero,"Diego***E1122");
    fclose($fichero);
}


// Abrimos fichero y leemos //

    function abrirLeer(){
        $guardar = "";
        $fichero = fopen("cesta.sa", "r");
        while (!feof($fichero)){
            $linea = fgets($fichero);
            $guardar = explode("***",$linea);
            $guardar[1] = rtrim($guardar[1]); // Borramos los espacios que hay por la derecha POR DEFECTO
            if ($guardar[1]=="E1122"){
                echo "El trabajador lleva por nombre " . $guardar[0];
                break;
            }
        }
    }




?>