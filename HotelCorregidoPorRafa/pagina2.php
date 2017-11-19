
<?php
if ($_GET['txtHabitaciones']>=1 &&
    $_GET['txtHabitaciones']<=9     ){
    echo '<form action="pagina3.php" method="get">';
    for($i=0;$i<$_GET['txtHabitaciones'];$i++){
        echo "Habitacion n:".($i+1);
        echo "<input type='checkbox' name='hab[]' value='".($i+1)."'>";
        echo "<br>";
    }
    echo '<input type="submit" value="enviar">';
    echo '</form>';
}else{
    echo "Valor no valido";
    echo "...volver atras";
}
