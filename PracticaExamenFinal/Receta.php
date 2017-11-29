<?php

    $nComensales = $_GET['comensales'];
    $receta = $_GET['receta'];
    $i = 0;
    $ingredientes = array();

    foreach ($_GET['ingrediente'] as $valor) {
        $ingredientes[] = $valor; // Lo metemos en un array para ir sacandolo luego
    }

echo "La " . $receta . " para 1 unico comensal lleva los siguientes ingredientes:   ";

    echo '<br>';
    echo '<br>';

    foreach ($_GET['cantidad'] as $valor) {
            if ($ingredientes[$i]!="") {
                echo "Ingrediente ".($i+1)." $ingredientes[$i] \t";
                $cantidadIngrediente = $valor / $nComensales;
                echo " ---------------------  Cantidad = $cantidadIngrediente ";
                echo "<br>";
                $i++;
            }
        }


?>