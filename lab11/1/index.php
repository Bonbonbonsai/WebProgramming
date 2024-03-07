<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>1</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
        * {
            font-family: "Rubik", sans-serif;
        }
        body {
            background-color: silver;
            display: grid;
            margin: 20px;
            place-content: center;
        }

        table {
            margin-top: 20px;
            border-collapse: separate;
        }

        h1 {
            text-align: center;
            margin: 30px;
        }

        form {
            margin-left: 30px;
        }

        .form-control {
            width: 50%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Employee Infomation</h1>
    <form id="CourseForm" action="" method="post">
        <p>
            <label for='EmployeeID'>Employee ID:</label> <br>
            <input type="text" class="form-control" id="EmployeeID" name="EmployeeID" value="" size="7" />
        </p>
        <p>
            <label for='Fname'>Firstname:</label> <br>
            <input type="text" class="form-control" id="Fname" name="Fname" value="" size="25" />
        </p>
        <p>
            <label for='Lname'>Lastname:</label> <br>
            <input type="text" class="form-control" id="Lname" name="Lname" value="" />
        </p>
        <p>
            <label for='Address'>Address:</label> <br>
            <input type="text" class="form-control" id="Address" name="Address" value="" size="3" />
        </p>
        <p>
            <label for='Email'>Email:</label> <br>
            <input type="text" class="form-control" id="Email" name="Email" value="" size="3" />
        </p>
        <p>
            <label for='Phone'>Phone:</label> <br>
            <input type="text" class="form-control" id="Phone" name="Phone" value="" size="3" />
        </p>
        <input type="submit" class="btn btn-primary" name="save" value="Save Data">
        <input type="button" class="btn btn-success" name="show" value="Show Data" onclick="showData()">
        <input type="submit" class="btn btn-danger" name="clear" value="Clear Data">
    </form>

    <?php
    session_start();

    if (isset($_POST['save'])) {
        $c_employeeID = $_POST['EmployeeID'];
        $c_fname = $_POST['Fname'];
        $c_lname = $_POST['Lname'];
        $c_address = $_POST['Address'];
        $c_phone = $_POST['Phone'];
        $c_email = $_POST['Email'];

        $_SESSION["EmployeeID"] = $c_employeeID;
        $_SESSION["FirstName"] = $c_fname;
        $_SESSION["LastName"] = $c_lname;
        $_SESSION["Address"] = $c_address;
        $_SESSION["Phone"] = $c_phone;
        $_SESSION["Email"] = $c_email;

        echo "The data has been successfully saved.";
    }

    if (isset($_POST['clear'])) {
        session_unset();
        session_destroy();
        echo "The data has been cleared.";
    }
    ?>

    <table class='table table-striped'>
        <tr>
            <th>Employee ID</th>
            <th>FirstName</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>
        <?php
        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open("customers.db");
            }
        }

        $db = new MyDB();

        $sql = "SELECT CustomerId, FirstName, LastName, Address, Phone, Email
                FROM customers";
        $result = $db->query($sql);

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr><td><a href='#' onclick='putInTextbox(\"" . $row["CustomerId"] . "\", \"" . $row["FirstName"] . "\", \"" . $row["LastName"] . "\", \"" . $row["Address"] . "\", \"" . $row["Email"] . "\", \"" . $row["Phone"] . "\")'>"
                . $row["CustomerId"] . "</a></td><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Phone"] . "</td></tr>";
        }
        ?>
    </table>

    <script>
        function putInTextbox(customerId, firstName, lastName, address, email, phone) {
            document.getElementById("EmployeeID").value = customerId;
            document.getElementById("Fname").value = firstName;
            document.getElementById("Lname").value = lastName;
            document.getElementById("Address").value = address;
            document.getElementById("Email").value = email;
            document.getElementById("Phone").value = phone;
        }

        function showData() {
            <?php
            // if $_SESSION["EmployeeID" have data from saved
            if (isset($_SESSION["EmployeeID"])) {
                echo "putInTextbox('" . $_SESSION["EmployeeID"] . "', '" . $_SESSION["FirstName"] . "', '" . $_SESSION["LastName"] . "', '" . $_SESSION["Address"] . "', '" . $_SESSION["Email"] . "', '" . $_SESSION["Phone"] . "');";
            }
            ?>
        }
    </script>
</body>

</html>