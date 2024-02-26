<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('questions.db');
    }
}
?>

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
    </style>
</head>

<body>
<form action="" method="post">
        <?php
        $db = new MyDB();

        if (isset($_POST['back'])) {
            $currentQuestionId = isset($_POST['current_question_id']) ? $_POST['current_question_id'] : 1;
            $sql = "SELECT *
                    FROM questions
                    WHERE QID = ($currentQuestionId-1);";
            $result = $db->query($sql);
        } else if (isset($_POST['next'])) {
            $currentQuestionId = isset($_POST['current_question_id']) ? $_POST['current_question_id'] : 1;
            $sql = "SELECT *
                    FROM questions
                    WHERE QID = ($currentQuestionId+1);";
            $result = $db->query($sql);
        } else {
            $sql = "SELECT *
                    FROM questions
                    WHERE QID = 1;";
            $result = $db->query($sql);
        }

        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "<h5>" . $row['QID'] . ") " . $row['Stem'] . "</h5>";
            echo "<input type='radio' name='q" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_A'] . "' value='A'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_A'] . "'> " . $row['Alt_A'] . "</label>" . "<br>";
            echo "<input type='radio' name='q" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_B'] . "' value='B'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_B'] . "'> " . $row['Alt_B'] . "</label>" . "<br>";
            echo "<input type='radio' name='q" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_C'] . "' value='C'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_C'] . "'> " . $row['Alt_C'] . "</label>" . "<br>";
            echo "<input type='radio' name='q" . $row['QID'] . "' id='" .  $row['QID'] . "-" . $row['Alt_D'] . "' value='D'>";
            echo "<label for='" . $row['QID'] . "-" . $row['Alt_D'] . "'> " . $row['Alt_D'] . "</label>" . "<br>";
            echo "<input type='hidden' name='current_question_id' value='" . $row['QID'] . "'>";
        }

        $db->close();
        ?>

        <input type="submit" class="btn btn-warning" name="back" value="<< Back">
        <input type="submit" class="btn btn-warning" name="next" value="Next >>">
    </form>
</body>

</html>