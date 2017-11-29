<?php
    $dato = array(
      'Sevilla'     => array(
                            'Sevilla'  =>"",
                            'Valencia' =>"0-5",
                            'Celta'    =>"2-2"
                            ),

      'Valencia'    => array(
                            'Sevilla' =>"7-2",
                            'Valencia'=>"",
                            'Celta'   =>"2-2"
                            ),

      'Celta'       => array(
                            'Sevilla' =>"1-1",
                            'Valencia'=>"0-5",
                            'Celta'   =>""
                        )

                );



?>


<table border="1">
    <?php
    echo "<tr><td>Resultados</td>";
    foreach ($dato as $indFila => $fila) {
        echo "<td>$indFila</td>";
    }
    echo "</tr>";



    foreach ($dato as $indFila => $fila){
        echo "<tr><td>$indFila</td>";
        foreach ($fila as $indCol => $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
