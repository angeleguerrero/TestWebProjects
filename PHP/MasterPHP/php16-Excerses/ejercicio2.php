
<?php
//Agrega valor a un array mietras sea menos a 120 y se muestra por pantalla
$arrayColeccion=[];

for ($contador=0;$contador<120;$contador++){
//Agrega elementos a un array
echo array_push($arrayColeccion, $contador).'</br>';


}

echo $arrayColeccion[5];

var_dump($arrayColeccion[5]);
?>