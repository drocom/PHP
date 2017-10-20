<?php
session_start();
include "funcionesJuego.php";
$tablero=dameTablero();
$parejas=dameParejas();
$f;$c;

$comprobacion=array( array(3,2),
    array(1,1),
    array(3,2),
);

$lista = array();


if (isset($_GET['fclick'])) {
        $f = $_GET['fclick'];
        $c = $_GET['cclick'];

    for ($z = 0; $z < 6; $z++) {
        if ($f == 0 && $c == 0) $lista[0] = 1;     // if($lista[0] == $lista[4])
        if ($f == 0 && $c == 1) $lista[1] = 2;     // echo "you have paired two cards";
        if ($f == 1 && $c == 0) $lista[2] = 3;
        if ($f == 1 && $c == 1) $lista[3] = 3;
        if ($f == 2 && $c == 0) $lista[4] = 1;
        if ($f == 2 && $c == 1) $lista[5] = 2;
        echo $lista[$z];
    }
        $tablero[$f][$c] = $parejas[$f][$c];

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
<a href="destruirsesion.php">INICIAR</a>