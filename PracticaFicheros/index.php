<?php

$numero1 = 1;
$numero2 = 1;
$numero3 = 1;
$ruta = "datosEjercicio.txt";


if (isset($_GET['btnFichero'])){
    escribirNumeros($numero1,$numero2,$numero3);
}
if (isset($_GET['btnSumar'])){
    obtenerSuma();
}
if (isset($_GET['btnArray'])){
    obtenerArray($ruta);
}


function escribirNumeros($numero1,$numero2,$numero3){

    $ficheroPrueba = fopen("datosEjercicio.txt", "a+");
    fputs($ficheroPrueba,$numero1);
    fputs($ficheroPrueba,"\n");
    fputs($ficheroPrueba,$numero2);
    fputs($ficheroPrueba,"\n");
    fputs($ficheroPrueba,$numero3);
    fclose($ficheroPrueba);

}

function obtenerSuma(){
    $suma = 0;
    $ficheroPrueba = fopen("datosEjercicio.txt", "r");
    while (!feof($ficheroPrueba)){
        $linea = fgets($ficheroPrueba);
        $suma += intval($linea);
    }
    fclose($ficheroPrueba);
    $ficheroPrueba = fopen("datosEjercicio.txt", "a+");
    fputs($ficheroPrueba,"\n");
    fputs($ficheroPrueba,"SUMA = " . $suma);
    fclose($ficheroPrueba);

    return $suma;
}

function obtenerArray($ruta){
    $ficheroPrueba = fopen($ruta, "r");
    $array = file($ruta);
    fclose($ficheroPrueba);
    return $array;
}



?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="get">

    <br><br><input type="submit" name="btnFichero" value="ESCRIBIR NUMEROS">
    <br><br><input type="submit" name="btnSumar" value="SUMAR NUMEROS">
    <br><br><input type="submit" name="btnArray" value="OBTENER ARRAY">

</body>
</html>


<br><br><br><a href="destruirsesion.php">INICIAR</a>
