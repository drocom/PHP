<!DOCTYPE html>
<?php
session_start();

if (isset($_GET['btnInsertCoin'])) {
    $n1 = "";
    $n2 = "";
    $n3 = "";
}

else if(isset($_GET['btnPlay'])) {
    $n1 = rand(15,27);
    $n2 = rand(15,27);
    $n3 = rand(15,27);

}

if (isset($_SESSION['monedas'])){ // Si existe la session de la variable monedas
    $contadorMonedas = $_SESSION['monedas'];
    $contadorMonedasApostadas = $_SESSION['monedasApostadas'];

        if (isset($_GET['btnAumentarApuesta'])){
            $contadorMonedas--;
            $contadorMonedasApostadas++;
        }

        if (isset($_GET['btnInsertCoin'])){
            $contadorMonedas++;
        }

        if ($contadorMonedasApostadas == 0){
            $contadorMonedasApostadas = 1;
        }

        if(isset($_GET['btnPlay']) && $contadorMonedas>0){

        $contadorMonedas--; // Le quitamos una moneda de la acción de jugar en sí.


        if ($n1==26 && $n2==26 && $n3==26){
            $contadorMonedas += 10 * $contadorMonedasApostadas;
        }

        else if ($n1==26 && $n2 ==26 || $n2==26 && $n3=26 || $n1==26 && $n3==26 ){
            $contadorMonedas += 4 * $contadorMonedasApostadas;
        }

        else if ($n1==26 || $n2==26 || $n3==26){
            $contadorMonedas+=1 * $contadorMonedasApostadas ;
        }


        if ($n1 != 26 && $n2 !=26 && $n3 != 26) { // Si ninguna de las tres frutas son cerezas...
            if ($n1 == $n2 && $n2 == $n3) {     //... y hay tres frutas iguales...
                $contadorMonedas += 5 * $contadorMonedasApostadas;

            }
        }

         if ($n1 != 26 && $n2 != 26 && $n3 != 26) { // Si ninguna de las 3 frutas son cerezas...
            if ($n1 == $n2 || $n2 == $n3 || $n1 == $n3) {   //... y dos de ellas son iguales...
                $contadorMonedas += 2 * $contadorMonedasApostadas;      // ... GANAMOS 2
            }
        }


//        else if ($n1 == 26 || $n2 == 26 || $n3 == 26) { // Con que haya una de las 3 frutas que no sean la cereza entramos.
//            if ($n1 == $n2 || $n2 == $n3 || $n1 == $n3) { // ESTE CASO SE SOLAPA CON EL CASO NUMERO A y CON EL CASO NUMERO C del documento
//                $contadorMonedas += 3;
//            }
//        }

        $contadorMonedasApostadas = 0;

    }
    else if ($contadorMonedas==0){
        echo "No puedes jugar ya que no tienes monedas suficientes.";
    }
}
    else $contadorMonedas=50;

/***/
$_SESSION ['monedas'] = $contadorMonedas; // Leo las sesiones y al final las guardo
$_SESSION ['monedasApostadas'] = $contadorMonedasApostadas; // Leo las sesiones y al final las guardo


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index.php" method="get">
        <br><br><input type="submit" name="btnInsertCoin" value="Meter monedas">
        <label><?=$contadorMonedas?></label>
        <label><?=$contadorMonedasApostadas?></label>
        <br><br><input type="submit" name="btnPlay" value="Jugar">
        <br><br><input type="submit" name="btnAumentarApuesta" value="Aumentar apuesta">
    </form>
    &#1278<?=$n1?>
    &#1278<?=$n2?>
    &#1278<?=$n3?>


</body>
</html>


<br><br><a href="destruirsesion.php">INICIAR</a>