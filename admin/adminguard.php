<?php
session_start();

    if(!isset($_SESSION['admin_id'])){
        $_SESSION['errormsg']= "You must be an admin to access this page";
        header("location: signin.php");
        exit();
    }
?>