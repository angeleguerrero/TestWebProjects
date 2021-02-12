<?php


//Para copiar fichero
//copy('fichero.txt', 'fichero update.txt') or die ("ERROR AL COPIAR");

//Renombrar Fichero
//rename('fichero.txt', 'firecho renombrado.txt');

//Eliminar Archivo
//unlink ('firecho renombrado.txt') or die ('ERROR AL ELIMINAR');


if(file_exists("fichetro.txt")){
    echo "El fichero existe";
}else{
    echo "El fichero no existe";
}



?>