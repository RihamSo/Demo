<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');
if(isset($_GET['aptId']) && $_GET['aptId']!=''){
    $aptId=$_GET['aptId'];
}
if (isset($_SESSION['email']) &&  isset($_SESSION['passW']) ) {
   $m="";
    $e = $_SESSION['email'];
    $p = $_SESSION['passW'];
  } else {
    die('$'."_SESSION['word'] isn't set because you had never been at file one");
  }
  
 
    if ( isset($_POST['submit']) ) { 
       if(!empty($_POST['fname'] &&!empty($_POST['lname']) &&!empty($_POST['email']) &&!empty($_POST['pass']) )) {

            $userFname = $_POST['fname'];
            $userLname = $_POST['lname'];
            $userEmail = $_POST['email'];
            $userPass = $_POST['pass'];
        
            $sql="SELECT firstName FROM  user  WHERE email = '".$e."' AND password = '".$p."'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            $createdBy=$row['firstName']; 
      
            $r=$user->addUserChairpersonApt($userFname,$userLname,$userEmail,$userPass,$createdBy, $aptId);
            if ($r){
              $m="Added Successfully Record On ".$r['uId']."User Id";
            }
    } else {
        $m="Please fill all Fields.";
     } 
  }

?>
<section class="vh-100 ">
    <div class="container-fluid h-custom ">
      <div class="row d-flex justify-content-center align-items-center h-100 form-div ">
       
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 login-div fbg">
            <form class="form-floating mb-3 fbg " action="" method="POST">
                    <div class="form-outline mb-4 form-floating mb-3 ">
                    <input type="text" id="form3Example3" class="form-control form-control-lg "
                      placeholder="Enter a valid email address" name="fname" />
                    <label class="form-label" for="form3Example3">First Name</label>
                    </div>

                  <div class="form-outline mb-4 form-floating mb-3 ">
                    <input type="text" id="form3Example3" class="form-control form-control-lg "
                      placeholder="Enter a valid email address" name="lname" />
                    <label class="form-label" for="form3Example3">Last Name</label>
                  </div>
                <!-- Email input -->
                <div class="form-outline mb-4 form-floating mb-3 ">
                  <input type="email" id="form3Example3" class="form-control form-control-lg "
                    placeholder="Enter a valid email address" name="email" />
                  <label class="form-label" for="form3Example3">Email address</label>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3 form-floating mb-3 ">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="pass" />
                  <label class="form-label" for="form3Example4">Password</label>
</div>
             
                  <div class="text-center btnclass">
                  <input type="submit" name="submit" class="btn btn-primary btn-lg "
                    style="padding-left: 2.5rem; padding-right: 2.5rem;"></button>
                    <?php echo $m ? '<span class="error">'.$m.'</span>':'';?>
               
                </div>
            </form>
        </div>
    </div>
</div>