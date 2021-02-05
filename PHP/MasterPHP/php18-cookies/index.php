<?php

/*Fichero que se almacena en el ordenador de usuario que visita la web con el fin de recordar o rastrear datos
o verificar alguna informacion en la web.
*/

//Crear cookies, ruta y dominio no se usan con frecuencia

//setcookie("nombre", "Valor que solo puede ser texto", caducidad, rura, dominio);

//cookie basica
setcookie("micookie", "ESTE ES EL VALOR de mi cookie");

//cookie con expiracion
setcookie("oneyear","Cookie de 365 dias " ,time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las Cookies</a>