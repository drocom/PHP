<?php
$nombre = $_GET['nombre'];
$gusta = "";
for ($i = 0; $i < sizeof($_GET['deporte']); $i++) {
    $gusta = $gusta . " " . $_GET['deporte'][$i];
}
foreach ($_GET['deporte'] as $value) {
    $gusta = $gusta . " " . $value;
}

if ($gusta != "")
    $siono = "";
else
    $siono = "no";
?>

<p>A <?= $nombre ?> <?= $siono ?> le gusta  <?= $gusta ?> </p>
