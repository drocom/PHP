<?php

session_start();
include "index2.php";
    if (isset($_SESSION['habitacionesFinales'])) {
        $numeroHabitaciones = $_SESSION['habitacionesFinales'];
    }

    $fichero = fopen("datosReserva.txt", "a+");
    file_put_contents('datosReserva.txt', serialize($_POST));
    fclose($fichero);

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index4.php" method="POST">
        <?php
            for ($i=0;$i<$numeroHabitaciones;$i++) {
                echo "<input type='text' name='subject[]' value=''>";
            }
        ?>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>
</html>








