<?php
session_start();
include "MaquinaTragaperras.php";
if (isset($_SESSION['maquina'])){ // SI EXISTE LA VARIABLE DE SESION MAQUINA
    $maquina= unserialize($_SESSION['maquina']); // Recuperamos la maquina si existe!

    if (isset($_GET['btnRecargar'])){
        $maquina->reset();
    }

    if(isset($_GET['btnIntroducir'])){
        $maquina->aniadirMonedas();
    }
    if (isset($_GET['btnApuesta'])){
        if($maquina->getApuesta()>=$maquina->getMonedas()){
            $maquina->getApuesta()==$maquina->getMonedas();
        }else{
            $maquina->aniadirApuesta();
        }
    }
    if (isset($_GET['btnJugar'])){
        if ($maquina->getMonedas()>0) {
            $maquina->jugar();
            $maquina->comprobar();
        }
    }
}else{
    $maquina=new MaquinaTragaperras();
}
/*GUARDAR DATOS*/
$_SESSION['maquina'] = serialize($maquina); // Convertir objeto en cadena

?>

ESTA ES UNA GRAN MAQUINA DE APUESTAS.....
<BR>
<div class="global">
<br>
<?=$maquina->getFruta1()?>
<?=$maquina->getFruta2()?>
<?=$maquina->getFruta3()?>

</div>

<br><br>
<FORM action="" method="get">

    <input type="submit"
           name="btnRecargar"
           value="Reset">

    <input type="submit"
           name="btnJugar"
           value="Jugar">

    <input type="submit"
           name="btnIntroducir"
           value="Meter monedas">
    <?=$maquina->getMonedas()?>
    <input type="submit"
           name="btnApuesta"
           value="Apostar">
    <?=$maquina->getApuesta()?>
</FORM>


<br><br><br><a href="destruirsesion.php">INICIAR</a>
