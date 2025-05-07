<?php
session_start();
require_once "../classes/Register.php";
require_once "../classes/Library.php";

if(isset($_POST['btn'])){
    $email = sanitize($_POST['email']);
    $password = $_POST['pwd'];

    $signin1 = new Register;
    $signin2 = $signin1->signIn($email, $password); // $signin2 is the full user array now

    if($signin2){
        $_SESSION['user_id'] = $signin2['user_id']; // ✅ this will now work
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
