<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        * {
            font-family: "Rubik", sans-serif;
            background-color: #535C91;
            color: white;
        }

        h1 {
            font-weight: 900;
        }

        body,
        table,
        h1 {
            margin: 30px;
        }

        th, td {
            padding: 5px;
        }

        table , tr {
            border-bottom: 2px solid white;
        }

        .btn {
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <table class="table-striped w-75">
            <h1>Customer Infomation</h1>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <?php
            class MyDB extends SQLite3
            {
                // 1. connect to Database
                function __construct()
                {
                    $this->open('Lab 10 PHP SQLite.db');
                }
            }

            // 2. Open database
            $db = new MyDB();
            // Check database connection
            // if (!$db) {
            //    echo $db->lastErrorMsg();
            //    return false;
            // } else {
            //    echo "opened successfully.";
            //}

            $sql = "SELECT CustomerId, FirstName, LastName, Address, Phone, Email
                FROM customers;";
            $result = $db->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "</tr>";
            }

            $db->close();
            ?>
        </table>
        <input type="submit" class="btn btn-warning" name="delete" value="Delete last row">
    </form>

    <?php
    $db = new MyDB();

    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM customers
                WHERE CustomerId = (SELECT MAX(CustomerId)
                                    FROM customers);";
        $result = $db->query($sql);

        echo "<script> window.location = window.location.href; </script>";
    }

    $db->close();
    ?>
</body>

</html>