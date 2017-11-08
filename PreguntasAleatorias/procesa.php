<?php
echo "PROCESANDO";

$p = new Preguntas();

if ($_GET['click'] == $_SESSION['correcta'])
    echo "CORRECTA";
else echo "INCORRECTA";