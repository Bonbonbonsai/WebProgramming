<?php
$url = "http://10.0.15.21/lab/lab12/restapis/10countries.json";
$response =  file_get_contents($url);
$result = json_decode($response);
?>

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

        .grid-container {
            display: grid;
            grid-template-columns: 4fr 8fr;
            align-items: center;
        }

        .grid-container div {
            margin: 50px;
        }

        img {
            width: 40%;
            height: auto;
        }
    </style>
</head>

<body>
    <?php foreach ($result as $country) { ?>
        <div class="grid-container">
            <div class="info">
                <p>Name: <b><?php echo $country->name; ?></b></p>
                <p>Capital: <?php echo $country->capital; ?></p>
                <p>Population: <?php echo $country->population; ?></p>
                <p>Region: <?php echo $country->region; ?></p>
                <p>
                    Location:
                    <?php
                    foreach ($country->latlng as $location) {
                        echo $location . " ";
                    }
                    ?>
                </p>
                <p>
                    Borders:
                    <?php
                    foreach ($country->borders as $border) {
                        echo $border . " ";
                    }
                    ?>
                </p>
            </div>
            <div class="flag">
                <img src="<?php echo $country->flag; ?>" alt="">
            </div>
        </div>
    <?php } ?>
</body>

</html>