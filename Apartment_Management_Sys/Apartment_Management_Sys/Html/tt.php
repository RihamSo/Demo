<?php

class Auth{
  
    public $isloggedIn = false;

     public $userEmail="12fdgfhgf";
     public $userPassword="12fdgfhgf";
    function login(){
      
      global $conn;

      if (empty($userEmail) || empty($userPassword)) {
        return FALSE;
      }

      //$sql =  "SELECT * FROM user WHERE email = '".$userEmail."' AND password = '".$userPassword."'";
      //$sql=" SELECT uId FROM user WHERE firstName = '".$userName."' AND password ='".$userpassword."' ";

      $result = $conn->query($sql);

      if ($result) {
        // Return the number of rows in result set
        $rowCount = mysqli_num_rows($result);
        

        if ($rowCount==1) {
          //$row = mysqli_fetch_assoc($result);
          
          return true;
          
         
          //printf("%s\n", $row["uId"]);

        } else {
          return false;
        }
      } else {
        return false;
      }

      // Free result set
      mysqli_free_result($result);

    }
  }

class User{
 
  // public $email,$password;
  //  function __construct($userEmail,$userPassword){
  //    $this->email = $userEmail;
  //    $this->password = $userPassword;
    
   

  function get_User_Data(){
     $userDetail=new Auth();
     echo $userDetail->userEmail;
    //$sql =  "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."'";
    //echo $spl;
    //$result = $conn->query($sql);
    //$userDetails = mysqli_fetch_assoc($result);    
    //printf("%s \n", $userDetails["firstName"],"%s",$userDetails["lastName"]);
  }
}
  $e= new User();
  $e->get_User_Data();
?>

