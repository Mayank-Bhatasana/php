<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator using Switch Case</h1>
    <div style="display: flex;justify-content: center;border: solid 3px">

    <?php
        $num1 = 20;
        $num2 = 10;
        $operator = '+';


        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                echo "<p>Result: $num1 + $num2 = $result</p>";
                break;
            case '-':
                $result = $num1 - $num2;
                echo "<p>Result: $num1 - $num2 = $result</p>";
                break;
            case '*':
                $result = $num1 * $num2;
                echo "<p>Result: $num1 * $num2 = $result</p>";
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>Result: $num1 / $num2 = $result</p>";
                } else {
                    echo "<p style='color:red;'>Error: Division by zero</p>";
                }
                break;
            case '%':
                $result = $num1 % $num2;
                echo "<p>Result: $num1 % $num2 = $result</p>";
                break;
            default:
                echo "<p style='color:red;'>Invalid Operator</p>";
        }
    ?>
    </div>
</body>
</html>
