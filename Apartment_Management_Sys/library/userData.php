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

  function get($userId){
    $conn = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD,DBNAME);
    $sql= "SELECT * FROM user WHERE uId='".$userId."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    //print_r( $row);
    return $row;
  }

  function listUser() {
    $conn = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD,DBNAME);
    $sql="SELECT * FROM `user`";
    $result = $conn->query($sql);
    //$row = mysqli_fetch_assoc($result);
    return $result;
  }
 
  function add($fistName,$lastName,$email,$password,$userRid,$createdBY,$userAptid){
    //echo "here==".$createdBY;
    $cvalue=$createdBY;
    $conn = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD,DBNAME);
    $sql="INSERT INTO user(`firstName`,`lastName`,`email`,`password`,`rId`,`createdBy`,`aptId`) VALUES('$fistName','$lastName','$email','$password','$userRid','$cvalue',' $userAptid')";
    $result=$conn->query($sql);
    //echo "Added successfully";
    if($result){
      return true;
    } else {
      return false;
    }
  }
}
?>