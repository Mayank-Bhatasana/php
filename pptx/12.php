<?php
$x = 10;
$y = 5;

$result = ($x > $y) ? "x is greater" : "y is greater";
echo $result;

$firstName = null;
$lastName = "Charmy";

// Using null coalescing operator
$name = $firstName ?? $lastName;
echo "<br>" . $name;
?>