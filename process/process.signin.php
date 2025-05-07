<?php
session_start();
require_once "../classes/Register.php";
require_once "../classes/Library.php";

if(isset($_POST['btn'])){
    $email = sanitize($_POST['email']);
    $password = $_POST['pwd'];

    $signin1 = new Register;
    $signin2 = $signin1->signIn($email, $password); 

    // var_dump($signin2);
    // exit;


    if($signin2){
        // I stored all user's data here for easy accessibility.
        $_SESSION['user_id'] = $signin2['user_id']; 
        $_SESSION['username'] = $signin2['username'];
        $_SESSION['email'] = $signin2['user_email'];
        header("location:../userdashboard.php");
        exit();
    } else {
        $_SESSION['errormsg'] = "Invalid email or password";
        header("location:../signin.php");
        exit();
    }
} else {
    $_SESSION['errormsg'] = "Please complete the form";
    header("location:../signin.php");
    exit();
}
