<?php
    if(isset($_POST['s'])){
        $email = $_POST['email'];
        $age = $_POST['age'];
        $name = $_POST['name'];

        if(empty($email) || empty($age) || empty($name)){
            echo "Please fill all the fields";
        }elseif (!preg_match("/^[0-9]{1,3}+$/", $age)){
            echo "Please enter a valid age";
        }elseif(!preg_match('/^[a-zA-Z]+$/', $name)){
            echo "Name can only contain letters and no symbols";
        }elseif(!preg_match('/^[a-zA-Z 0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)){
            echo "Please enter a valid email";
        }
    }
?>