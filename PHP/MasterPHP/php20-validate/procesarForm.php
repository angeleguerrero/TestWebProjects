<?php
$error= 'ERROR_55';
if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) 
&& !empty($_POST['password'])){
$error='SALVADO';

$nombre = $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$edad= $_POST['edad'];
$email= $_POST['email'];
$password= $_POST['password'];


//Validar nombre, si es un strin y no
if (!is_string($nombre)&& !preg_match("/[0-9]+/" && !preg_match("/[a-zA-Z ]/"), $nombre)){
$error='nombre';

}

}else{
    $error= 'ERROR_55';
    
}

if ($error!='SALVADO'){
    header("Location:index.php?error=$error");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validar HTML Form</title>
</head>
<body>
    <?php if($error=='SALVADO'): ?>
<h2>Datos VAlidados correctamente</h2>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <p><?=$password?></p>


     <?php endif; ?>   
</body>
</html>