<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Video Juegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
</head>
<body>

<header id="idcabecera">
<!--Cabecera-->
<div id="idlogo">
    <a href="index.php">
    Blog de Video Juegos
    </a>
</div>


<!--Menu-->
<nav id="idmenu">
<ul>
    <li>
        <a href="index.php">Inicio</a>
    </li>
    <li>
        <a href="index.php">Categoria 1</a>
    </li>
    <li>
        <a href="index.php">Categoria 2</a>
    </li>
    <li>
        <a href="index.php">Categoria 3</a>
    </li>
    <li>
        <a href="index.php">Categoria 4</a>
    </li>
    <li>
        <a href="index.php">Sobre mi</a>
    </li>

    <li>
        <a href="index.php">Contacto</a>
    </li>
</ul>
</nav>

<div class ="clearfix"></div>
</header>

<div id ="idcontenedor">
<!--Sidebar-Lateral-->
<aside id="sidebar">

<div id="login" class="bloque-incio">
<h3>Identificate</h3>
<form action="login.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">
</form>
</div>


<div id="register" class="idbloque-registro">
<h3>Registrate</h3>
<form action="register.php" method="POST">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">
<input type="submit" value="Registarse">

</form>
</div>


</aside>
<!--Contenido Principal-->
<div id="idprincipal">
<h1>Ultimas entradas</h1>
<article class>
    <h2>Titulo de mi Entrada</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Praesentium accusamus inventore voluptatum laboriosam aspernatur consequatur assumenda quisquam illo doloribus nemo quas quibusdam ipsa nesciunt explicabo amet ratione, facilis non error!</p>
</article>

<article class>
    <h2>Titulo de mi Entrada</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Praesentium accusamus inventore voluptatum laboriosam aspernatur consequatur assumenda quisquam illo doloribus nemo quas quibusdam ipsa nesciunt explicabo amet ratione, facilis non error!</p>
</article>

<article class>
    <h2>Titulo de mi Entrada</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Praesentium accusamus inventore voluptatum laboriosam aspernatur consequatur assumenda quisquam illo doloribus nemo quas quibusdam ipsa nesciunt explicabo amet ratione, facilis non error!</p>
</article>

<article class>
    <h2>Titulo de mi Entrada</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
    Praesentium accusamus inventore voluptatum laboriosam aspernatur consequatur assumenda quisquam illo doloribus nemo quas quibusdam ipsa nesciunt explicabo amet ratione, facilis non error!</p>
</article>

</div>


<!--Contenido Principal End-->





<!--Pie de Pagina-->
<footer>

<p>Desarrollado por: angelguerrer.dev &copy2021 </p>
</footer>

<!--Pie de Pagina end-->


</body>
</html>
