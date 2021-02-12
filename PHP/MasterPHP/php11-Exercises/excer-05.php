<?php


if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numeor2=$_GET['numero2'];
    $temp=0;
    if ($numero1<$numeor2){
        for($contador=$numero1;$contador<=$numeor2;$contador++){
            echo $contador.'</br>';
        }


    }else{ 
       
       

        echo 'El numero 1 debe ser Mayor para proeder';

    }

    
    }
    else{
    
    echo 'Introduce correctamente valores por URL';
    
    }

?>