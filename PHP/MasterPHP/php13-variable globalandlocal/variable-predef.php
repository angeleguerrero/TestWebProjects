<?php


//Debuguear
//var_dump()
echo date('d-m-y');
echo '</br>';
echo time();

echo '</br>';
//Matematicas
echo "Raiz cuadrada de un numero: ".sqrt(5);
echo '</br>';
echo "Numero Aleatorio entre 20 y 50: " .rand(20,40);
echo '</br>';
echo "Numero PI: " .pi();
echo '</br>';
echo "Redondear " .round(505.788,2);


//Mas funciones

//Para saber el tipo de dato
echo '</br>';
$nombre=25;
echo gettype($nombre);

echo '</br>';
if (is_string($nombre)){
echo "NOMBRE Es un String, no es un Decimal";
}else{

    echo "Es un decimal";
}
echo '</br>';
//Para eliminar espacios de string por delante y detras
$variableA="     Prueba de espacios     ";
var_dump(trim($variableA));
echo trim($variableA);

//Eliminar indeices de arrays

$year=2020;

unset($year);
var_dump($year);

//Emty validar si una variable esta vacia


$texto="  ";

if (empty(trim($texto))){
echo "La variable esta vacia";

}else {

    echo "Esta llena";
}


//Contar caracteres

echo '</br>';
$cadena="12345";
echo "Tiene: ".strlen ($cadena). " Caracteres";


echo '</br>';

//Encontrar un caracter en posicion

$frase="La vida es bella";

echo "Posicion : ".strpos($frase, "v");
echo '</br>';
//reemplazar palabras
$frase= str_replace("vida","Casa",$frase);
echo $frase;

echo '</br>';
//MAYUSCULA A miniscula
echo strtolower($frase);
echo '</br>';
echo strtoupper($frase);

?>