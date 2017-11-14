<?php
session_start();
include "index3.php";


    $fichero_texto = fopen ("datosReserva.txt", "r");
    $contenido = unserialize(file_get_contents("datosReserva.txt"));
    echo $contenido;

?>
