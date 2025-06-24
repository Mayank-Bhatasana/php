<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>B 6. WAP to convert temperature from Fahrenheit to Celsius. </h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $f = 64;
            $c = (($f - 32) * 5)/9;
            echo "The $f fahrenheit is $c in celsius";
        ?>
    </div>
</body>
</html>