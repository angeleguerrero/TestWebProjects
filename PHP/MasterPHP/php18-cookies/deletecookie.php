<?php
//Caduca la cookie, se resta del tiempo actual
if (isset($_COOKIE['micookie'])){

    unset ($_COOKIE['micookie']);
    setcookie('micookie', '',time()-100);

}

header('Location:ver_cookies.php');

?>