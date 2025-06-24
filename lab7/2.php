<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>WAP to print first n odd numbers using for, while and do while loop. </h1>
    <?php
    $n = 23;
    for ($i = 0; $i < $n; $i++) if ($i % 2) echo $i . " ";

    $i = 0;
    while ($i != $n) if ($i % 2 == 1) {
        echo $i . " ";
        $i++;
    };

    $i = 0;
    do {
        if ($i % 2) echo $i++ . " ";
    } while ($i != $n);
    ?>
</body>

</html>