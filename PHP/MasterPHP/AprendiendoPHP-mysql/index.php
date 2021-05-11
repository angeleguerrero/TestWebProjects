<?php

/*Conectar a BBDD*/
$conexion = mysqli_connect ("localhost","administrador", "Acceso2020*","phpmysqltest");

/*Validar si esta correcta la conexion*/

if(mysqli_connect_errno()){

    echo "Conexion a la BBDD MYSQL ha FALLADO: ".mysql_connect_error();
}else{

    echo "Conexion a la BBDD realizada con exito";
}

//Codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta Select en PHP
$query =mysqli_query($conexion,"select * from notas");
// Recorre en un array el contenido de las filas de la tabla
while ($nota = mysqli_fetch_assoc($query)){
    echo '</br><h2>'.$nota['titulo'].'</br></h2>';
    echo $nota['descripcion'].'</br>';
}


//Insertar desde PHP en mysql
$sql ="insert into notas values (null,'Nota test desde PHP','Esta des una nota desde PHP','blue')";
$insert =mysqli_query($conexion, $sql);

echo '</hr>';
if ($insert){
    echo "Datos insertados correctamente";
}else {
    echo "Error".mysqli_error($conexion);
}






?>