<?php
    
    // TABLA DE UN NUMERO
    function tabla($numero)
{
    echo "Tabla de multiplicar del numero $numero: " . '</br>';
    $contador = 0;
    while ($contador <= 10) {
        $operacion = $numero * $contador;
        echo "$numero x $contador = $operacion" . '</br>';
        $contador++;
    }
}

if (isset($_GET['numero'])) {

    tabla($_GET['numero']);
} else {

}


    
    
    
    
    function calculadora($numero1, $numero2, $negrita=true)
    {

        if (isset($_GET['numero1']) && isset($_GET ['numero2'])) {

            $numero1=$_GET['numero1'];
            $numero2=$_GET['numero2'];
        } else {
        echo 'TEST';
        }


        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
    
        $cadena_texto="";
        if($negrita){
    
            $cadena_texto.= "<h2>";
        }
        $cadena_texto .= "Suma $suma </br>";
        $cadena_texto.= "Resta $resta</br>";
        $cadena_texto .= "Multiplicacion $multiplicacion </br>";
        $cadena_texto .= "Division $division </br>";
        if($negrita){
    
            $cadena_texto.= "</h2>";
        }
        //var_dump($cadena_texto);
        return $cadena_texto;
        
    }


  


  
    //tabla(5);
 
     echo calculadora(5,4);
    
    

?>