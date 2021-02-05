<?php
/*Periodo de tiempo que un usuario ve una pagina
Deben permanecer invariable mietras el usuario tenga la sesion activa.
Almacena y persiste datos del usuario miestras navega.

*/ 
//Iniciar sesion
session_start();

$variable_normal="Soy una Cadena de texto";

$_SESSION['$variable_persistente']="Soy una sesion activa";

echo $variable_normal.'</br>';
echo $_SESSION['$variable_persistente'];

?>