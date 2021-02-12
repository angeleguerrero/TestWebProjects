<?php

//FUNCTION 1
function getNombre($nombre){
    $texto= "El nombre es:  $nombre";
    return $texto;
}

//FUNCTION 2
function getApellido($apellido){
    $texto= "El Apellido es:  $apellido";
    return $texto;
}

//FUNCTION 3
function devuelveNombre($nombre, $apellido){
  
    $texto= getNombre($nombre)
    ."<br/>".
    getApellido($apellido);
    return $texto;
}



echo devuelveNombre('Angel', 'Guerrero');




?>