<?php

$archivo=$_FILES['archivo'];
$nombre=$archivo['name'];
$tipo=$archivo['type'];
var_dump($archivo);

/*Validar que el archivo sea una imagen*/
if ($tipo=='image/jpg' || $tipo=='image/jpeg' OR $tipo=='image/png' OR $tipo=='image/gif' ){
    /*Subir a un directorio*/ 

if (!is_dir('images')){
mkdir('images', 0777);
}
move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
echo "<h1>Imagen Archivada<h1/>";
header("Refresh:5 URL=index.php");
}else {
    /*Redireccionar en 5 seg al index si no es una imagen*/
    header ("Refresh:5; URL=index.php");
echo "<h1>El archivo no es una imagen<h1/>";

}


?>