<?php

$fileHoy = fopen('fraseHoy', 'r');
$linea = fgets($fileHoy);
fclose($fileHoy);

$datos = explode("&", $linea);
$fechaFrase = $datos[1];
$datosHoy = getDate();
$fechaHoy = $datosHoy['mday'] . "/" . $datosHoy['mon'] . "/" . $datosHoy['year'];

setcookie("prueba","Esto es una prueba de que las cookies están funcionando",time()+86500);


if ($fechaFrase == $fechaHoy) {
    echo $datos[0];
} else {
    $fraseNueva = generarFraseDif($datos[0]);
    $fileHoy = fopen('fraseHoy', 'w'); // Abrimos el fichero en modo escritura
    $cadena = $fraseNueva . "&" . $fechaHoy; // Guardamos en una variable la frase que vamos a visionar unido mediante y a la fecha
    fputs($fileHoy, $cadena); // Se lo ponemos al archivo
    fclose($fileHoy); // Lo cerramos para guardar la información
    echo $fraseNueva; // Lo visionamos
}


function generarFraseDif($frase) // Le pasamos la frase que hay que cambiar
{
    $frases = file('frases.web'); // Leemos el archivo frases
    do {
        $n = rand(0, count($frases) - 1); // Conseguimos una frase aleatoria
        $fraseNueva = trim($frases[$n]); // Cortamos esa frase para devolverla
    } while ($frase == $fraseNueva); // Mientras siga saliendo la frase que le hemos pasado seguimos buscando una nueva
    return $fraseNueva; // Devolvemos la frase para visionarla
}