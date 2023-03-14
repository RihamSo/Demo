<?php

 include('./public/meta.php');
 include('./public/header.php');
 $err="";
 
 if (isset($_POST['submit'])){
  $userEmail = $_POST['email'];
  $userPassword = $_POST['password'];
  
 if (empty($userEmail) || empty($userPassword)) {
    $err="incomplete Credentials";
  } else {
    $isValidCredential= $auth->login($userEmail,$userPassword);
    if ($isValidCredential) {
    session_start(); 
    $_SESSION['email'] = $userEmail;
    $_SESSION['passW'] = $userPassword;              
      header('Location: dashboard.php');
    } else {
      $err="incorrect credentials";
    }
  }
}
?>
<!--Body Start-->
<section class="vh-100 ">
    <div class="container-fluid h-custom ">
      <div class="row d-flex justify-content-center align-items-center h-100 form-div ">
       
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 login-div fbg">
          <form class="form-floating mb-3 fbg " action="" method="POST">
            <h2>Login</h2>

            <!-- Email input -->
            <div class="form-outline mb-4 form-floating mb-3 br">
              <input type="email" id="form3Example3" class="form-control form-control-lg "
                placeholder="Enter a valid email address" name="email" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3 form-floating mb-3 br">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" name="password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="forgotpassword.php" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center btnclass">
              <input type="submit" name="submit" class="btn btn-primary btn-lg "
                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login" >
                 <?php echo $err ? '<span class="error">'.$err.'</span>':'';?>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                  class="link-danger">Register</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!--Body Closed-->
<?php
 
 include('./public/footer.php');
 
?>