<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>to generate Fibonacci series of N number.</h1>
    <?php
    $n = 23;
    $a = 0;
    $b = 1;
    $c = 1;
    for ($i = 0; $i < $n; $i++) {
        echo "$a" . "</br>";
        $a = $b;
        $b = $c;
        $c = $a + $b;
    }
    ?>
</body>

</html>