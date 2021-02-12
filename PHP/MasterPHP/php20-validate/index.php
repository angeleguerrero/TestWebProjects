<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Validar Formulario</h1>

    <?php

    if (isset($_GET['error'])){
        $error = $_GET['error'];
            if ($error=='ERROR_55'){
                echo '<strong style="color:red">Introduce todos los datos del formulario</strong>';
            }
    
    }
    
    ?>
    
        <form action="procesarForm.php" method="POST">
            <label for="nombre">Nombre: </label></br>
            <input type="text" name="nombre" required pattern="[A-Za-z]+"></br>

            <label for="apellidos" required pattern="[A-Za-z]+">Apellidos: </label></br>
            <input type="text" name="apellidos"></br>

            <label for="edad" required pattern="[0-9]+">Edad: </label></br>
            <input type="number" name="edad"></br>

            <label for="email">Email: </label></br>
            <input type="email" name="email" required></br>

            <label for="password">Password: </label></br>
            <input type="password" name="password" required></br>

            <input type="submit" name="Enviar">


        </form>
</body>

</html>