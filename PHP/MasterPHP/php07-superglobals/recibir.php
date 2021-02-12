<?php

//echo   '<h2>'. $POST['nombre'].$POST['apellidos'].'<h2>';
//echo   '<h2>'. $_POST['nombre'].'<h2>';
//echo   '<h2>'. $_POST['apellidos'].'<h2>';


echo filter_input(INPUT_POST, 'nombre');

echo filter_input(INPUT_POST, 'apellidos');



var_dump(filter_input_array(INPUT_POST));

//var_dump($_POST);


?>