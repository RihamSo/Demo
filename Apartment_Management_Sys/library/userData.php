<?php

class User{
    
    function get_User_Data(){
       $conn = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD,DBNAME);
       if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
      if (isset($_SESSION['email']) &&  isset($_SESSION['passW']) ) {
        $e = $_SESSION['email'];
        $p = $_SESSION['passW'];
      } else {
        die('$'."_SESSION['word'] isn't set because you had never been at file one");
      }

      $sql =  "SELECT * FROM user WHERE email = '".$e."' AND password = '".$p."'";
      
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
  }
}
?>