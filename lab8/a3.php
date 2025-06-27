<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 5; $j >= 6 - $i; $j--)
            echo "$j ";
        echo '<br/>';
    }
    ?>
</body>

</html>