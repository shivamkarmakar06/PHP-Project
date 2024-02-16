<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Application</title>
</head>
<body>
    <fieldset>
        <legend>Quiz Application</legend>
        <form method="POST">
            <p>1. What is the capital of France?</p>
            <input type="radio" name="q1" value="Paris"> Paris<br>
            <input type="radio" name="q1" value="Berlin"> Berlin<br>
            <input type="radio" name="q1" value="London"> London<br>

            <p>2. What is the largest planet in our solar system?</p>
            <input type="radio" name="q2" value="Earth"> Earth<br>
            <input type="radio" name="q2" value="Jupiter"> Jupiter<br>
            <input type="radio" name="q2" value="Mars"> Mars<br><br>

            <input type="submit" name="submit" value="Submit Quiz"><br><br>
        </form>
        <?php
            // Define correct answers
            $correctAnswers = array(
                "q1" => "Paris",
                "q2" => "Jupiter"
            );
            if (isset($_POST["submit"])) {
                // Initialize score
                $score = 0;
                // Check answer for question 1
                if (isset($_POST["q1"])) {
                    $userAnswerQ1 = $_POST["q1"];
                    if ($userAnswerQ1 === $correctAnswers["q1"]) {
                        $score++;
                    }
                }
                // Check answer for question 2
                if (isset($_POST["q2"])) {
                    $userAnswerQ2 = $_POST["q2"];
                    if ($userAnswerQ2 === $correctAnswers["q2"]) {
                        $score++;
                    }
                }
                // Display the user's score
                echo "Your Score: $score out of " . count($correctAnswers);
            }
        ?>
    </fieldset>
</body>
</html>
