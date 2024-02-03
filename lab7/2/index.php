<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $months = array(
        "Januaray", "February", "March", "April", "May", "June", "July",
        "August", "September", "October", "November", "December"
    );

    echo "<label for=\"month\">Choose month : </label>";
    echo "<select name=\"month\" id=\"month\">";
    foreach ($months as $month) {
        echo "<option value=\"$month\">" . $month . "</option>";
    }
    echo "</select>";
    ?>
</body>

</html>