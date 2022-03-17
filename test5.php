<?php

    function fun5(&$x, $y){
        $x = 20;
        $y = 88;
        echo "x is {$x}<br>";
        echo "y is {$y}<br>";
    }

    function fun6($x = 10, $y = 20){
        echo $x . "<br>";
        echo $y . "<br>";
    }


    $a = 99;
    $b = 55;

    fun5($a, $b);
    echo "a is {$a}<br>";
    echo "b is {$b}<br>";

    fun6(99);
?>