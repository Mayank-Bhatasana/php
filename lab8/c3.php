<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($k = 1; $k <= $i; $k++)
            echo '&nbsp;';

        for ($j = 1; $j <= 6 - $i; $j++)
            echo $j;

        echo '<br/>';
    }
    ?>
</body>

</html>