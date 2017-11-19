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
        echo "Numero: $valor \t";
        echo "<br>";
    }
}
?>