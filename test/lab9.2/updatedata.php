<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $c_id = $_GET['CourseID'];
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];
    
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
    
    $sql = "UPDATE course
            SET credits = $c_credits
            WHERE course_id = $c_id;";
    mysqli_query($conn, $sql);
    echo "add";

    // close connection
    mysqli_close($conn);
    ?>
</body>

</html>