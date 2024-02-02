<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
        * {
            font-family: "Sriracha", cursive;
        }
        td {
            font-size: 20px;
            padding: 10px;
            width: 50px;
            border-bottom: 2px solid black;
            text-align: center;
        }
        h2 {
            margin-left: 80px;
        }
        input {
            border-radius: 10px;
        }
        #submit {
            transform: scale(1);
            transition: transform 0.05s ease-in-out;
        }
        #submit:hover {
            transform: scale(1.1);
        }

        #submit:active {
            transform: scale(0.9);
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <label for="multiple">กรอกสูตรคูณ : </label>
        <input type="text" name="multiple" id="multiple" value="">
        <input type="submit" id="submit" name="submit" value="แสดงตาราง">
    </form>

    <?php
    if (isset($_POST["multiple"])) {
        $number = $_POST["multiple"];
        $v = intval($number);
        echo "<h2>ตารางสูตรคูณแม่ $v</h2>";
        echo "<table>";
        for ($i = 1; $i <= 12; $i++) {
            $ans = $v * $i;
            echo "<tr>";
            echo "<td>$v</td> <td>x</td> <td>$i</td> <td>=</td> <td>$ans</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "";
    }
    ?>
</body>
</html>

