<?php
session_start();
include "index3.php";

if (isset($_SESSION['listaNombres']))
    $lista = $_SESSION ['listaNombres']; // Leo las sesiones y al final las guardo
    foreach ($lista as $value){
        echo $value;
    }






?>
