<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        * {
            font-family: "Rubik", sans-serif;
            color: white;
        }

        body {
            background-color: #535C91;

        }

        .container {
            display: flex;
            flex-direction: column;
            margin-top: 40px;
            padding-left: 50px;
            width: 80%;
            height: auto;
        }

        .container>form ,
        button {
            margin-top: 10px;
        }

        button {
            border: none;
            background-color: orange;
            width: 100px;
            height: 50px;
            border-radius: 20px;
        }

        h1 {
            margin-left: 10px
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Product</h1>
        <?php
        session_start();

        $url = "http://10.0.15.21/lab/lab12/restapis/products.php";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode($response);

        if (isset($_POST["next"])) {
            $_SESSION['count'] += 1;
        } else if (isset($_POST["back"])) {
            $_SESSION['count'] -= 1;
        } else {
            $_SESSION['count'] = 0;
        }

        echo "ID: " . $result[$_SESSION['count']]->ProductID . " <br>";
        echo "Code: " . $result[$_SESSION['count']]->ProductCode . " <br>";
        echo "Name: " . $result[$_SESSION['count']]->ProductName . " <br>";
        echo "Description: " . $result[$_SESSION['count']]->Description . " <br>";
        echo "Price: " . $result[$_SESSION['count']]->UnitPrice . " <br>";
        // echo $_SESSION['count'];
        ?>

        <form action="" method="POST">
            <button type="submit" name="back">
                Previous
            </button>
            <button type="submit" name="next">
                Next
            </button>
        </form>
    </div>
</body>

</html>