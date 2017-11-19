<?php
session_start();

if ($_GET['numero'] > 1) {
    setcookie("prueba",$_GET['numero'],time()+80006500);

    echo '<form action="index3.php" method="get">';
    for ($i = 0; $i < $_GET['numero']; $i++) {
        echo "Introduzca el número: \t";
        echo '<input type="text" name="numeritos[]">';
        echo '<br>';
    }
    echo '<br>';
    echo '<input type="submit" value="enviar">';
    echo '</form>';

}else{
    echo "No has introducido un número correcto ";
}




?>