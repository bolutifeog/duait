<?php
    session_start();
    require_once "classes/Register.php";

    $signOut = new Register;
    $signOutt = $signOut->signOut();
    header("location:signin.php");
?>