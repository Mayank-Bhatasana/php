<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>B 3. WAP to make a simple calculator using switch case. </h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $a=23;
            $b=7;
            $c='+';
            $ans=0; 
            switch ($c) {
                case '+':
                    $ans=$a+$b;
                    break;
                
                case '*':
                    $ans = $a*$b;
                    break;
                
                case '-':
                    $ans = $a-$b;
                    break;
                
                case '/':
                    $ans = $a/$b;
                    break;

                default:
                    $ans = "Some thing went wrong:(";
                    break;
            }
            echo "The answer is $ans";
        ?>
    </div>
</body>
</html>