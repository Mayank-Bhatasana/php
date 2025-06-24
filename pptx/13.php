<?php
$a = true;
$b = false;

echo ($a && $b) ? "AND: True </br>" : "AND: False </br>";

echo ($a || $b) ? "OR: True </br>" : "OR: False </br>";

echo !$a ? "NOT: False </br>" : "NOT: True </br>";

echo ($a and $b) ? "AND (and): True </br>" : "AND (and): False </br>";

echo ($a or $b) ? "OR (or): True </br>" : "OR (or): False </br>";

echo ($a xor $b) ? "XOR: True </br>" : "XOR: False </br>";
?>