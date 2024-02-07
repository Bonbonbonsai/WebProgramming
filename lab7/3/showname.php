<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residential Details</title>
    <style>
        * {
            margin: 20px;
        }

        p {
            margin: 5px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h1>Residential Details</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        $residential_status = $_POST['residential_status'];

        echo "<p>Name: $name</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Profession: $profession</p>";
        echo "<p>Residential Status: $residential_status</p>";
    }
    ?>
</body>

</html>