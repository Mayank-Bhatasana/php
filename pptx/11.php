<?php
function increments()
{

    static $x = 0;
    echo $x;
    echo "</br>";
    $x++;
}
increments();
increments();
increments();

?>