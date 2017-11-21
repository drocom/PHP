<?php

$contador = 0;


$espacio = '&nbsp';
$mitad = $_GET['ancho'];
$mitadd = $mitad / 2;
$contador = 0;
if ($_GET['ancho'] > 1 && $_GET['ancho'] <= 10) {


        for ($i = 0; $i < $mitad; $i++) {
            for ($a = 0; $a < $_GET['flechas']; $a++) {
                echo "*";
            }
                echo "<br>";
                do {
                    echo $espacio;
                    echo $espacio;
                    $contador++;
                } while ($contador <= $i);
                $contador = 0;
            }


        for ($i = 0; $i < $mitad + 2; $i++) {
            $contador = $mitad;
            for ($a = 0; $a < $_GET['flechas']; $a++) {
                echo "*";
            }
            echo "<br>";
            do {
                echo $espacio;
                echo $espacio;
                $contador--;
            } while ($contador >= $i);
        }
        echo "<br>";


}

?>