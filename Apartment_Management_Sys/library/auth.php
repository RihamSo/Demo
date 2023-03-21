 <?php

class Auth{
  
    public $isloggedIn = false,$email,$pass;

    function login($userEmail, $userPassword){
      $this->email=$userEmail;
      $this->pass=$userPassword;

      global $conn;

      if (empty($userEmail) || empty($userPassword)) {
        return FALSE;
      }

      $sql =  "SELECT * FROM user WHERE email = '".$userEmail."' AND password = '".$userPassword."'";
      //$sql=" SELECT uId FROM user WHERE firstName = '".$userName."' AND password ='".$userpassword."' ";

      $result = $conn->query($sql);

      if ($result) {
        // Return the number of rows in result set
        $rowCount = mysqli_num_rows($result);
        

        if ($rowCount==1) {
          
          return true;
          

        } else {
          return false;
        }
      } else {
        return false;
      }

      // Free result set
      mysqli_free_result($result);

    }

    function checkingUser($userEmail, $userPassword) {
      global $conn;
      $sql =  "SELECT r.rLabel FROM role as r JOIN user as u ON r.rId=u.rId WHERE u.email = '".$userEmail."' AND u.password = '".$userPassword."'" ;
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
  }
  
  
  }
?> 