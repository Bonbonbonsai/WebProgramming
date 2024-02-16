<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root"; //username ใน gmail ถ้าเป็น local ใช้ root
    $password = ""; //password ใน gmail ถ้าเป็น local ไม่ต้องใส่ password
    $dbname = "uni";    //database ใน gmail ถ้าเป็น local ก็ใส่ database ใน phpmyadmin/localhost
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $c_id = $_GET['CourseID'];
    echo "$c_id";

    $sql = "DELETE FROM course WHERE course.course_id = '$c_id'";
    mysqli_query($conn, $sql);

    // close connection
    mysqli_close($conn);
    ?>
</body>

</html>