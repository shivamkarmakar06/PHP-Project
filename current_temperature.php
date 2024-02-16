<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Current Temperature</legend>
        <form method="POST">
            Enter Current temperature <input type="number" name="temp"><br><br>
            <input type="submit" name="button" value="Check"><br><br>
            <?php
            if (isset($_POST["button"])) {
                $temp = $_POST["temp"];
                if ($temp > 25) {
                    echo "It's a sunny day!";
                } else { 
                    echo "Consider taking an umbrella.";
                }
            }
            ?>
        </form>
    </fieldset>
</body>
</html>
