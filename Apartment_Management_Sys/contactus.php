<?php
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/public/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys//public/header.php');

?>
<!--Body Start-->
<section class="vh-100 ">
    <div class="container-fluid h-custom ">
      <div class="row d-flex justify-content-center align-items-center h-100 form-div ">
       
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 login-div fbg">
          <form class="form-floating mb-3 fbg " action="" method="POST">
            <h2>Contact Us</h2>

            <div class="form-outline mb-4 form-floating mb-3 br">
              <input type="text" id="form3Example3" class="form-control form-control-lg "
                placeholder="Enter a valid email address" name="email" />
              <label class="form-label" for="form3Example3">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4 form-floating mb-3 br">
              <input type="email" id="form3Example3" class="form-control form-control-lg "
                placeholder="Enter a valid email address" name="email" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3 form-floating mb-3 br">
            <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Message</label>
</div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
               
                <!-- <br><a href="chairpersonOption.php" class="text-body">Want to Be a Chairperson?</a> -->
              </div>
              
            
             
            </div>

            <div class="text-center btnclass">
              <input type="submit" name="submit" class="btn btn-primary btn-lg "
                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Submit" >
                
                 
            
                  
            </div>

          </form>
        </div>
      </div>
    </div>
    <!--Body Closed-->
<?php
 
 include('./public/footer.php');
 
?>