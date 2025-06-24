<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WAP to check given number is Palindrome or not.</h1>
    <?php
    $n = 31;
    $og = $n;
    $rem = 0;
    while ($n > 0) {
        $d = $n % 10;
        $rem = $rem * 10 + $d;
        $n = intdiv($n, 10);
    }

    echo ($rem == $og) ? 'it is Palindrome' :  "it's not Palindrome";
    ?>
</body>

</html>