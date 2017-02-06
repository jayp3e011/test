<?php
    include_once('dbconnect.php');


    $if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $is_admin = isset($_POST['is_admin']);
        $register = $con->reg_user($first_name, $last_name, $is_admin, $password, $email);
        if ($register) {
          // Registration Success
          // echo 'Registration  successful <a href="login.php">Click here</a> to login';
            echo true;
        } else {
          // Registration Failed
          // echo 'Registration failed. Email or Username already exits please try again';
            echo false;
        }
    }
?>