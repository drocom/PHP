<?php

include "funciones.php";


session_start();


$numeroHabitaciones = $_GET['ingresarHabitaciones'];
if ($numeroHabitaciones >= 1 && $numeroHabitaciones <= 9 && isset($_GET['enviar'])) {
    echo "HAY HABITACIONES DISPONIBLES PARA REALIZAR LA COMPROBACION<br><br><br>";
    echo '<a href="index2.php">Click para PASAR A LA SEGUNDA PAGINA</a>';
    mostrarHabitaciones();
} else
    echo "<br>COMPROBAR SI HAY HABITACIONES DISPONIBLES EN EL HOTEL:";
    echo "<br>______________________________________________________________";


$_SESSION ['habitaciones'] = $numeroHabitaciones; // Leo las sesiones y al final las guardo


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="get">
    <br><label>Nº habitaciones hotel que quiere comprobar: </label>
    <br><br><input type="text" name="ingresarHabitaciones">
    <br><br><input type="submit" name="enviar" value="Enviar">
</form>
<br><br><br>
&ensp;

</body>
</html>


<br><a href="destruirsesion.php">INICIAR LA SESION DE NUEVO</a>
