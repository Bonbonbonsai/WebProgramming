<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number = $_POST['invalue'];
    $v = intval($number);
    for ($i = 1; $i <= 12; $i++) {
        echo $v . " x " . $i . " = ". $v*$i . "<br>";
    } 
    ?>
</body>
</html>