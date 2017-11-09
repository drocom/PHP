<?php
session_start();
include "index.php";

if (isset($_SESSION['habitaciones'])) { // Si existe la session de la variable monedas
    $numeroHabitaciones = $_SESSION['habitaciones'];
    echo $numeroHabitaciones;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $i = 0;
    while($i < $numeroHabitaciones) {
        echo "<input type='checkbox' name='habitaciones[]' />";
        $i++;
    }

    $_SESSION ['habitacionesFinales'] = $numeroHabitaciones; // Leo las sesiones y al final las guardo

}




?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index3.php" method="get">
        <input type="submit" name="enviar" value="enviar">
    </form>


</body>
</html>








