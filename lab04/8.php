<?php
    // WAP to swap values of two variables with the help of 3rd variable.
    $a=23;
    $b=34;

    echo 'The original value of a is: '.$a.' and b is :'.$b.'<br/>';

    $a=$a+$b;
    $b=$a-$b;
    $a=$a-$b;


    echo 'The change value of a is: '.$a.' and b is :'.$b;
?>