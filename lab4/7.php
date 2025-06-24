<?php
    // WAP to swap values of two variables with the help of 3rd variable.
    $a=23;
    $b=34;

    echo 'The original value of a is: '.$a.' and b is :'.$b.'<br/>';

    $temp=$b;
    $b=$a;
    $a=$temp;

    echo 'The change value of a is: '.$a.' and b is :'.$b;
?>