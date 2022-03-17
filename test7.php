<?php
    $stu1 = ["x"=>100, "y"=>"มด", 999=>"สบายดี"];

    $stu2 = array("x"=>100, "y"=>"มด", 999=>"สบายดี");

    print_r($stu1);
    echo "<br>";
    print_r($stu2);
    echo "<br>";
    echo $stu1[999];
    echo "<br>";
    echo $stu2["y"];
    echo "<br>";


?>