<?php
session_start();


require_once "classes/Register.php";
require_once "userguard.php";

$dashboard1 = new Register;
$dashboard2 = $dashboard1->userDashboard($_SESSION['user_id']);

// echo "<pre>";
// print_r($dashboard2);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Rose:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        font-family: 'Poppins', sans-serif;
        background-color: #f6fdf6;
        min-height: 100vh;
        border: px solid green;
        text-align: center;
    }
    .dashboard{
        background-color: #2E7D32;
        min-height: 70px;
        padding-top: 20px;
    }
    .btn{
        background-color: #fff;
        color: #2E7D32;
        padding: 8px 16px;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 500;
  
    }
    .content{
        margin-top: 50px;
    }
    .add-dua-btn{
        background-color: #2E7D32;
        padding: 12px 25px;
        text-decoration: none;
        display: inline-block;
        margin-top: 30px;
        border: none;
        border-radius: 10px;
        color: #fff;
    }
    .add-dua-btn:hover{
        background-color: #085c0c;
    }
    .links a{
        margin-right: 40px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
    }
    /* h2{
        font-family: 'Playfair display', serif;
    } */
</style>
<body>
    <div class="container-fluid">
        <div class="row dashboard">
            <div class="col-md-2">
                <h2 style="color: #fff;">DuaIt</h2>
                
            </div>
            <div class="col-md-8 links">
                <a href="createdua.html">Add Du'a</a>
                <a href="viewdua.html">Dua List</a>
            </div>
            <div class="col-md-2">
                <a href="signout.php" class="btn mb-3">Sign Out</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 content">
                <h2>Assalamu Alaikum, <?php echo $dashboard2['username'] ?> 🌸</h2>
                <p class="reminder">“Remember Allah much, that you may succeed.” <em>(Qur’an 62:10)</em></p>
            </div>
        </div>
        <section class="add-dua-section">
            <a href="createdua.html" class="add-dua-btn">+ Add New Du’a</a>
          </section>
    </div>
</body>
</html>