<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $n = 5;
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $i; $j++)
                echo "* ";
            echo '<br/>';
        }
        ?>
    </div>
</body>

</html>