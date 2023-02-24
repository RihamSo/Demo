

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
    <style>
        .error {
            color: #FF0000;
        }
        
    </style>
  </head>
  <body>
  <?php
               $nameErr = $emailErr = $passErr = $rpassErr =$phoneErr= "";
        //require "db.inc.php";
        if((isset($_POST['submit'])) && ($_SERVER["REQUEST_METHOD"] == "POST")){
    
            $name = $_POST["name"];
        $phone= $_POST["phone"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $re_pass = $_POST["re_pass"];


        //Server side validation//
        if(empty($pass) && empty($name) && empty($phone) && empty($email) 
        && empty($pass) && empty($re_pass) ){
        
                // header("location: ../register.php?error=AllInputsEmpty");
                $nameErr = "Name is required";
            //exit();
        }
        if(empty($name)){
            $nameErr = "Name is required";
            echo $nameErr;
            //exit();
        }
        if(empty($phone)){
            //header("location: ../register.php?error=EmptyPhone");
            $phoneErr = "Phone number is required";
            //exit();
        }
        if(empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
                //header("location: ../register.php?error=EmptyEmail");
                $emailErr = "Email is required";
                //exit();
        }
        if(empty($pass)){
            //header("location: ../register.php?error=EmptyPass");
            $passErr = "password is required";
            //exit();
        }
        if(empty($re_pass)){
            //header("location: ../register.php?error=EmptyRe_pass");
            $rpassErr = " Please re write password";
            //exit();
        }
    
        if($pass != $re_pass){
    
            $rpassErr = " Password is not matching";
            //exit();
        }
    
        // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //     $emailErr = "Invalid email";
        //     //header("location: ../register.php?error=InValidEmail");
        //     //exit();
        //}
        }
    
 ?>

    <section>

<!-- Bootstrap rows and columns  -->
    <div class="row justify-content-center my-5">
    
    	<div class="col-6">
        <p><span class="error">* required field</span></p>
    		<!-- create form -->
		  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		  	<!-- creating input fields inside html form -->
		  <div class="mb-3">
		     <label  class="form-label">Name</label><span class="error">* <?php echo $nameErr;?></span>
		     <input type="text" class="form-control" name="name">
             
      <br><br>
		  </div>
		  <div class="mb-3">
		    <label  class="form-label">Phone no</label><span class="error">* <?php echo $phoneErr;?></span>
		    <input type="text" class="form-control" name="phone" >
            
  <br><br>
		  </div>
		  <div class="mb-3">
		    <label  class="form-label">Email address</label><span class="error">* <?php echo $emailErr;?></span>
		    <input type="email" class="form-control" name="email">
            
  <br><br>
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label> <span class="error">* <?php echo $passErr;?></span>
		    <input type="password" class="form-control" name="password" >
           
  <br><br>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Repeat Password</label><span class="error">* <?php echo $rpassErr;?></span>
		    <input type="password" class="form-control" name="re_pass">
            
  <br><br>
		  </div>
		<!-- creating submit button -->
		  <button type="submit" class="btn btn-primary px-5" name="submit">
		  	Submit
		  </button>
	</form>
	<br>
		<!-- Generating alerts on repsonse to the server side validation-->
		
		</div>
	</div>	  
</div>
</section>
    
  </body>
</html>