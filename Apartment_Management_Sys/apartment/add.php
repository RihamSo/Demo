<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');
if (isset($_SESSION['email']) &&  isset($_SESSION['passW']) ) {
   $m="";
    $e = $_SESSION['email'];
    $p = $_SESSION['passW'];
  } else {
    die('$'."_SESSION['word'] isn't set because you had never been at file one");
  }
  
 
    if ( isset($_POST['submit']) ) { 
        $sql =  "SELECT r.rLabel FROM role as r JOIN user as u ON r.rId=u.rId WHERE u.email = '".$e."' AND u.password = '".$p."'" ;
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        if ( ($row['rLabel']=="Admin")) {

            $aName = $_POST['aName'];
            $aAddress = $_POST['aAddress'];
            $aCity = $_POST['aCity'];
            $aState = $_POST['aState'];
            $aCountry = $_POST['aCountry'];
            $aChairPersonId = $_POST['aChairPersonId'];
            $sql="SELECT firstName FROM  user  WHERE email = '".$e."' AND password = '".$p."'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            $createdBy=$row['firstName']; 
            $admin=$createdBy;
            //echo $admin;
            // $userAptid = $_POST['aptid'];
            $r=$apt->addApt($aName,$aAddress,$aCity,$aState,$aCountry,$aChairPersonId,$admin);
            if ($r){
              $m="Added Successfully Record On ".$r['aptId']."User Id";
            }
    } else {
        $m="You have no permission to add user.";
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
                      placeholder="Enter Apartment Name" name="aName" />
                    <label class="form-label" for="form3Example3">Apartment Name</label>
                    </div>

                  <div class="form-outline mb-4 form-floating mb-3 ">
                    <input type="text" id="form3Example3" class="form-control form-control-lg "
                      placeholder="Enter Apartment Address" name="aAddress" />
                    <label class="form-label" for="form3Example3">Apartment Address</label>
                  </div>
                <!-- Email input -->
                <div class="form-outline mb-4 form-floating mb-3 ">
                  <input type="text" id="form3Example3" class="form-control form-control-lg "
                    placeholder="Enter Apartment City" name="aCity" />
                  <label class="form-label" for="form3Example3">Apartment City</label>
                 
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3 form-floating mb-3 ">
                  <input type="text" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter state" name="aState" />
                  <label class="form-label" for="form3Example4">Apartment State</label>
                </div>

            
                <div class="form-outline mb-3 form-floating mb-3 ">
                  <input type="text" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter country" name="aCountry" />
                  <label class="form-label" for="form3Example4">Apartment Country</label>
                </div>

                <div class="form-outline mb-3 form-floating mb-3 ">
                  <input type="number" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter chairperson id" name="aChairPersonId" />
                  <label class="form-label" for="form3Example4">Apartment Chaiperson Id</label>
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