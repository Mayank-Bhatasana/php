<?php

    $fileName = "example.txt";
    if(file_exists($fileName)) {
        echo "The size of this file is ".filesize($fileName);
    }
    else{
        echo "No file found";
    }
?>
