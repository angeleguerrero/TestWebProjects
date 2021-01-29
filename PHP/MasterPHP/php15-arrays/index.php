<?php
/*ARRAY: Coleccion de datos bajo un mismo nombre
 por la que puedo acceder por un indice nuemro o alfanumerico*/

$pelicula="";
//definicion array 1
$peliculas=array('Batman','Spiderman','El señor de los anillos','Hombres de negro');
//definicion array 2
$artistas=['Drake', 'Badbunny', 'Lil Wayne', 'Maluma'];
var_dump($peliculas[2]);
echo '</br>';
var_dump($artistas);
var_dump($peliculas);
echo '</br>';

echo $artistas['2'];
echo '</br>';
echo $peliculas[2];

echo '<ul>';
//Recorer array foreac
echo '</br>';
echo '<h3>Listado de peliculas FOR</h3>';
echo '</br>';


//Bucle FOR

for ($cont=0;$cont<count($peliculas);$cont++){
echo  '<li>'.$peliculas[$cont].'</li>';
echo '</br>';

}



// BUCLE FOREACH
echo '</br>';
echo '<h3>Listado de peliculas FOREACH</h3>';
echo '</br>';

//recorre array peliculas asigna el contenido a la variable peli
foreach ($peliculas as  $peli) {
    echo '</br>';
    echo '<li>'.$peli.'</li>';
    
}



//ARRAYS ASOCIATIVOS
echo '</br>';
echo '<h3>Listado de peliculas INDICES ASOCIATIVOS</h3>';
echo '</br>';

var_dump($_GET);//Muestra array asociativo por GET igualmente por POST
$persona1=array(
'nombre'=>'Angel',
'apellido'=>'Guerrero M',
'web'=>'www.angelguerrero.dev',
);


$persona2=[
    'nombre'=>'Angel',
    'apellido'=>'Guerrero M',
    'web'=>'www.angelguerrero.dev',
];


var_dump($persona1['nombre']);
echo '</br>';
var_dump($persona2['apellido']);


//ARRAYS MULTIDIMEN
echo '</br>';
echo '<h3>Listado de ARREGLO MULTIDIMECIONAL</h3>';
echo '</br>';

$contacto=array(

 array(   
  'nombre'=>'Emilio',
  'email'=>'emilio@gmail.com',
 ),
 array(   
    'nombre'=>'Mario',
    'email'=>'mario@gmail.com',

    [   
        'direccion'=>'calle 32',
        'numero'=>'854697',
    ],


   ),


);
echo '</br>';
foreach ($contacto as  $cont) {
    var_dump($cont);
}



var_dump($contacto[1][0]['numero']);

echo '<ul/>';







?>