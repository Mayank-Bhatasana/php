<?php
    $global = 'This is a global variable';
    function theDifference() {
        $local = 'This can\'t be accessed by outside source';

        echo $local.'<br/>';

        static  $staticVar = 0;
        $staticVar++;

        echo $staticVar.'<br/>';
    }


    theDifference();
    theDifference();
    theDifference();
    theDifference();
?>