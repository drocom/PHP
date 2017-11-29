<?php


?>


<html>
    <head>

    </head>
    <body>
        <form action="Receta.php" method="get">
            Nombre Receta: <input type="text" name="receta">
            Nº comensales: <input type="text" name="comensales"> //ccomensales
            <br><br>
            <?php for ($i = 0; $i<6 ; $i++){
                echo '<label>Ingrediente: </label>';
                echo "<input type='text' name='ingrediente[]'>";
                echo '<label>Cantidad: </label>';
                echo "<input type='text' name='cantidad[]'>";
                echo '<label>gramos(solidos) o ml (liquidos) </label>';
                echo '<br><br>';
            }
            ?>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>

