<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Check length of the Article and Truncate</legend>
        <form method="POST">
            Enter your article <textarea name="article" rows="4" cols="50"></textarea><br><br>
            <input type="submit" name="button" value="check"><br><br>
        </form>
        <?php
        if (isset($_POST["button"])){
            $article = $_POST["article"];
            $leng = strlen($article);
            if($leng>50){
                $truncateleng = substr($article , 0 , 50);
                echo "$truncateleng";
            }
            else{ 
                echo "$article";
            }
        }
        ?>
    </fieldset>
</body>
</html>
