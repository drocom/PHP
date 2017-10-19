<?php
session_start();
if (isset($_SESSION['tablero'])){
    $tablero=$_SESSION['tablero'];
}
else{
    $tablero=array( array(0,0),
                    array(0,0),
                    array(0,0)
    );
    $parejas=array( array(1,2),
                    array(3,1),
                    array(3,2)
    );
}
/*
 * procesar
 */
if(isset($_GET['fclick']) && isset($_GET['cclick'])){
    $f=$_GET['fclick'];
    $c=$_GET['cclick'];
    $tablero[$f][$c] = 3;
}

$_SESSION['tablero']=$tablero;



echo "<table border=2>";
for ($f=0;$f<count($tablero);$f++){
    echo "<tr>";
    for ($c=0;$c<count($tablero[$f]);$c++){
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