<?php
include "index.php";
session_start();

if (isset($_SESSION['habitaciones'])) { // Si existe la session de la variable monedas
    $numeroHabitaciones = $_SESSION['habitaciones'];
    echo $numeroHabitaciones;
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index3.php" method="get">

  <input type="submit" name="enviar" value="Submit">
</form>







<br><br><br>
&ensp;

</body>
</html>








