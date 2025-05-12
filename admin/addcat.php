<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add categories</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Rose:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
   *{
        margin: 0;
        padding: 0;
    }
    body{
        font-family: Poppins, sans-serif;
       
        color: #2E7D32;
        min-height: 100vh;
        border: px solid green;
        margin-top:50px;
        
    }

    .form-group{
        margin:auto;
        width:500px
       

    }

    .btnn{
        padding:10px 12px;
        gap: 20px;
        background-color:#343a40;
        color:#fff;
        border-radius:5px;
        border:none;
    }
   .form-group a{
        border:2px solid #495057;
        background-color:#fff;
        padding:10px 12px;
        text-decoration:none;
        border-radius:5px;
        color: #343a40
       

    }
</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Add Dua Category</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="category" id="category" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group mt-3">
                        <label for="staus">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </select>
                    </div>
                    

                    <div class="form-group mt-3 d-flex gap-5">
                        <button type="submit" class="btnn">Add Category</button>
                        <a href="cancel.php">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>