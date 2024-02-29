<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

        * {
            font-family: "Rubik", sans-serif;
            background-color: #535C91;
            color: white;
        }

        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <?php
        class MyDB extends SQLite3
        {
            function __construct()
            {
                $this->open('questions.db');
            }
        }

        if (isset($_POST['submit'])) {
            $count = isset($_POST['count']) ? $_POST['count'] : 1;
            $selected_option = isset($_POST[$row['QID']]) ? $_POST[$row['QID']] : '';
        
            // Connect to database
            $db = new MyDB();

            if ($selected_option == $row['Correct']) {
                $score++;
            }

            $count++;

            // Retrieve question from database
            $sql = "SELECT *
                    FROM questions
                    WHERE QID = $count";
            $result = $db->query($sql);
            $row = $result->fetchArray(SQLITE3_ASSOC);

            // Display next question or show score if all questions are done
            if ($count <= 10) {
                echo "<h5>" . $row['QID'] . ") " . $row['Stem'] . "</h5>";
                echo "<input type='hidden' name='count' value='$count'>";
                echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_A'] . "' value='A'>";
                echo "<label for='" . $row['QID'] . "-" . $row['Alt_A'] . "'> " . $row['Alt_A'] . "</label>" . "<br>";
                echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_B'] . "' value='B'>";
                echo "<label for='" . $row['QID'] . "-" . $row['Alt_B'] . "'> " . $row['Alt_B'] . "</label>" . "<br>";
                echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_C'] . "' value='C'>";
                echo "<label for='" . $row['QID'] . "-" . $row['Alt_C'] . "'> " . $row['Alt_C'] . "</label>" . "<br>";
                echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_D'] . "' value='D'>";
                echo "<label for='" . $row['QID'] . "-" . $row['Alt_D'] . "'> " . $row['Alt_D'] . "</label>" . "<br>";
                echo "<br><input type='submit' class='btn btn-primary' name='submit' value='Submit'>";
            } else {
                echo "<h2>Your Score: $score</h2>";
                $count = 1;
                $score = 0;
            }
        
            $db->close();
        } else {
            // Display the first question
            $count = 1;
            $score = 0;
            $db = new MyDB();

            $sql = "SELECT *
                    FROM questions
                    WHERE QID = $count";
            $result = $db->query($sql);
            $row = $result->fetchArray(SQLITE3_ASSOC);
        
            echo "<h5>" . $row['QID'] . ") " . $row['Stem'] . "</h5>";
            echo "<input type='hidden' name='count' value='$count'>";
            echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_A'] . "' value='A'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_A'] . "'> " . $row['Alt_A'] . "</label>" . "<br>";
            echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_B'] . "' value='B'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_B'] . "'> " . $row['Alt_B'] . "</label>" . "<br>";
            echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_C'] . "' value='C'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_C'] . "'> " . $row['Alt_C'] . "</label>" . "<br>";
            echo "<input type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_D'] . "' value='D'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_D'] . "'> " . $row['Alt_D'] . "</label>" . "<br>";
            echo "<br><input type='submit' class='btn btn-primary' name='submit' value='Submit'>";
        }
        
        ?>
    </form>
</body>

</html>
