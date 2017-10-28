<?php
session_start();
include "MaquinaTragaperras.php";
if (isset($_SESSION['maquina'])){
    $maquina= unserialize($_SESSION['maquina']);
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
        $maquina->jugar();
    }
}else{
    $maquina=new MaquinaTragaperras();
}
/*GUARDAR DATOS*/
$_SESSION['maquina']= serialize($maquina);

?>

ESTA ES UNA GRAN MAQUINA DE APUESTAS.....
<BR>
<?=$maquina->getFruta1()?>
<?=$maquina->getFruta2()?>
<?=$maquina->getFruta3()?>
<FORM action="" method="get">

    <input type="submit"
           name="btnRecargar"
           value="Recargar">

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