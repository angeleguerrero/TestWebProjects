<?php
/*FUNCIONES: es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarse solamente invocando
la funcion tantas veces como queramos

function nombreDefuncnion ($parametros si es necesario){
Instrucciones
}
 */
//Definir Funcion
function muestraNombre()
{
    echo "Angel" . '</br>';
    echo "Pedro" . '</br>';
    echo "Maria" . '</br>';
    echo "Juana" . '</br>';
    echo "Elizabeth" . '</br>';
}

//Invicar funcion
muestraNombre();
echo '<hr/>';
muestraNombre();

echo '<hr/>';
//Ejemplo 2
function tabla($numero)
{
    echo "Tabla de multiplicar del numero $numero: " . '</br>';
    $contador = 0;
    while ($contador <= 10) {
        $operacion = $numero * $contador;
        echo "$numero x $contador = $operacion" . '</br>';
        $contador++;
    }
}

if (isset($_GET['numero'])) {

    tabla($_GET['numero']);
} else {

}
/*
$contadorb = 0;
while ($contadorb <= 10) {
    tabla($contadorb);
    $contadorb++;
}
*/
//tabla(8);

//FUNCTION CALCULADORA, parametros obligatorios

function calculadora($numero1, $numero2, $negrita=true)
{
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    if($negrita){

        echo '<h2>';
    }
    echo "Suma $suma" . '</br>';
    echo "Resta $resta" . '</br>';
    echo "Multiplicacion $multiplicacion" . '</br>';
    echo "Division $division" . '</br>';
    if($negrita){

        echo '</h2>';
    }
}

calculadora(5, 5, false);

calculadora(5, 20);
echo '<hr/>';

//RETURN
function devuelveNombre($nombre){
return "El Nombre es: $nombre" ;

}

echo devuelveNombre('Angel');