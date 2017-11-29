<?php

    setcookie("cumpleanos","2017-12-30",time()+900000);

    //Convert to date

    $fechaCumple=$_COOKIE['cumpleanos'];
    $date=strtotime($fechaCumple);//Converted to a PHP date (a second count)

    //Calculamos diferencia

    $diff=$date-time(); // Tiempo actual en milisegundos, debe ir en el formato USA
    $dias=floor($diff/(60*60*24)); // Pasamos a dias los tiempos que tenemos en ms

    // Visionamos dias

    if ($dias == 0 || $dias == -1){
        echo "FELIZ CUMPLEANOS CAMARADA";
    }
    else {
        echo "$dias dias quedan para tu cumpleanos<br />";
    }

// $fecha = $_COOKIE["cumpleanos"];
//
//    $separarFecha = explode("/",$fecha);
//
//    foreach ($separarFecha as $key) {
//        echo $key . "<br>";
//    }
//
//    echo '<br>';



?>


