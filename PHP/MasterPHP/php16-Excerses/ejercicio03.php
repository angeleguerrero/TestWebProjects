<?php
/* Valide si la variable esta vacia y 
si esta vacia rellenar con texto minuscula y mostrarlo mayuscula y negrita*/ 

$texto="";

if (empty($texto)){
    $texto="Este es un ejemplo de texto";
    $textoMAYU= strtoupper($texto);
    echo '<strong>'."$textoMAYU".'</strong>';

}else{

    echo "La variable tiene este valor $texto dentro";
}





?>
