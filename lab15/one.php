<?php

echo "You have enter this";
if (isset($_POST['sub'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pass = $_POST['pass'];
  $gender = $_POST['gender'];
  $cars = array($_POST['cars']);
  echo " ".$fname . $lname. $pass. $gender.$cars;
  for ($i=0; $i < $pass.length; $i++) { 
    echo $i . $pass[$i];
  }

}
?>
