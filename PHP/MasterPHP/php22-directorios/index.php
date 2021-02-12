<?php

//Crear carpeta
/*
if(!is_dir('carpetaprueba')){
mkdir('carpetaprueba', 0777) or die('No se puede crear la carpeta');
}else {
    echo "La carpeta ya existe";

}
*/
/*
//Borrar carpeta
if(is_dir('carpetaprueba')){
    rmdir('carpetaprueba') or die('No se puede Borrar la carpeta');
    }else {
        echo "La carpeta no existe";
    
    }
*/

echo '<h1>Contenido de la carpeta </h1>';
if ($gestor= opendir('./prueba')){
while (false !=($archivo=readdir($gestor))){

    if ($archivo !='..' && $archivo !='.'){
    echo $archivo.'</br>';
    }
}

}




?>