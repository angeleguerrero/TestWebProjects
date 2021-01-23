<?php
/*Nombre: <?php echo($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>
 Apellido: <?php echo($_POST["apellidos"]) ? print $_POST["apellidos"] : ""; ?>
*/
echo 'Nombre: '. $_POST["nombre"].'</br>';
echo 'Apellidos: '. $_POST["apellidos"]; 

var_dump($_POST);



?>
