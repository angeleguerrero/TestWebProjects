<?php
    /*Numeros Pares del 1 al 100*/

    $contador=0;
    while ($contador<=100){
            if ($contador%2==0){
                echo "El numero: $contador es Par".'</br>';

            }else{
                echo "El numero: $contador es Impar". '</br>';
            }
        $contador++;
    }


?>