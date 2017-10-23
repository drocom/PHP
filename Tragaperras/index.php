<!DOCTYPE html>
<?php
session_start();
    $n1 = rand(15,27);
    $n2 = rand(15,27);
    $n3 = rand(15,27);
    $contadorMonedas = 189;

if (isset($_SESSION['monedas'])){ // Si existe la session de la variable monedas
    $contadorMonedas = $_SESSION['monedas'];
    if (isset($_SESSION['btnInsertCoin'])){
        $contadorMonedas++;
    }
    else $contadorMonedas=0;
}

/***/
$_SESSION ['monedas'] = $contadorMonedas; // Leo las sesiones y al final las guardo

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    &#1278<?=$n1?>
    &#1278<?=$n2?>
    &#1278<?=$n3?>
    <form action="index.php" method="get">
        <input type="submit" name="btnInsertCoin" value="Meter monedas">
        <label><?=$contadorMonedas?></label>




    </form>

</body>
</html>