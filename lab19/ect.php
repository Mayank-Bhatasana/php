<?php

$file = fopen("ect.txt", "r");
$i=0;
while(!feof($file)){
    fgets($file).PHP_EOL;
    $i++;
}
echo $i;

