HOTEL RESULTADO:
<br><br>
<?php
foreach ($_GET as $ind=>$valor){
    if ($valor==""){
        echo "No se quien ocupa la hab $ind";
    }else{
        echo "La hab $ind esta ocupada por $valor";
    }
    echo "<br>";
}

