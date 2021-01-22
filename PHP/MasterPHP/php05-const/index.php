<?php
//El valor de las CONSTANTES no cambian

define('nombre','Angel');
define('web','angelguerrero.dev');

echo '<h2>'.'Nombre: '.nombre.'</h2>';
echo '<h2>'.'Web: '.web.'</h2>';

//Variables
$web= 'google.com';
echo '<h2>'.'Web: '.$web.'</h2>';

//CONSTANTES PREDEFINIDAS
echo PHP_OS;
echo PHP_VERSION;
echo __LINE__;
echo __FILE__;

function holamundo(){
echo __FUNCTION__;

}

holamundo();


?>