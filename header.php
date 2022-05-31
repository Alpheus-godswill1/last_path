<?php ob_start();?>
<?php include "connect.php";?>
<?php include "function.php";?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="fontawesome/fontawesome/css/all.css">
    <link rel="stylesheet"  href="fontawesome/fontawesome/js/all.js">

     <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="MotherStyle.css">    
    <title>Pathway to heaven</title>
</head>
<body>
    <section class="navBar">
    <nav class="navbar navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="welcome-2.png" class="img-fluid" width="100px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pathway To Heaven Mega Ministries</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item" style="color:#000000">
            <a class="nav-home active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-location" href="location.php">Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-request" href="prayerfield.php">Prayerrequest</a>
          </li>
          <li class="nav-item">
            <a class="nav-counsel" href="counsel.php">Counselling</a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="welcome-2.png" class="img-fluid" width="25%" alt="">
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#"></a></li>
              <li><a class="dropdown-item" href="about.php">About Us</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="donate.php">Donate</a></li>
              <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="newbeliever.php">New Believer</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
    </section>
   
    