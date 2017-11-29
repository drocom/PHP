<?php
    $color = "azul";

    echo $color;

    $color = cambiaColor();

    echo '<br>' . $color;

    function cambiaColor(){
        $color = "red";
        return $color;
    }

  echo '<br>','<br>';


$datos=array('Nombre' => array (
                            'mate',
                            'leng',
                            'hist'),
            'Juan' => array ('mate' => 8,
                            'leng' => 7,
                            'hist' => 9),
            'Elena' => array('mate' => 3,
                            'leng' => 7,
                            'hist' => 2),
            );


foreach ($datos['nombre'] as $nombre){
    echo $nombre . " ";
}
echo "<br>";


foreach ($datos as $materia=>$notas){
    echo $materia."-->";

    foreach ($notas as $nombre=>$nota){
        echo $nota."...";
    }

    echo "<br>";
}

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";



$datos=array('psp' => array ('pepe' => 5,
                            'elena' => 9,
                            'juan' => 9),
             'ad' => array ('pepe' => 2,
                                'elena' => 1,
                                'juan' => 3),
             'desarrollo' => array('guille' => 7,
                                'fernando' => 6,
                                'pepe' => 6)
                            );


foreach ($datos['psp'] as $nombre=>$nota){
    echo $nombre . " ";
}
echo "<br>";


foreach ($datos as $materia=>$notas){
    echo $materia."-->";

    foreach ($notas as $nombre=>$nota){
        echo $nota."...";
    }

    echo "<br>";
}





?>