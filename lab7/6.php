<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WAP to check whether the given number is prime or not.</h1>
    <?php
    $n = 23;
    $prime = 1;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $prime = 0;
            break;
        }
    };

    if ($prime) echo "It's a prime number";
    else echo "It's not a prime number";
    ?>
</body>

</html>