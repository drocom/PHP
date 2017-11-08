<?php
include "index1.php";
session_start();


$uno = $_GET['uno'];
$dos = $_GET['dos'];
$tres = $_GET['tres'];
$cuatro = $_GET['cuatro'];
$cinco = $_GET['cinco'];
$seis = $_GET['seis'];
$siete = $_GET['siete'];
$ocho = $_GET['ocho'];
$nueve = $_GET['nueve'];

$habitaciones = array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");


if ($uno && isset($_GET['enviar'])) {
    print "La 1 se ha cogido<br>";
}


if ($dos && isset($_GET['enviar'])) {
    print "La 2 se ha cogido<br>";
}

if ($tres && isset($_GET['enviar'])) {
    print "La 3 se ha cogido<br>";
}


if ($cuatro && isset($_GET['enviar'])) {
    print "La 4 se ha cogido<br>";
}

if ($cinco && isset($_GET['enviar'])) {
    print "La 5 se ha cogida<br>";
}


if ($seis && isset($_GET['enviar'])) {
    print "La 6 se ha cogida<br>";
}

if ($siete && isset($_GET['enviar'])) {
    print "La 7 se ha cogida<br>";
}


if ($ocho && isset($_GET['enviar'])) {
    print "La 8 se ha cogida<br>";
}

if ($nueve && isset($_GET['enviar'])) {
    print "La 9 se ha cogida<br>";
}

echo "<br>";
echo '<a href="index3.php">Click para PASAR A LA TERCERA PAGINA</a>';

echo "<BR><br><br>SELECCIONA LAS HABITACIONES QUE TE GUSTARÍA COMPROBAR: ";
echo "<br><br>";



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index2.php" method="get">
    <input type="checkbox" name="uno" value="Habitacion 1"><br>
    <input type="checkbox" name="dos" value="Habitacion 2"><br>
    <input type="checkbox" name="tres" value="Habitacion 3"><br>
    <input type="checkbox" name="cuatro" value="Habitacion 4"><br>
    <input type="checkbox" name="cinco" value="Habitacion 5"><br>
    <input type="checkbox" name="seis" value="Habitacion 6"><br>
    <input type="checkbox" name="siete" value="Habitacion 7"><br>
    <input type="checkbox" name="ocho" value="Habitacion 8"><br>
    <input type="checkbox" name="nueve" value="Habitacion 9"><br>
  <input type="submit" name="enviar" value="Submit">
</form>







<br><br><br>
&ensp;

</body>
</html>








