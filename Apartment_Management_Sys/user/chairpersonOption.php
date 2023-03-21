<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
$uId=$_GET['id'];
$err="";
if(isset($_POST['submit'])) {
 
    $answer = $_POST['radio'];  
    if ($answer == "yes") {          
     $result=$user->userToChairperson($uId); 
     if($result) {
        $err="Updated as Chairperson for user Id: ".$uId;
    } else {
        $err="Not Updated";
    }     
    } 
    else {
        $result=$user->chairpersonToUser($uId); 
        if($result) {
            $err="Updated as User for user Id: ".$uId;
        } else {
            $err="Not Updated";
        }     
    } 
}   
?>

<div class="col-lg-8 text-center">
   <h3>Want To Be a ChairPerson....</h3>
         <form action="" method="POST">
                    <div class="card text-center">
						<div class="card-body text-center">
                            <div class="row mb-3 text-center">
								<div class="col-sm-9 text-secondary ">
                             <h3> <div class="form-check text-center">
   
                                      <input class="form-check-input " type="radio" name="radio" id="flexRadioDefault1" value="yes">
                                        <label class="form-check-label   " for="flexRadioDefault1">
                                         Yes
                                         </label>
                                     </div>
                                   <div class="form-check ">
                                       <input class="form-check-input " type="radio" name="radio" id="flexRadioDefault2" value="no" >
                                        <label class="form-check-label " for="flexRadioDefault2">
                                           No
                                        </label>
                                    </div>
                                    <br><div class="col-sm-9 text-secondary">
									<input type="submit" name= "submit" class="btn btn-primary px-4" value="Save">
                                    <h5><?php echo $err ? '<span class="error">'.$err.'</span>':'';?> </h5>   
                                </div>
								</div>
							</div>
                        </div>
                </div>
        </form>
</div>