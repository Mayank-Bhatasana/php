<?php

echo "You have enter this";
if (isset($_POST['sub'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];

    echo $fname . $lname. $pass. $gender;
}
?>
