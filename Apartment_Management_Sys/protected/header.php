<?php
// do php stuff
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/includes/constants.php');

include(PROJECT_ROOT.'includes/database.php');
include(PROJECT_ROOT.'includes/config.php');
$home=$_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/home.php';
$logout=$_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/logout.php';
?>

<nav class="navbar navbar-expand-lg sticky-lg-top fs-5 " style="background-color:#af6fef">
    <div class="container-fluid ">
      <a class="navbar-brand fs-5" href="#">Apartement-Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="./logout.php">Logout</a>
          </li>
      </div>
    </div>
    <form class="d-flex ">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>
  </nav>