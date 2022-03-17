<?php

    $sau = [10, "สวัสดี", 30, true];

    echo $sau[1] . "<br>";
    echo $sau[2] . "<br>";
    $sau[1] = "ลาก่อน";
    echo $sau[1] . "<br>";

    $comsci = array(99, 88, "Hi", "wow");
    echo $comsci[1] . "<br>";
    echo $comsci[3] . "<br>";
    $comsci[1] = 555;
    echo $comsci[1] . "<br>";

    echo "ตัวแปร sau ตอนนี้มี " . count($sau) . " ตัว<br>";
    array_push($sau, "DTI");
    echo "ตัวแปร sau ตอนนี้มี " . count($sau) . " ตัว<br>";
    array_pop($sau);
    array_pop($sau);
    array_pop($sau);
    echo "ตัวแปร sau ตอนนี้มี " . count($sau) . " ตัว<br>";

    //มักจะใช้กับอาร์เรย์ เป็นการเข้าถึงทุกข้อมูลในอาร์เรย์
    echo "+++++++++++++++++++++++++++++++++++<br>";
    foreach($comsci as $value){
        echo $value . "<br>";
    }

    //หากต้องการ log ดูข้อมูลในอาร์เรย์เพื่อ debug
    print_r($comsci);



?>