<?php
//FOR
/*
for (var contador, condicion(Si es verdadera vuelve y ejecuta bucle), incremento contador (incremnto o decremento)){
    INSTRUCCION
}
*/
//SUMA DE NUEMERO Y POSICION    
$resultado=0;
   for ($contador=0;$contador<=20;$contador++){
    $resultado=$resultado+$contador;
    echo $resultado .'<br/>';

   }


//TABLA CON FOR

echo '<br/>';

echo '<hr/>';
//isset, si existe un valor en el GET
if (isset($_GET['numero'])){
    //Casting
    $numero=(int)$_GET['numero'];


}else {
$numero=1;
}

echo "<h1>FOR - Tabla de Multiplicar del numero $numero</h1>";

for ($contador=0;$contador<=10; $contador++){
    if ($numero==25){
        echo "Operaciones no se pueden prorcesar: $numero";
        break;

    }
echo "$numero x $contador = " .($numero* $contador). "<br/>";


}

var_dump($numero);


echo "<hr/>";


?>