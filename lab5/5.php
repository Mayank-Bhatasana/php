<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>B 5. WAP to find greatest number from 3 numbers. </h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $a=23;
            $b=12;
            $c=54;

            if (($a>$b) && ($a>$c)) {
                echo "$a is biggest";
            }
            else if($b>$c){
                echo "$b is the biggest";
            }
            else{
                echo "$c is the biggest";
            }
        ?>
    </div>
</body>
</html>