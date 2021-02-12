<?php
/*
Para mostar valor de la cookie debo usar variable super global $_COOKIE que es un array asociativo
*/

if (isset($_COOKIE['micookie'])){

    echo $_COOKIE['micookie'];
}else {

    echo "No existe la Cookie";
}

echo '</br>';
if (isset($_COOKIE['oneyear'])){

    echo $_COOKIE['oneyear'];
}else {

    echo "No existe la Cookie";
}


?>

<a href="index.php">Crear Cookies</a>
<a href="deletecookie.php">Borrar Cookies</a>