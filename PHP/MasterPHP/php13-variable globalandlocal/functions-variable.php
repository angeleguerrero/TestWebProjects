<?php

/*Funcion variable: pasamos a una variable el nombre una funcion y llamamos la variable como si fuera una funcion*/

//function1
function buenasTardes(){

    return "Hey, que tal estuvo la comida";
}


//function2
function buenasNoches(){

    return "Te vas a dormir?, pasa beunas noches";
}


$horario="buenasTardes";

echo $horario();

?>