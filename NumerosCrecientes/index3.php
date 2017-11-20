<?php

if ($_COOKIE["prueba"]>1) {
    echo "CORRECTO";
    echo "<br>";
    echo "El numero era correcto, " . $_COOKIE["prueba"];
}
else
    echo "Incorrecto.";


echo '<br><br>';

if ($_GET['numeritos']) {
    foreach ($_GET['numeritos'] as $valor) {
        if($valor > 0) {
            echo "Numero: $valor \t";
            echo "<br>";
        }
        else{
            echo "El siguiente valor no es positivo $valor ";
            echo "<br>";
        }
    }
}
?>