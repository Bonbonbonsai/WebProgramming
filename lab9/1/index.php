<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <style>
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "S047V";
    $password = "EJ68268";
    $dbname = "S047V";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['rec-num']) && $_POST['rec-num'] !== '' && $_POST['rec-num'] > 0) {
        $c_id = $_POST['rec-num'];
        $sql = "SELECT * FROM course";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
        }

        $show_id = $data[$c_id-1][0];
        $show_title = $data[$c_id-1][1];
        $show_dept =  $data[$c_id-1][2];
        $show_credit = $data[$c_id-1][3];

        echo "<p>ID : $show_id</p>";
        echo "<p>Tilt : $show_title</p>";
        echo "<p>Dept. Name : $show_dept</p>";
        echo "<p>Credits : $show_credit</p>";

    } else {
        echo "<p>ID :</p>";
        echo "<p>Tilt :</p>";
        echo "<p>Dept. Name :</p>";
        echo "<p>Credits :</p>";
    }

    // close connection
    mysqli_close($conn);
    ?>

    <form action="index.php" method="post">
        <span>
            <label for="rec-num">Enter a record number : </label>
            <input type="number" name="rec-num" id="rec-num" value="">
        </span>
        <br>
        <input type="submit" value="Display">
    </form>
</body>

</html>