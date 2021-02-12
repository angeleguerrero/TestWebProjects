
<?php
/*
Una funcion que valide el email con filter_var
Recoger Variable por GET validarla y mostrar resultado
*/

//Funcion para validar email
function validarEmail($email){
$status = 'Email no es Valido';
if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
$status='Email es Valido';

}
return $status;

}


if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']);
}else{
echo 'Pase un valor por la URL';

}



?>
