<?php

    // Opracht 1 //

$x= 24;
$y= 3;
$result= $x % $y;

if ($result == 0 ) {
    echo "Bingo";
} else {
    echo "Jammer";
}

echo "<hr>";

    // Opdracht 2 //

$one = 50;
$two = 25;
$three = 25;
$result = $one + $two + $three;

if($result >= 100 ) {
    echo "enorm";
} else {
    if ( $result > 10 ) {
        echo "veel";
    } else {
        echo "beetje";
    }    
}

echo "<hr>";

    // Opdracht 3 //

    $one = 3;
    $two = $one + 1;
    $three = 4 ;
    $result = $one * $two;
    $total= $result % $three;
    

    if( $total == 0 ) {
        echo "Bingo"; 
    } else {
        echo "Jammer";
    }

    echo "<hr>";

    // Opdracht 4 //

    $var1 = 10;
    $var2 = "10";

    if ($var1 ==$var2) {
        echo "Gelijk1";
    }

    if ($var1 ===$var2) {
        echo "Gelijk2";
    }

        echo "<hr>";

    // Opdracht 5 //s

    $code = "500";

    
    if ($code <= 100 ) {
        echo "Mannetjes";
    }
    else {
        if ($code >= 10000) {
            echo "Onbekend";
        }
        else {
            echo "Vrowtjes";
        }
    }



    



    
    

    













