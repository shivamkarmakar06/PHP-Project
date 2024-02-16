<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Traffic Light</legend>
    <form action="" method="POST">
        enter a colour <input type="text" name="colour"><br><br>
        <input type="submit" name="button" value="Generate Result"><br><br>
        <?php
        if (isset($_POST["button"])){
            $colour = $_POST["colour"];
            if ($colour == "green"){
                echo "Go";
            }
            elseif ($colour == "yellow"){
                echo "Slow Down";
            }
            elseif ($colour == "red"){
                echo "Stop";
            }
            else{
                echo "Invalid Input";
            }
        }
        ?>
    </form>
    </fieldset>
</body>
</html>
