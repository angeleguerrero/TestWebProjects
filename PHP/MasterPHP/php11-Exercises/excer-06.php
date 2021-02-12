<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
        echo "<table border='1'> " ;//Inicio tabla
        echo "<tr>"; // Inicio fila 1 celda
            $cabecera=0;
            while($cabecera<=10){
                echo "<td>Tabla del: $cabecera</td>  ";
                $cabecera++;

            }

        echo "</tr>"; // fin fila 1 celda

        echo "<tr>"; //Inicio fila 2 celda
            $cont1=0;
            while ($cont1<=10){
             
            echo "<td>";
           for ($cont2=1;$cont2<=10;$cont2++){
            echo "$cont1 * $cont2 = " .($cont1*$cont2). '</br>';

           }
            echo "</td>" ;
            $cont1++;

            }
        echo "</tr>"; //Fin fila 2 celda

        echo "</table>";// fin tabla
    
    ?>
</body>
</html>