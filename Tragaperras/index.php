<!DOCTYPE html>
<?php
session_start();

if (isset($_GET['btnInsertCoin'])) {
    $n1 = "";
    $n2 = "";
    $n3 = "";
}
else {
    $n1 = rand(15, 27);
    $n2 = rand(15, 27);
    $n3 = rand(15, 27);

}


for ($i="&#127815";$i<="&#127827";$i++){

    echo $i;
}



if (isset($_SESSION['monedas'])){ // Si existe la session de la variable monedas
    $contadorMonedas = $_SESSION['monedas'];
    if (isset($_GET['btnInsertCoin'])){
        $contadorMonedas++;
    }else if(isset($_GET['btnPlay']) && $contadorMonedas>0){
        if ($n1==26 || $n2==26 || $n3==26){
            $contadorMonedas++;
        }
        if ($n1==26 && $n2==26 || $n2==26 && $n3=26 || $n1==26 && $n3==26 ){
            $contadorMonedas += 2;
        }

        if ($n1==26 && $n2==26 && $n3==26){
            $contadorMonedas += 3;
        }



        echo "AÚN PUEDES JUGAR";
        $contadorMonedas--;

    }
    else if ($contadorMonedas==0){
        echo "No puedes jugar ya que no tienes monedas suficientes.";
    }
}
    else $contadorMonedas=50;

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
        <br><br><input type="submit" name="btnInsertCoin" value="Meter monedas">
        <label><?=$contadorMonedas?></label>
        <br><br><input type="submit" name="btnPlay" value="Jugar">

    </form>

</body>
</html>


<br><br><a href="destruirsesion.php">INICIAR</a>