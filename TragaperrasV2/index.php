<?php
session_start();
include "MaquinaTragaperras.php";

if (isset($_SESSION['maquina'])) { // Si existe la maquina
    $maquina = unserialize($_SESSION['maquina']); // Recuperamos la maquina si existe!
    if (isset($_GET['btnIntroducir'])){
        $maquina -> aniadirMonedas();
    }
    if (isset($_GET['btnApostar'])){
        if ($maquina -> getApuesta() >= $maquina->getMonedas()){
            $maquina -> getApuesta() == $maquina->getMonedas();
        }else{
            $maquina->aniadirApuesta();
        }
    }
    if (isset($_GET['btnJugar'])){
        $maquina -> jugar();
    }
} else {
    $maquina = new MaquinaTragaperras();
}

$_SESSION['maquina'] = serialize($maquina);  // Convertir objeto en cadena



/*$maquina = new MaquinaTragaperras(); // CREAMOS EL OBJETO
$maquina->jugar(); //LLAMAMOS A LA FUNCION DE RANDOM

$_SESSION['maquina'] = serialize($maquina);  // Convertir objeto en cadena
$maquina2 = unserialize($_SESSION['maquina']); // Convertir cadena en objeto*/


?>

    ESTA ES UNA GRAN MAQUINA DE APUESTAS...

    <BR>

<?= $maquina->getFruta1(); ?>
<?= $maquina->getFruta2(); ?>
<?= $maquina->getFruta3(); ?>


<form action="" method="get">

    <input type ="submit" name="btnJugar" value="Jugar">
    <input type ="submit" name="btnIntroducir" value="Meter monedas"><?=$maquina -> getMonedas()?>
    <input type ="submit" name="btnApostar" value="Meter apuestas"><?=$maquina -> getApuesta()?>
</form>




