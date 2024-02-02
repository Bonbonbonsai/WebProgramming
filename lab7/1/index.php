<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <style>

    </style>
</head>
<body>

    <form action="" method="post">
        <label for="multiple">กรอกสูตรคูณ</label>
        <input type="text" name="multiple" id="multiple" value="">
        <input type="submit" id="submit" name="submit" value="แสดงตาราง">
    </form>

    <?php
    if (isset($_POST["multiple"])) {
        $number = $_POST["multiple"];
        $v = intval($number);
        for ($i = 1; $i <= 12; $i++) {
            echo $v . " x " . $i . " = ". $v*$i . "<br>";
        } 
    } else {
        echo "กรอกข้อมูลด้วย...";
    }
    ?>
</body>
</html>

