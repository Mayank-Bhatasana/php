<?php

echo "You have enter this";
if (isset($_POST['sub'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $cars = $_POST['cars'];
    echo " ".$fname . $lname. $pass. $gender.$cars;
}
?>
