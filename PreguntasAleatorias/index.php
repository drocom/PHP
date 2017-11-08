<?php
session_start();
include "Preguntas.php";
$pregunta = new Preguntas();
$_SESSION['correcta'] = $pregunta->getCorrecta();

?>








<html>
    <head>

    </head>
    <body>
        <br>
        <?=$pregunta->getTitulo()?>
        <a href="procesa.php?click=a"><?=$pregunta->getRespuestaA()?></a>
        <a href="procesa.php?click=b"><?=$pregunta->getRespuestaB()?></a>
        <a href="procesa.php?click=c"><?=$pregunta->getRespuestaC()?></a>


    </body>




</html>




<br><br><br><a href="destruirsesion.php">INICIAR</a>

