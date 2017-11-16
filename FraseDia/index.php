<?php

session_start();

$frases = array("Somos lo que hacemos de forma repetida. Por tanto, la excelencia no es un acto, sino un hábito.-Aristóteles.",
    "No vayas donde guía el camino, ve donde no hay camino y deja un rastro.-Ralph Waldo Emerson.",
    "El éxito llega cuando la preparación se encuentra con la oportunidad.-Henry Hartman.","Hoy es el primer día del resto de tu vida.-Abbie Hoffman.",
    "Sueña como si fueras a vivir para siempre, vive como si fueses a morir hoy.-James Dean.");


$ruta = "listaFrases.txt";

$listaFrases = print_r($frases, true); // $results now contains output from print_r

file_put_contents('listaFrases.txt', print_r($frases, true));

$guardada = date("Y-m-d H:i:s");
$actual = date("Y-m-d H:i:s");


if (isset($_SESSION['frase']) && isset($_SESSION['currentDay'])){
    $frase = $_SESSION['frase'];
    $guardada = $_SESSION['currentDay'];
    echo "hola";
    if (($guardada = $actual))
            echo $frase;
}
else {
    $listaFrases = file("listaFrases.txt");
    $frase = $listaFrases[array_rand($listaFrases)];
    echo $frase;
}


$_SESSION['frase'] = $frase;
$_SESSION['currentDay'] = $guardada;

?>


<br><br><br><a href="destruirsesion.php">INICIAR</a>

