<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
        }

        table {
            margin-top: 20px;
            border-collapse: separate;
        }
    </style>
</head>

<body>
    <form id="CourseForm" action="index.php" method="post">
        <p><label for='CourseID'>Course ID:</label>
            <input type="text" id="CourseID" name="CourseID" size="7" />
        </p>
        <p><label for='CourseTitle'>Title:</label>
            <input type="text" id="CourseTitle" name="CourseTitle" size="25" />
        </p>
        <p><label for='DeptName'>Department Name:</label>
            <input type="text" id="DeptName" name="DeptName" />
        </p>
        <p><label for='Credits'>Credits:</label>
            <input type="text" id="Credits" name="Credits" value="" size="3" />
        </p>
        <input type="submit" name="Update" value="Update">
        <input type="submit" name="Delete" value="Delete">
    </form>

    <table class='table table-striped'>
        <tr>
            <th>Course ID</th>
            <th>Course Title</th>
            <th>Dept. Name</th>
            <th>Credits</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root"; //ตามที่กำหนดให้
        $password = ""; //ตามที่กำหนดให้
        $dbname = "test";    //ตามที่กำหนดให้
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT course_id, title, dept_name, credits
                FROM course;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . "<a href='#'>" .$row["course_id"] . "</a>" . "</td><td>" . $row["title"] .
                    "</td><td>" . $row["dept_name"] . "</td><td>" . $row["credits"] . "</td></tr>";
            }
        }
        // close connection
        mysqli_close($conn);
        ?>
    </table>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['Update'])) {
        $c_courseID = $_POST['CourseID'];
        $c_title = $_POST['CourseTitle'];
        $c_dept = $_POST['DeptName'];
        $c_credit = $_POST['Credits'];

        $sql = "UPDATE course
                SET title = '$c_title',
                    dept_name = '$c_dept',
                    credits = $c_credit
                WHERE course_id = '$c_courseID';";
        mysqli_query($conn, $sql);

        echo '<script>window.location = window.location.href;</script>';
    } else if (isset($_POST['Delete'])) {
        $c_courseID = $_POST['CourseID'];

        $sql = "DELETE FROM course
                WHERE course_id = '$c_courseID';";
        mysqli_query($conn, $sql);

        echo '<script>window.location = window.location.href;</script>';
    }

    mysqli_close($conn);
    ?>
</body>

</html>