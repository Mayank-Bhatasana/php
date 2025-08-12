<?php
    $a ="Mayank bhatasana";
    echo strlen($a)."<br/>";
    echo strtoupper($a)."<br/>";
    echo strtolower($a)."<br/>";
    echo strpos($a,"ta")."<br/>";
    echo str_replace("Mayank","Mahek",$a)."<br/>";
    echo substr($a, 7, 4)."<br/>";
    echo strrev($a)."<br/>";

    $b = "              Mayank              ";
    echo strlen(trim($b))."<br/>";
    echo strlen($b)."<br/>";
    echo str_repeat($b , 10)."<br/>";
    $c = "Say my name";
    $d = explode(" ", $c);
    foreach ($d as $key=>$value) {
        echo "$key => $value <br/>";
    }
    echo str_shuffle($c)."<br/>";
    echo "<br/>"."<br/>"."<br/>";
    echo implode(" ", $d)."<br/>";


    $m = "Heisenberg\nYou're goddamn right.";
    echo nl2br($m)."<br/>";
?>