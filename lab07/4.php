<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WAP to calculate and display sum and product of first N number.</h1>
    <?php
    $n = 10;
    $sum = 0;
    $pro = 1;
    for ($i = 1; $i < $n; $i++) {
        $sum += $i;
        $pro *= $i;
    }

    echo "The sum is " . $sum . " and the pro is " . $pro;
    ?>
</body>

</html>