<?php
    $file = fopen("test3.txt", "r");
    if ($file) {
        echo fread($file, filesize("test3.txt"));
        fclose($file);
    }
?>
