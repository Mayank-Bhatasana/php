<?php

$a = 2;
$b = 3;
$ans = 0;

function multiplication()
{
    global $a, $b, $ans;
    $ans = $a * $b;
}
multiplication();
echo $ans;

?>