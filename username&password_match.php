<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Username & Password Match</legend>
        <form method="POST">
            User Name <input type="text" name="user_name"><br><br>
            Password <input type="password" name="password"><br><br>
            <input type="submit" name="button" value="Login"><br><br>
            <?php
            if (isset($_POST["button"])) {
                $Username = $_POST["user_name"];
                $Password = $_POST["password"];
                if ($Username == "2342010595" && $Password == "JLOL") {
                    echo "Login Successful";
                } else { 
                    echo "Invalid Credentials";
                }
            }
            ?>
        </form>
    </fieldset>
</body>
</html>
