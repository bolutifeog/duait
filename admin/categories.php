<?php
  require_once "adminguard.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Rose:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }

    body{
        font-family: "Poppins", sans-serif;
    }
    .admin{
        display: flex;
    }
    .admin a{
        margin-left: auto;
    }
   .sidebar{
        display: flex;
        flex-direction: column;
        background-color: #343a40;
        height: 100vh;
       
   }
   .sidebar a{
    padding: 10px;
    text-decoration: none;
    color: #fff;
    border-bottom: 1px solid #495057;
   }
   svg{
    fill: #fff;
   }
   .sidebar a:hover{
    background-color: #495057;
   }
   .btnn{
    padding: 12px 12px;
    background-color: #495057 ;
   }
   .admin a{
    text-decoration: none;
    color: #fff;
    border-radius: 5px;
   }
</style>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12 admin">
                <h5>Admin Categories</h5>
                <a href="addcat.php" class="btnn"><i class="fas fa-plus"></i>Add New Category</a>
            </div>
        </div>
        <div class="row">

            <div  class="col-md-2 sidebar">
                <div>
                    <a href="#"  onclick="hideSidebar()"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a>
                </div>
                

                
                
                    <a href="#" onclick="showSidebar()" class="menu-button"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a>
                   <a href="dashboard.html">Dashboard</a>
                   <a href="users.html">Manage Users</a>
                   <a href="duas.html">Manage Duas</a> 
                   <a href="categories.html">Categories</a> 
                   <a href="#">Settings</a>
                   <a href="signout.php">Signout</a> 
                </ul>
            </div>
            <div  class="col-md-10">
                <form class="d-flex my-5" role="search" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search Category..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>

                  <div class="row">
                    <div class="col-md-12 card">
                     
                      <div class="card-body">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>Category Name</th>
                              <th>No. of Dua</th>
                              
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Healing</td>
                              <td>12</td>
                            
                              <td>
                                <a href="edit-category.php?id=1" class="btn btn-sm btn-primary">Edit</a>
                                <a href="delete-category.php?id=1" class="btn btn-sm btn-danger">Delete</a>
                                <a href="toggle-status.php?id=1" class="btn btn-sm btn-warning">Deactivate</a>
                              </td>
                             
                            </tr>
                            <tr>
                                <td>2</td>
                              <td>Istighfar</td>
                              <td>50</td>
                              <td>
                                <a href="edit-category.php?id=1" class="btn btn-sm btn-primary">Edit</a>
                                <a href="delete-category.php?id=1" class="btn btn-sm btn-danger">Delete</a>
                                <a href="toggle-status.php?id=1" class="btn btn-sm btn-warning">Deactivate</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  
            </div>
        </div>
    </div>
</body>
</html>