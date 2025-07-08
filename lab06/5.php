<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>B 5. WAP to check to given year is a leap or not.</h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $year=2021;

            if($year%400==0||(($year%4==0)&&($year%100!=0))){
                echo "It's a leap year";
            } else{
                echo "It's not a leap year";
            }

        ?>
    </div>
</body>
</html>