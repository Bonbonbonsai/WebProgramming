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
            color: white;
        }

        body {
            background-color: #535C91;

        }

        .container {
            display: grid;
            place-self: center;
            margin-top: 40px;
            padding: 50px;
            width: 80%;
            height: auto;
            border-radius: 20px;
            background-color: #9188C6;
        }
        .container > form, .btn-primary {
            margin-top: 10px;
        }

        label {
            margin-left: 10px
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Quiz</h1>
        <form action="" method="post">
            <?php
            session_start();

            class MyDB extends SQLite3
            {
                function __construct()
                {
                    $this->open('questions.db');
                }
            }

            if (!isset($_SESSION['selected_options'])) {
                $_SESSION['selected_options'] = array();
            }

            if (isset($_POST['submit'])) {
                $count = isset($_POST['count']) ? $_POST['count'] : 1;

                $db = new MyDB();

                foreach ($_POST as $key => $value) {
                    if ($key != 'count' && $key != 'submit') {
                        $_SESSION['selected_options'][$key] = $value;
                    }
                }

                $count++;

                $sql = "SELECT *
                        FROM questions
                        WHERE QID = $count";
                $result = $db->query($sql);
                $row = $result->fetchArray(SQLITE3_ASSOC);

                if ($count <= 10) {
                    echo "<h5>" . $row['QID'] . ") " . $row['Stem'] . "</h5>";
                    echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_A'] . "' value='A'>";
                    echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_A'] . "'> " . $row['Alt_A'] . "</label>" . "<br>";
                    echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_B'] . "' value='B'>";
                    echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_B'] . "'> " . $row['Alt_B'] . "</label>" . "<br>";
                    echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_C'] . "' value='C'>";
                    echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_C'] . "'> " . $row['Alt_C'] . "</label>" . "<br>";
                    echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_D'] . "' value='D'>";
                    echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_D'] . "'> " . $row['Alt_D'] . "</label>" . "<br>";
                    echo "<input type='submit' class='btn btn-primary' name='submit' value='Submit'>";
                    echo "<input type='hidden' name='count' value='$count'>";
                } else {
                    $score = 0;
                    foreach ($_SESSION['selected_options'] as $question => $selected_option) {
                        $sql = "SELECT Correct
                                FROM questions
                                WHERE QID = $question";
                        $result = $db->query($sql);
                        $row = $result->fetchArray(SQLITE3_ASSOC);
                        $correct_option = $row['Correct'];
                        if ($selected_option == $correct_option) {
                            $score++;
                        }
                    }

                    echo "<h2>Your Score: $score / 10</h2>";

                    session_destroy();
                }

                $db->close();
            } else {
                $db = new MyDB();
                $count = 1;

                $sql = "SELECT *
                        FROM questions
                        WHERE QID = $count";
                $result = $db->query($sql);
                $row = $result->fetchArray(SQLITE3_ASSOC);

                echo "<h5>" . $row['QID'] . ") " . $row['Stem'] . "</h5>";
                echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_A'] . "' value='A'>";
                echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_A'] . "'> " . $row['Alt_A'] . "</label>" . "<br>";
                echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_B'] . "' value='B'>";
                echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_B'] . "'> " . $row['Alt_B'] . "</label>" . "<br>";
                echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_C'] . "' value='C'>";
                echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_C'] . "'> " . $row['Alt_C'] . "</label>" . "<br>";
                echo "<input class='form-check-input' type='radio' name='" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_D'] . "' value='D'>";
                echo "<label class='form-check-label' for='" . $row['QID'] . "-" . $row['Alt_D'] . "'> " . $row['Alt_D'] . "</label>" . "<br>";
                echo "<input type='submit' class='btn btn-primary' name='submit' value='Submit'>";
                echo "<input type='hidden' name='count' value='$count'>";
            }
            ?>
        </form>
    </div>
</body>

</html>