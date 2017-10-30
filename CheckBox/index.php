<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="procesar.php">
            <label>Nombre: </label><input type="text" name="nombre">
            <br>
            <input type="checkbox" name="deporte[]" value="baloncesto"><label>Baloncesto</label>
            <br>
            <input type="checkbox" name="deporte[]" value="tennis"><label>Tennis</label>
            <br>
            <input type="checkbox" name="deporte[]" value="padel"><label>Padel</label>
            <br>
            <input type="checkbox" name="deporte[]" value="running"><label>Running</label>
            <br>
            <input type="submit" value="Enviar">
            
        </form>
    </body>
</html>
