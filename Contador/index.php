<!DOCTYPE html>
<?php
session_start();



if (isset($_SESSION['monedas'])) { // Si existe la session de la variable monedas
    $contadorMonedas = $_SESSION['monedas'];

    if ($contadorMonedas==1550){
        print "FIN DE LA CUENTA";
    }

    if (isset($_GET['aumentar']) && $contadorMonedas<1550) {
        $contadorMonedas++;
    }

    if (isset($_GET['reset'])) {
        $contadorMonedas = 0;
    }


}

    else
        $contadorMonedas = 0;




/***/
$_SESSION ['monedas'] = $contadorMonedas; // Leo las sesiones y al final las guardo


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="get">
    <br>
    CONTADOR:

    <br><label><?=$contadorMonedas?></label>
    <br><br><a href="?aumentar=1">AUMENTARCONTADOR</a>
    <br><br><a href="?reset=1">RESET</a>




</form>



</body>
</html>


<br><br><br><a href="destruirsesion.php">REINICIAR SESION </a>
