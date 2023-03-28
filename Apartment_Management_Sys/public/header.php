
<?php
// do php stuff
//session_start(); 
// include('../Html/navbar.html');

include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/includes/constants.php');

// include($_SERVER['DOCUMENT_ROOT'].'/Riham/Apartment_Management_Sys/includes/constants.php');

include(PROJECT_ROOT.'includes/database.php');
include(PROJECT_ROOT.'includes/config.php');




?>
<!--Header start-->
  <nav class="navbar navbar-expand-lg sticky-lg-top fs-5 " style="background-color:#c79ef0">
    <div class="container-fluid ">
      <a class="navbar-brand fs-5" href="#">Apartement-Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login</a>
          </li>
          <!-- <div class="right-nav">
    <input type="text" name="search" id="search">
    <button class="btn btn-sm" style="font-size:15px; border: 1px solid white; border-radius: 3px; background: none; color:white; padding: 5px;">Search</button>
</div>-->
      </div>
    </div>
    <form class="d-flex ">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>
  </nav>
  <!--Header closed-->

