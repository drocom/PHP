<html>
    <head>

    </head>
    <body>
        <h1>BUSCA LA FRUTA</h1>

    </body>
</html>


<?php

$fruta = 0;
$numeroAleatorioFrutas = rand(7,20);
$numeros = array();
$contador = 0;

echo "<h3>$numeroAleatorioFrutas frutas </h3>"; // Número de frutas que vamos a sacar //
echo "<br><br>";

// Vamos obteniendo la fruta //
for ($i=0;$i<$numeroAleatorioFrutas;$i++){
    $frutaAleatoria = rand(15,27);
    echo $fruta = '&#1278' . $frutaAleatoria;
    $numeros[$i] = $frutaAleatoria;
}

$numeroFrutaVisionar = rand(15,27);

for ($i=0;$i<count($numeros);$i++){
    if ($numeros[$i]==$numeroFrutaVisionar){
        $contador++;
    }
}


echo "<h3>Resultado</h3>";
echo "La fruta" . '&#1278' . $numeroFrutaVisionar . "está " .$contador . " veces en la lista";

?>
