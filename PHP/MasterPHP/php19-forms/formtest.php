<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Formulario HTML y PHP</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="post" enctype="multipart/form-data">
   
    <p>
    <label for="nombre">Nombre:</label> 
    <input type="text" name="nombre" minlength="4" placeholder="Nombre"></br>
    </p> 
    <p>
    <label for="apellido"></label>Apellido: 
   <!--
    *- pattern="[A-Z ]+ : permite validar por html5 caracteres espesificados n cantidad de veces con el signo +, en el caso de mas abajo
   caracteres de letras mayuscula.

   *- Required:  campo requerido
   *-Value:  es como una variable con valores temporales,estos valores de envian por defecto si no se modifican

   *- maxlength="4", maxlength="5" :  permite introdicir cantidad maxima y minima de caracteres indicados 

   *- cheked: marca campo de checkbox  por defecto

   *- multiple: Permite seleccionar varios archivos
   *- hiden oculta campo al usuario pero envia informacion al server
 
   -->
    <input type="text" apellido="apellido" maxlength="4" pattern="[A-Z ]+" placeholder="Apellido"></br> 
    </p>


***************************************************************************</br>
<p>
    <label for="boton"></label> 
    <input type="button" name="boton"  value="Click aqui"></br>
    </p> 


    <p>
    <label for="sexo">Sexo</label> 
    Hombre: <input type="checkbox" name="sexo"  value="M">
    Mujer: <input type="checkbox" name="sexo"  value="F"></br>
    </p> 


    <p>
    <label for="color">Color</label> 
    <input type="color" name="color"  >
    </p> 

    
    <p>
    <label for="date">Fecha</label> 
    <input type="date" name="date"  >
    </p> 

    <p>
    <label for="correo">Correo</label> 
    <input type="email"  name="correo"  required />
    </p> 

    <p>
    <label for="archivo">Archivo</label> 
    <input type="file"  name="archivo"  multiple="multiple" />
    </p> 

    <p>
    <label for="numero">Numero</label> 
    <input type="number"  name="numero"   />
    </p> 

    <p>
    <label for="password">Password</label> 
    <input type="password"  name="password"   />
    </p> 

    <p>
    <label for="continente">Continente: </label> </br>
    America latina: <input type="radio"  name="continente" value="americaLatina"   />
    Africa: <input type="radio"  name="continente" value="africa"   />
    </p> 

    <p>
    <label for="web">URL</label> 
    <input type="url"  name="web"   />
    </p> 

        <textarea name="detalles" id="iddetalle" cols="30" rows="10">
        
        </textarea></br>

        Peliculas: <select name="Peliculas" id="">
        
         <option value="null"></option>
         <option value="spm">Super Man</option>
         <option value="btm">Batman</option>
         <option value="bb">Bad Boys</option>
         </select></br>

   <input type="submit" value="Enviar">
   
    </form>
</body>
</html>