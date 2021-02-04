<?php
/*
Crear un script en php, una tipo array, una tipo string 
una booleana y otra int. Debe imprimir un mensaje segun el tipo de variable que sea.

*/ 

$varInt=77;
$varBoolean=false;
$varString="PHP Master";
$varArray=array(8, 'tester');

if (is_string($varString)){
    echo "$varString Es un String".'</br>';
}

if (is_int($varInt)){
    echo "$varInt Es un Entero".'</br>';
}

if (is_bool($varBoolean)){
    echo "$varBoolean Es un Boolean".'</br>';
}

echo '</br>';
//var_dump($varArray);
if (is_array($varArray)){
    foreach ($varArray as $vaArray){
        //var_dump($vaArray);
        echo $vaArray.'</br>';
    }
    echo 'Es un Array';
}


?>
