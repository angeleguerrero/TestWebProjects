<?php
    //Operadores Aritmeticos
    $numero1=55;
    $numero2=33;

    echo 'Suma:'.($numero1+$numero2).'<br/>';
    echo 'Resta:'.($numero1-$numero2).'<br/>';
    echo 'Multiplicacion:'.($numero1*$numero2).'<br/>';
    echo 'Division:'.($numero1/$numero2).'<br/>';
    echo 'Rssto:'.($numero1%$numero2).'<br/>';

    //Operadores Incremento y Decremento

    $year=2019;
    //Incremento $year=$year+1;
    //$year++;
    //Decremento $year=$year-1;
    //$year--;
    //Preincremento 1+$year
    ++$year;
    echo '<h1>'.$year.'</h1>';

    //Operadores de Asignacion 

    $edad=55;

    echo 'Edad Original: '.$edad.'<br/>';
    //$edad=$edad+5, esto aplica para todos los operadores basicos;
    echo 'Edad Incrementada: '.($edad+=5).'<br/>';
    echo 'Edad decremento: '.($edad-=5).'<br/>';
    var_dump($edad);

?>