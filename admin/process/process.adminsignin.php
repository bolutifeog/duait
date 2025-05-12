<?php
session_start();
require_once "../classes/Register.php";
require_once "../classes/Library.php";


    if(isset($_POST['btn'])){
        $email = sanitize($_POST['email']);
        $pwd = $_POST['pwd'];

        $signIn1 = new Register;
        $signIn2 = $signIn1->adminSignIn($email, $pwd);

        if($signIn2){
            $_SESSION['admin_id']= $signIn2['admin_id'];
            $_SESSION['name']= $signIn2['name'];
            $_SESSION['email']= $signIn2['email'];
            header("location:../dashboard.php");
            exit();
        }else{
            $_SESSION['errormsg'] = "Invalid email or password";
            header("location:../signin.php");
            exit();
        }
    }else{
        $_SESSION['errormsg'] = "Please complete the form";
        header("location:../signin.php");
        exit();
    }
?>