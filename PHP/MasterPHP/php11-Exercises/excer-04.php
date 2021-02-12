<?php

/*Recorer por URL dos numeros con GET y realizar operaciones basicas de calculadoras, +,-,*,/ */



if (isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1=$_GET['numero1'];
$numeor2=$_GET['numero2'];

echo 'LA SUMA DE '.  $numero1 .' + '. $numeor2. ' ES '. ($numero1+$numeor2).'</br>';
echo 'LA RESTA DE '.  $numero1 .' - '. $numeor2. ' ES '. ($numero1-$numeor2).'</br>';
echo 'LA MULTIPLICACION DE '.  $numero1 .' * '. $numeor2. ' ES '. ($numero1*$numeor2).'</br>';
echo 'LA DIVISION DE '.  $numero1 .' 7 '. $numeor2. ' ES '. ($numero1/$numeor2).'</br>';

}
else{

echo 'Introduce correctamente valores por URL';

}

?>