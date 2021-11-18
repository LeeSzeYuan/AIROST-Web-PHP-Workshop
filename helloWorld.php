<?php
    // echo "Hello World";

    $var = "Variable1";
    $var2 = 2;
    $number_pokemon = 3;

    // echo "Total: $number_pokemon";


    //math operator: +, -, /, *, **, %

    // if ($number_pokemon == 3 && $var2 == 3) {
    //     echo "do something";
    // } else {
    //     echo "do nothing";
    // }

    //boolean operator: ==, <, <=, >=, >, &&, ||

    
    

    for($i = 1; $i<5; $i++) {
        echo $i;
        echo "\n";
    }

    // $arr = ["a", "b", "c", "d", "e"];
    foreach($arr as $a){ //for each element $a inside array $arr, do 
        echo "anything";
        echo " ";
    }

    function sum($x, $y) {
        echo $x ** $y;
    }

    sum(2, 4);
?>