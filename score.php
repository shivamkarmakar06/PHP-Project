<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Score</legend>
        <form action="" method="POST">
            Hindi <input type="number" name="hindi"><br><br>
            English <input type="number" name="eng"><br><br>
            Maths <input type="number" name="maths"><br><br>
            Science <input type="number" name="sci"><br><br>
            SST <input type="number" name="sst"><br><br>

            <?php
            if (isset($_POST["button"])) {
                $hindi = $_POST["hindi"];
                $english = $_POST["eng"];
                $maths = $_POST["maths"];
                $science = $_POST["sci"];
                $sst = $_POST["sst"];

                $total = $hindi + $english + $maths + $science + $sst;
                $per = ($total / 5);

                if ($per >= 90) {
                    $grade = "A";
                } elseif ($per >= 80) {
                    $grade = "B";
                } elseif ($per >= 70) {
                    $grade = "C";
                } elseif ($per >= 60) {
                    $grade = "D";
                } else {
                    $grade = "Fail";
                }
            }
            ?>
            Total <input type="text" name="total" value="<?php echo $total; ?>" disabled><br><br>
            Grade <input type="text" name="grade" value="<?php echo $grade; ?>" disabled><br><br>
            <input type="submit" name="button" value="Generate Result">
        </form>
    </fieldset>
</body>
</html>
