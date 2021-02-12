<?php
/*Estructuta de control que itera instrucciones de controles tantas veces como sea necesario en base a una condicion */

/*WHILE TRUE OR FALSE
    while(condicion){
        instruccion
    }
*/ 
$numero=0;
while ($numero<=100){
    echo $numero ;
    if ($numero!=100){
        echo ", ";
    }
    $numero++;
}

echo '<hr/>';
//isset, si existe un valor en el GET
if (isset($_GET['numero'])){
    //Casting
    $numero=(int)$_GET['numero'];


}else {
$numero=1;
}

echo "<h1>Tabla de Multiplicar del numero $numero</h1>";
$contador=0;
while ($contador<=10){
echo "$numero x $contador = " .($numero* $contador). "<br/>";
$contador++;

}

var_dump($numero);


echo "<hr/>";

/*DO WHILE
do {}while();
Hacer Mietras
*/ 

$edad=15;
$contador=1;

do {
    echo "Tienes Acceso al local privado $contador".'<br/>';
    $contador++;
}while($edad>=18 AND $contador<=10);

?>