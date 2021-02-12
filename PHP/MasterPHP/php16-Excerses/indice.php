<?php
/*Hacer un programa que tenga un array de 8 elementos numericos enteros que haga lo siguiente:
Recorrerlo y mostrarlo
Ordenar y mostrar
Mostrar la longitud
Buscar algun elemento
*/ 
//Declarar array de 8 elementos
$arraNum=[12,223,32,42,62,721,8];

//Recorrer y mostra array
echo 'Recorrerlo y Mostrarlo'. '</br>';
function recorerArray($arraNum){
    $resultado="";
    foreach($arraNum as $arrnum){
        //$resultado=$resultado.$arrnum."</br>"
        $resultado.= $arrnum.'</br>';
    }
    return $resultado;

}

echo recorerArray($arraNum);



//Ordenar y mostra array
echo '</br>';
echo 'Ordenar  y Mostrarlo'. '</br>';
//Ordeno array
 arsort($arraNum);
 //Muestro Array
 echo recorerArray($arraNum);
//var_dump( array_reverse($arraNum));
echo '</br>';

//Mostrar longitud 
echo '</br>';
echo 'Longitud de Array'. '</br>';
echo sizeof($arraNum);

//Buscar un elemento
echo '</br>';
echo 'Buscar Elemento'. '</br>';
$busqueda= 8;
echo "BUSCAR EN ARRAY ELEMENTO $busqueda";
$indice=array_search($busqueda, $arraNum);
if (empty($indice)) {
    echo "NUMERO  EXISTE". '</br>';
} else{

    echo "NUMERO  NO EXISTE". '</br>';
}


?>