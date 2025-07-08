<!-- Declare a variable $value and assign it an integer value (e.g., $value = 10;). -->
<!-- Use the gettype() function to display the type of $value. 
- Use settype($value, 'string') to change the type of $value to a string. 
- Use gettype() again to display the new type of $value. 
- Use var_dump($value) to display the value and type of $value after the conversion. -->
<?php
    $value = 45;
    echo gettype($value);
    settype($value, 'string');
    echo "<br>";
    echo gettype($value);
    echo "<br>";
    echo var_dump($value);
?>