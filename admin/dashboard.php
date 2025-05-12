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

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Rose:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <style>
    * {
      padding: 0;
      margin: 0;
    }

    body {
      background-color: #f8f9fa;
     font-family: "Poppins", sans-serif;
    }

    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: white;
      padding-top: 20px;
    }

    .sidebar a {
      text-decoration: none;
      padding: 10px 15px;
      display: block;
      color: white;
      border-bottom: 1px solid #495057;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .card-box {
      min-height: 120px;
      border-radius: 5px;
      padding: 20px;
      color: #fff;
    }

    .card {
      margin-top: 20px;
    }

    .hamburger {
      display: none;
      background: none;
      border: none;
      margin: 15px;
    }

    .hamburger svg {
      fill: #343a40;
    }

    @media (max-width: 800px) {
      .sidebar {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
      }

      .sidebar.show {
        display: block;
      }

      .hamburger {
        display: block;
      }

      .hideOnMobile {
        display: none;
      }
    }

    .close-btn {
        display: none;
        text-align: right;
        padding: 10px 15px;
    }

    @media (max-width: 800px) {
        .close-btn {
            display: block;
        }
    }

  </style>
</head>

<body>
  <div class="container-fluid">
    <!-- Hamburger icon for small screens -->
    <button class="hamburger" onclick="sideBar()">
      <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 0 24 24" width="26px">
        <path d="M4 6h16M4 12h16M4 18h16" stroke="#343a40" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>

    <div class="row">
      
      <div class="col-md-2 sidebar" id="sidebar">
        <!-- Close icon for small screens -->
        <div class="close-btn d-md-none" onclick="sideBar()">
            <svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 0 24 24" width="26px">
            <path d="M6 18L18 6M6 6l12 12" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
  
        <h5 class="text-center">Admin Panel</h5>
        <a href="dashboard.php" class="hideOnMobile">Dashboard</a>
        <a href="users.php" class="hideOnMobile">Manage Users</a>
        <a href="duas.php" class="hideOnMobile">Manage Du'as</a>
        <a href="categories.php" class="hideOnMobile">Categories</a>
        <a href="#" class="hideOnMobile">Settings</a>
        <a href="signout.php" class="hideOnMobile">Signout</a>
      </div>

      <!-- Main content -->
      <div class="col-md-10">
        <h2 class="mt-5">Dashboard</h2>
        <hr />

        <div class="row g-4">
          <div class="col-md-4">
            <div class="bg-primary card-box">
              <h5>Total Users</h5>
              <p class="display-6">120</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-success card-box">
              <h5>Total Duas</h5>
              <p class="display-6">250</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-warning card-box" style="color: #343a40;">
              <h5>Categories</h5>
              <p class="display-6">15</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 card">
            <div>
              <h5>Recent Duas</h5>
            </div>
            <hr />
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Fullname</th>
                    <th>Dua Title</th>
                    <th>Category</th>
                    <th>Date Added</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Shukroh Boluwatife</td>
                    <td>Supplication for Emotional healing</td>
                    <td>Healing</td>
                    <td>25-05-06</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Maryam Nofiu</td>
                    <td>Dua for mercy and forgiveness</td>
                    <td>Istighfar</td>
                    <td>25-05-07</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  
  <script>
    function sideBar() {
      const sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("show");
    }
  </script>
</body>
</html>
