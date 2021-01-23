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


?>