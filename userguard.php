<?php
if (!isset($_SESSION['user_id'])) {
    $_SESSION['errormsg'] = "You must be logged in to access this page.";
    header("Location: signin.php");
    exit();
}