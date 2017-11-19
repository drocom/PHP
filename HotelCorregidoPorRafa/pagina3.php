<?php

if (isset($_GET['hab'])){
    echo "HABITACIONES OCUPADAS: ";
    echo '<form action="pagina4.php" method="get">';
    foreach ($_GET['hab'] as $valor) {
        echo "Habitacion $valor \t";
        echo "<input type='text' name='$valor'>";
        echo "<br>";
    }
    echo '<input type="submit" name="boton" value="enviar">';
    echo '</form>';
}else{
    echo "no hay habitaciones ocupadas ";
}

