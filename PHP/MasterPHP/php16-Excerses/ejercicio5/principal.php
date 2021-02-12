<?php
/*CREAR UN ARRAY CON EL CONTENIDO DE LA SIGUIENTE TABLA
COLUMNA =(INDICE)

ACCION  AVENTURA    DEPORTES
GTA     ASSASING    FIFA 19
COD     CHASH       PES 19
PUGB    POP         MOTO GP 19

CADA COLUMBA DEBE IR EN UN FICHERO SEPADADO CON INCLUDES

En las vistas HTML en el caso del foreach de mas abajo lo recomendable es usar los dos puntos en vez de llaves para
simplificar y hacer mas entendible
<?php  require_once 'phpejercicio-06/encabezado.php'; ?>
 */

$tabla = array(

    "ACCION" => array("GTA", "COD", "PUGB"),
    "AVENTURA" => array("ASSASING C", "CHASH B", "POP"),
    "DEPORTES" => array("FIFA 19", "MLB 19", "MOTO GP 19"),

);

//var_dump(array_keys($tabla));
$categoria = array_keys($tabla);

?>


<table border="1">

<?php require_once 'encabezado.php';?>
<?php require_once 'primerafila.php';?>
<?php require_once 'segundafila.php';?>
<?php require_once 'tercerafila.php';?>

</table>