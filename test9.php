<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test9</h1> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        ชื่อ : <input type="text" name="u_name" id="">
        <br>
        ปีเกิด : <input type="text" name="u_year" id="">
        <br><br>
        <input type="submit" value="ตกลง">
        <input type="reset" value="ยกเลิก">

    </form>

    <br><br>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo $_POST["u_name"];
            echo "<br>";
            echo $_POST["u_year"];
        }


    ?>

</body>
</html>