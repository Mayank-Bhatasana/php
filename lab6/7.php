<?php
$a = 5;
$b = 5;
$c = 5;

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Valid Triangle<br>";
    if ($a == $b && $b == $c) {
        echo "Equilateral Triangle";
    } elseif ($a == $b || $b == $c || $a == $c) {
        echo "Isosceles Triangle";
    } else {
        echo "Scalene Triangle";
    }
    $sides = array($a, $b, $c);
    sort($sides);
    if (pow($sides[0], 2) + pow($sides[1], 2) == pow($sides[2], 2)) {
        echo "<br>Also, it is a Right-angled Triangle";
    }
} else {
    echo "Not a valid Triangle";
}
?>