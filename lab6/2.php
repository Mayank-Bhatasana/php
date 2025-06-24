<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>A 2. WAP to find a diameter from given area of circle. </h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $area=50.27;
            $r=sqrt(($area/3.14));
            $d=2*$r;

            echo "The diameter of the circle is <b>$d</b>"
        ?>
    </div>
</body>
</html>