<?php
//definicion array 1
$peliculas=['Chazam','Batman','Spiderman','El señor de los anillos','Hombres de negro', 'Armados 4 ever'];
$peliculas2=array('Chazam','Batman','Spiderman','El señor de los anillos','Hombres de negro', 'Armados 4 ever');
$numeros=[1,2,3,4,5,6,7,8,9];
//Orden alfabeticamente 
asort($peliculas);
//Ordena alfabeticamente pero inverso
//arsort($peliculas);

//Ordena numericamente 
//asort array nuemrico
var_dump($peliculas);

//Agregar valores en un Array

//Agrega indices en el array
$peliculas2 = array('Super Man');
$peliculas []= 'Super Man';

var_dump($peliculas2);
echo '<br/>';
var_dump($peliculas);

//ARRAY PUSH
echo '</br>';
array_push($peliculas , 'Prueba');
var_dump($peliculas);

//Elinar una posicion del Array
unset($peliculas [7]);
var_dump($peliculas);


//Elemento aleatorio de un arreglo
echo '</br>';
var_dump (array_rand($peliculas));
$indice=array_rand($peliculas);
echo "El indice generado es: $peliculas[$indice]";

//Array numerico reverso
echo '</br>';
var_dump(array_reverse($numeros));

//Buscar en un array, primero pasamos el valor a buscar despues el arreglo en el cual se realiza la busqueda
echo '</br>';
var_dump( array_search('Batmadn',$peliculas));

//Contar numero de elementos
var_dump (count($peliculas));
var_dump (sizeof($peliculas));

?>