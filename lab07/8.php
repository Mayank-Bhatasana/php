<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WAP to check given number is Armstrong or not.</h1>

    <?php
    $n = 153;
    $og = $n;
    $len = strlen((string)$n);
    $sum = 0;
    while ($n != 0) {

        $temp = $n % 10;
        $n = intdiv($n, 10);
        $sum += pow($temp, 3);
    }
    echo ($sum == $og) ? "It's a Armstrong number" : "It's not a Armstrong number";
    ?>
</body>

</html>