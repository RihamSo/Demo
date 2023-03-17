
<?php
// do php stuff
//session_start(); 
// include('../Html/navbar.html');
include($_SERVER['DOCUMENT_ROOT'].'/Riham/Apartment_Management_Sys/includes/constants.php');
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
            <a class="nav-link active" aria-current="page" href="navbar.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#login">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Features
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action1</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
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

