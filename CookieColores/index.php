<?php
$colores = array ("rojo","azul","verde");
if (isset($_COOKIE["cook"])){
    setcookie("cook",$colores,time()+555);
    echo "no habia cookies";
}
else
    echo $_COOKIE["cook"];




/**
 * Created by PhpStorm.
 * User: GUILLE
 * Date: 17/11/17
 * Time: 12:37
 */