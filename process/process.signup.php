<?php
    session_start();
    require_once "../classes/Register.php";
    require_once "../classes/Library.php";

    if(isset($_POST['btn'])){
        $fullname = sanitize($_POST['fullname']);
        $email = sanitize($_POST['email']);
        $username = sanitize($_POST['username']);
        $password = $_POST['pwd'];
        $confirmPassword = $_POST['confirm-pwd'];


        if(trim($fullname)== ""|| trim($email)== ""|| trim($username)== "" || trim($password) == ""){
            $_SESSION['errormsg']= "Please complete the fields";
            header("location:../index.php");
            exit();
        }elseif(trim($password) != trim($confirmPassword)){
            $_SESSION['errormsg']="The two passwords must match";
            header("location:../index.php");
            exit();

        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $_SESSION['errormsg']= "Enter a valid E-mail";
           header("location:../index.php");
           exit();
        }else{
            $register1 = new Register;
            $register2 = $register1->signUp($fullname, $email, $password, $username);
        }
        if($register2 != false){
            $_SESSION['feedback']= "An account has been created for you, please sign in";
            header("location:../signin.php");
            exit();
        }else{
            $_SESSION['errormsg']="Error creating an account, please try again";
            header("location:../index.php");
            exit();
        }
    }else{
        $_SESSION['errormsg']= "Please complete the form";
        header("location:../index.php");
        exit();
    }
?>