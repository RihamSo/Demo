<?php

class User{
    
    function get_User_Data(){
      global $conn;
      if (isset($_SESSION['email']) &&  isset($_SESSION['passW']) ) {
        $e = $_SESSION['email'];
        $p = $_SESSION['passW'];
      } 
      $sql =  "SELECT * FROM user WHERE email = '".$e."' AND password = '".$p."'";
      
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
  }

  function get($userId){
    global $conn;
    $sql= "SELECT * FROM user WHERE uId='".$userId."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  }

  function listUser() {
    global $conn;
    $sql="SELECT * FROM `user`";
    $result = $conn->query($sql);
    return $result;
  }
 
  function add($fistName,$lastName,$email,$password,$userRid,$createdBY,$userAptid){
    $cvalue=$createdBY;
    global $conn;
    $sql="INSERT INTO user(`firstName`,`lastName`,`email`,`password`,`rId`,`createdBy`,`aptId`) VALUES('$fistName','$lastName','$email','$password','$userRid','$cvalue',' $userAptid')";
    $result=$conn->query($sql);
    if($result){
      return true;
    } else {
      return false;
    }
  }
}
?>