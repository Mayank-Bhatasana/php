<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>WAP to print first n numbers using for, while and do while loop. </h1>
    <?php
    $n = 43;
    for ($i = 0; $i < $n; $i++) echo "$i</br>";

    $i = 0;
    while ($i != $n) echo $i++ . " ";

    $i = 0;
    do {
        echo $i++ . " ";
    } while ($i != $n);
    ?>
</body>

</html>