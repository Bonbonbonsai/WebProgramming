<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="CourseForm" action="" method="post">
        <p><label for='CourseID'>Course ID:</label>
            <input type="text" id="CourseID" name="CourseID" value="" size="7" />
        </p>
        <p><label for='CourseTitle'>Title:</label>
            <input type="text" id="CourseTitle" name="CourseTitle" value="" size="25" />
        </p>
        <p><label for='DeptName'>Department Name:</label>
            <input type="text" id="DeptName" name="DeptName" value="" />
        </p>
        <p><label for='Credits'>Credits:</label>
            <input type="text" id="Credits" name="Credits" value="" size="3" />
        </p>
        <input type="submit" name="Update" value="Update">
        <input type="submit" name="Delete" value="Delete">
    </form>
</body>

</html>