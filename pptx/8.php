<?php
$var1 = "123xyz";
settype($var1, "integer");

echo $var1 . "</br>";
echo gettype($var1) . "</br>";

$var = 456;
var_dump($var) . "</br>";

// Explicitly cast to string
$strVar = (string) $var;

echo $strVar . "</br>";
echo gettype($strVar) . "</br>";
var_dump($strVar);
?>