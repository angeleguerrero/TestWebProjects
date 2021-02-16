<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivos PHP</title>
</head>
<body>
    <h1>Subir Archivo con PHP</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="archivo"/>
<input type="submit" name="Enviar"/>

<h1>Listado de Imagenes</h1>

<?php
/*Abrir directorio*/
$gestor=opendir('./images');
/*Si directorio se abre correctamente*/ 
if($gestor):
    var_dump($gestor);
    /*Recorremos miestras archivo o imagen sea diferente de false*/ 
    while(($image=readdir($gestor)) !==false):
       

        if ($image !='.' && $image !='..'):
         
            echo "<img src='images/$image' width='200'/></br>";
        endif;
    endwhile;
endif;

?>


</form>

</body>
</html>