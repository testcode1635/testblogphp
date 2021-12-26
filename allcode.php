<?php
session_start();

//session_destroy();
unset($_SESSION['auth']);
unset($_SESSION['auth_role']);
unset($_SESSION['auth_user']);

if (isset($_POST['logout_btn'])) {
    $_SESSION['message'] ="Logged Out Successfuly!";
    header('location:login.php');
    exit(0);
   
}


?>