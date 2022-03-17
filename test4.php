<?php
    //#03
    function fun3(){
        echo "Wow<br>";
        $x = 50 + "70";
        return $x;
    }

    //#04
    function fun4($a, $b, $c){
        echo $a + $b . "<br>";
        return $a ** $c;
    }

    function showWow(){
        $w = "Wow Woo Wee";
        return $w;
    }

    function calCube($w, $l, $h){
        $total = $w * $l * $h;
        echo "กว้าง : " . $w;
        echo "<br>ยาว : " . $l;
        echo "<br>สูง : " . $h;
        return $total;
    }

    echo fun3() . "<br>";
    $y = fun3() * 100;

    echo $y + fun4(10, 20, 2) . "<br>";

    echo showWow() . "<br>";
    echo "<br>ปริมาตรทรงลูกบาศก์ : " . calCube(10, 20, 30);

?>