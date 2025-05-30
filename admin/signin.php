<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Rose:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        font-family: Poppins, sans-serif;
        background-color: #f6fdf6;
        color: #2E7D32;
        
        min-height: 100vh;
        border: px solid green;
    }
    .duait{
        width: 100%;
       max-width: 450px;
       background-color: #fff; 
       box-shadow: 0 4px 15px rgba(0,0,0,0.1);
       border-radius: 12px;
        margin: 0 auto;
        text-align: center;
        margin-top: 50px;
    }
    .dua, input{
        font-family: 'Playfair display', serif;
        margin-top: 32px;
    }
    .bttn{
        padding: 10px 12px;
        margin: 20px 0;
        background-color: #2E7D32;
        color: #fff;
        border: none;
        border-radius: 7px;

        
    }
    a{
        text-decoration: none;
        color: #2E7D32;
    }
    a:hover{
        border-bottom: 2px solid #2E7D32;
    }
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 duait">
                <h2>🌙 Welcome Admin</h2>
                <p class="quote">“Never stop making du’a, for what you seek is seeking you.”</p>

                <?php
                    	if(isset($_SESSION['errormsg'])){
                            echo "<div class='alert alert-danger'>". $_SESSION['errormsg']."</div>";
                            unset($_SESSION['errormsg']);
                          }
        
                          if(isset($_SESSION['feedback'])){
                            echo "<div class='alert alert-success'>". $_SESSION['feedback']."</div>";
                            unset($_SESSION['feedback']);
                          }
                        
                        ?>

                <form action="process/process.adminsignin.php" method="post">
                   
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your E-mail">
                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Enter Password">
                   
                    <button type="submit" name="btn" class="bttn">Sign In</button>
    
                </form>
              
                <footer>
                    <p>&copy; 2025 DuaIt. All rights reserved.</p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>