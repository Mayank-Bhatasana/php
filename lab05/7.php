<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>WAP to print class of result based on percentage (i.e. less than 40% -> Fail, 40% to 50% -> Pass
Class, 50% to 60% -> Second Class, 60% to 70% -> First Class, above 70% -> Distinction). </h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $result = 12;
            if($result<40){
                echo "<h1 style='color:red'>Fail</h1>";
            }else if($result < 50){
                echo "<h1 style='color:green'>Pass Class</h1>";
            }else if($result < 60){
                echo "<h1 style='color:green'>Second Class</h1>";
            }else if($result < 70){
                echo "<h1 style='color:green'>First Class</h1>";
            }else{
                echo "<h1 style='color:green'>Distinction</h1>";
            }
        ?>
    </div>
</body>
</html>