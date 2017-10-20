<?php
session_start();
include "funcionesJuego.php";
$tablero=dameTablero();
$parejas=dameParejas();


/*
 * procesar
 */
if (isset($_GET['fclick'])){
    $f=$_GET['fclick'];
    $c=$_GET['cclick'];
    $tablero[$f][$c]=$parejas[$f][$c];
    if ($f && $c == $parejas[0][0]){
        print "<h2>hola</h2>";
    }
}
$_SESSION['tablero']=$tablero;



echo "<table border=2>";
for ($f=0;$f<3;$f++){
    echo "<tr>";
    for ($c=0;$c<2;$c++){
        $nombre="carta".$tablero[$f][$c].".png";
        echo "<td>";
        echo "<a href=prueba.php?fclick=$f&cclick=$c>";
        echo "<img src='$nombre'>";
        echo "</a>";
        echo "</td>";
    }
}
echo "</table>";


?>
<a href="destruirsesion.php">iniciar</a>