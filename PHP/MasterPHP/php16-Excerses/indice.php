<?php
/*Hacer un programa que tenga un array de 8 elementos numericos enteros que haga lo siguiente:
Recorrerlo y mostrarlo
Ordenar y mostrar
Mostrar la longitud
Buscar algun elemento
*/ 
//Declarar array de 8 elementos
$arraNum=[1,2,3,4,6,7,8];

//Recorrer y mostra array
echo 'Recorrerlo y Mostrarlo'. '</br>';

foreach($arraNum as $arrnum){
    echo $arrnum.'</br>';
}

//Ordenar y mostra array
echo '</br>';
echo 'Ordenar  y Mostrarlo'. '</br>';
var_dump( array_reverse($arraNum));
echo '</br>';

//Mostrar longitud 
echo '</br>';
echo 'Longitud de Array'. '</br>';
echo sizeof($arraNum);

//Buscar un elemento
echo '</br>';
echo 'Buscar Elemento'. '</br>';
echo array_search(4, $arraNum);

?>