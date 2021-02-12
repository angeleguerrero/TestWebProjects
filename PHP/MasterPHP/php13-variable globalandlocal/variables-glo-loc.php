<?php
/*
VARIABLES LOCALES: Se definen en la funcion y no estan disponibles fuera de ella a menos que usemos return.
*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
VARIABLES GLOBALES: Son las que se declaran fuera de una funcion y estan disponobles dentro y fuera de las funciones.

*/

//Variable Global
$frase="Ni los genios son tan genios ni los mediocres tan mediocres".'</br>';



echo "Frase echo = ".$frase;

function printFrase(){
    /*GLOBAL PARA USAR VARIABLE GLOBAL DENTRO DE LA FUNCION, SI LA VARIABLE ESTA DEFINIDA
    DENTRO DE UNA FUNCION ENTONCES HAY QUE USAR RETURN PARA ACCEDER DESDE FUERA DE ESTA*/
    global $frase;
    return $frase;

}

 echo printFrase();

?>

