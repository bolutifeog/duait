<?php
session_start();
require_once "classes/Register.php";

$signOut1 = new Register;
$signOut2 = $signOut1->signOut();
header("location:signin.php");
exit();