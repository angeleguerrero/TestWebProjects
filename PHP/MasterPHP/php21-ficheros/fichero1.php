<?php
/*LEER ARCHIVOS TXT*/ 
//Abrir archivo (nombre de archivo y - r para modo lectura a+ permiso lectura y escritura)
$archivo = fopen("fichero.txt", "a+");


//Leer contenido
while (!feof($archivo)){
$contenido=fgets($archivo);
echo $contenido.'</br>';
}

/* ESCRIBIR TEXTO*/

fwrite ($archivo, "</br>Este es un texto desde PHP");

//cerrar archivo
fclose($archivo);


?>


