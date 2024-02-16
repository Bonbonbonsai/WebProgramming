<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lab 9</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
  crossorigin="anonymous">
</head>

<body>
  <table class="table-primary">
    <th>Course ID</th>
    <th>Course Title</th>
    <th>Dept. Name</th>
    <th>Year</th>
    <th>Semester</th>
    <th>Building</th>
  </table>
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

  $sql = "SELECT course_id, title, dept_name, year, semester, building
  FROM course
  JOIN section
  USING (course_id);";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["course_id"] . "</td><td>" . $row["title"] .
        "</td><td>" . $row["dept_name"] . "</td><td>" . $row["year"] .
        "</td><td>" .$row["semester"] .  "</td></tr>" .$row["building"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  ?>
</body>

</html>