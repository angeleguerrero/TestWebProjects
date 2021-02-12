<?php
/*
Condicionales
 ***IF, IF ELSE***
Operacores de comparacion
== Igual
===identico boolean
!=diferente
!== no identico
<>Diferente
< menor que
> mayor que
<= menor o igual que
 */

/*Operadores logicos
&& AND
││ OR
! NOT
AND, OR
 */

$color = "verde";

if ($color == "Rojo") {

    echo "El color es ROJO";
} else {
    echo "El color no es ROJO";
}

echo "</br>";
$year = 2020;
if ($year != 2019) {
    echo "No estamos  en 2019";

} else {
    echo "Estamos en 2019";
}
echo "</br>";

$edad = 25;
$mayoredad = 18;
$nombre = "Angel Mateo";
$ciudad = "Canada";
$continente = "Americano";

if ($edad >= $mayoredad) {
    echo " $nombre Es mayor de edad";
    if ($continente == "Americano") {
        echo "Es de la Ciudad de $ciudad";
    } else {echo "No es de America";}

} else {
    echo " $nombre No es mayor de edad";

}
;

echo "</br>";
$dia = 3;
if ($dia == 1) {
    echo "Lunes";

} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
}

echo "</br>";

$edad1 = 18;
$edad2 = 64;
$edad = 17;
if ($edad >= $edad1 && $edad <= $edad2) {
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO PUEDE TRABAJAR";
}

echo "</br>";

$pais = "USA";

if ($pais == "Rep Dom" or $pais == "España") {
    echo "AQUI SE HABLA ESPAÑOL";
} else {
    echo "NO SE HABLA ESPAÑOL";
}


echo "</br>";
$dia = 12;

switch ($dia) {
    case 0:
        echo "LUNES";
        break;
    case 1:
        echo "MARTES";
        break;
    case 2:
        echo "MIERCOLES";
        break;
    case 3:
        echo "JUEVES";
        break;
    case 4:
        echo "VIERNES";
        break;
        default:
        echo "ES FIN DE SEMANA"; 

    }
        
    echo "</br>";
//GOTO
    goto salto;
    echo "MARCA 1";
    echo "MARCA 2";
    echo "MARCA 3";
    echo "MARCA 4";

    salto:
    echo "SALTO A 5, ESTE HACE UN SALTO ENTRE EL GOTO A LA VARIABLE QUE SE INDIQUE, EN ESTE CASO SALTO ";
