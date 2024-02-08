<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2024</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
        * {
            font-family: "Sriracha", cursive;
        }
        table {
            border-collapse: collapse;
        }

        th, td {
            border-top: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin-left: 60px;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <label for="month">Choose month : </label>
        <select name="month" id="month">
            <option value="None" selected>Select Month</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    $monthIn2024 = array(
        "January" => array(
            "", "1", "2", "3", "4", "5", "6",
            "7", "8", "9", "10", "11", "12", "13",
            "14", "15", "16", "17", "18", "19", "20",
            "21", "22", "23", "24", "25", "26", "27",
            "28", "29", "30", "31", "", "", "",
            "", "", "", "", "", "", ""
        ),
        "February" => array(
            "", "", "", "", "1", "2", "3",
            "4", "5", "6", "7", "8", "9", "10",
            "11", "12", "13", "14", "15", "16", "17",
            "18", "19", "20", "21", "22", "23", "24",
            "25", "26", "27", "28", "", "", "",
            "", "", "", "", "", "", ""
        ),
        "March" => array(
            "", "", "", "", "", "1", "2",
            "3", "4", "5", "6", "7", "8", "9",
            "10", "11", "12", "13", "14", "15", "16",
            "17", "18", "19", "20", "21", "22", "23",
            "24", "25", "26", "27", "28", "29", "30",
            "31", "", "", "", "", "", ""
        ),
        "April" => array(
            "", "1", "2", "3", "4", "5", "6",
            "7", "8", "9", "10", "11", "12", "13",
            "14", "15", "16", "17", "18", "19", "20",
            "21", "22", "23", "24", "25", "26", "27",
            "28", "29", "30", "", "", "", "",
            "", "", "", "", "", "", ""
        ),
        "May" => array(
            "", "", "", "1", "2", "3", "4",
            "5", "6", "7", "8", "9", "10", "11",
            "12", "13", "14", "15", "16", "17", "18",
            "19", "20", "21", "22", "23", "24", "25",
            "26", "27", "28", "29", "30", "31", "",
            "", "", "", "", "", "", ""
        ),
        "June" => array(
            "", "", "", "", "", "", "1",
            "2", "3", "4", "5", "6", "7", "8",
            "9", "10", "11", "12", "13", "14", "15",
            "16", "17", "18", "19", "20", "21", "22",
            "23", "24", "25", "26", "27", "28", "29",
            "30", "", "", "", "", "", ""
        ),
        "July" => array(
            "", "1", "2", "3", "4", "5", "6",
            "7", "8", "9", "10", "11", "12", "13",
            "14", "15", "16", "17", "18", "19", "20",
            "21", "22", "23", "24", "25", "26", "27",
            "28", "29", "30", "31", "", "", "",
            "", "", "", "", "", "", ""
        ),
        "August" => array(
            "", "", "", "", "1", "2", "3",
            "4", "5", "6", "7", "8", "9", "10",
            "11", "12", "13", "14", "15", "16", "17",
            "18", "19", "20", "21", "22", "23", "24",
            "25", "26", "27", "28", "29", "30", "31",
            "", "", "", "", "", "", ""
        ),
        "September" => array(
            "1", "2", "3", "4", "5", "6",  "7",
            "8", "9", "10", "11", "12", "13", "14",
            "15", "16", "17", "18", "19", "20", "21",
            "22", "23", "24", "25", "26", "27", "28",
            "29", "30", "", "", "", "", "",
            "", "", "", "", "", "", ""
        ),
        "October" => array(
            "", "", "1", "2", "3", "4", "5",
            "6",  "7", "8", "9", "10", "11", "12",
            "13", "14", "15", "16", "17", "18", "19",
            "20", "21", "22", "23", "24", "25", "26",
            "27", "28", "29", "30", "31", "", "",
            "", "", "", "", "", "", ""
        ),
        "November" => array(
            "", "", "", "", "", "1", "2",
            "3", "4", "5", "6", "7", "8", "9",
            "10", "11", "12", "13", "14", "15", "16",
            "17", "18", "19", "20", "21", "22", "23",
            "24", "25", "26", "27", "28", "29", "30",
            "", "", "", "", "", "", ""
        ),
        "December" => array(
            "1", "2", "3", "4", "5", "6",  "7",
            "8", "9", "10", "11", "12", "13", "14",
            "15", "16", "17", "18", "19", "20", "21",
            "22", "23", "24", "25", "26", "27", "28",
            "29", "30", "31", "", "", "", "",
            "", "", "", "", "", "", ""
        )
    );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['month']) && $_POST['month'] !== "None") {
            $selectedMonth = $_POST['month'];
            echo "<h1>$selectedMonth 2024</h1>";
            echo "<table>";
            echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
            $days = $monthIn2024[$selectedMonth];
            $count = 0;
            echo "<tr>";
            foreach ($days as $day) {
                if ($day == "") {
                    echo "<td></td>";
                } else {
                    echo "<td>$day</td>";
                }
                $count++;
                if ($count % 7 == 0) {
                    echo "</tr><tr>";
                }
            }
            echo "</tr>";
            echo "</table>";
        }
    }
    ?>
</body>

</html>