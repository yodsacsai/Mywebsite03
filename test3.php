<?php
    //#01
    function fun1(){
        echo "Hi...<br>";
    }

    //#02
    function fun2($x, $y){
        echo "{$x} + {$y} = " . ($x + $y);
    }

    
    function showU(){
        echo "<br>Southeast Asia University<br>";
        echo "6252410025<br>";
        echo "Yodchai Keawsa-ard<br>";
    }

    function moneyShare($money, $person){
        $total = $money/$person;
        echo "จำนวนคน {$person} คน<br>";
        echo "จำนวนเงิน {$money} บาท<br>";
        echo "หารกันคนละ {$total} บาท<br>";  
    }

    fun1();
    fun2(10, 20);
    showU();
    moneyShare(15000, 10);

?>