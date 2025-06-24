<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%$_COOKIE</title>
</head>
<body>
    <h1>WAP to take a value from 1-7 and display current day using switch case. (If 1-Monday, 2-Tuesday,
etc.).</h1>
    <div style="display: flex;justify-content: center;border: solid 3px">
        <?php
            $value = 8;
            switch ($value) {
                case 1:
                    echo "Monday";
                    break;
                
                case 2:
                    echo "Tuesday";
                    break;

                case 3:
                    echo "Wednesday";
                    break;

                case 4:
                    echo "Thursday";
                    break;
                    
                case 5:
                    echo "Friday";
                    break;
                
                case 6:
                    echo "Saturday";
                    break;

                case 7:
                    echo "Sunday";
                    break;

                default:
                    echo "<p style='color: red'>Something went wrong:(</p>";
                    break;
            }
        ?>
    </div>
</body>
</html>