<?php

function dameTablero(){
    if (isset($_SESSION['tablero'])){
        $tablero=$_SESSION['tablero'];
    }
    else{
        $tablero=array( array(0,0),
                        array(0,0),
                        array(0,0),
        );
    }
    return $tablero;
}
function dameParejas(){
    $parejas=array( array(3,2),
                    array(1,1),
                    array(3,2),
    );
    return $parejas;

    $_SESSION['tablero']=$tablero;






}