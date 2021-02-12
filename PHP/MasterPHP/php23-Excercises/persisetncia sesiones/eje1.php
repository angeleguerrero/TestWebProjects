<?php

/*Crear sesion que aumente valor o disminulla en funcion si el valor esta a uno o cero*/


session_start();

//Si la sesion numero no existe creamos una y damos valor de cero
if(!isset($_SESSION['numero'])){
$_SESSION['numero']=0;

}

if (isset($_GET['contador']) && $_GET['contador']==1){
    $_SESSION['numero']++;
}

if (isset($_GET['contador']) && $_GET['contador']==0){
    $_SESSION['numero']--;
}


?>

<h1>El valor de la sesion es:<?=$_SESSION['numero']?></h1>
<a href="eje1.php?contador=1">Aumentar Valor</a></br>
<a href="eje1.php?contador=0">Disminuir Valor</a>