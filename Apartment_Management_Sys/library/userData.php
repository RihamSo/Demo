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

  function get($userId) {
    global $conn;
    $sql= "SELECT * FROM user WHERE uId='".$userId."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
  }

  function listUser() {
    global $conn;
    $sql="SELECT * FROM `user`  ";
    $result = $conn->query($sql);
    return $result;
  }
 
  function add($fistName,$lastName,$email,$password,$userRid,$createdBY,$userAptid) {
    global $conn;
    $cvalue=$createdBY;
    //Get data from add.php file that is in user folder.
    $sql="INSERT INTO user(`firstName`,`lastName`,`email`,`password`,`rId`,`createdBy`,`aptId`) VALUES('$fistName','$lastName','$email','$password','$userRid','$cvalue',' $userAptid')";
    $result=$conn->query($sql);
    if($result){
      $sql="SELECT uId FROM user WHERE email = '".$email."' AND password = '".$password."'";
      $row=$conn->query($sql);
      $id = mysqli_fetch_assoc($row);
      return $id;
    } else {
      return false;
    }
  }

  function updateUser($id,$userFname,$userLname,$userAptNo,$UpdatedByPerson) {
    global $conn;
    // if (isset($_SESSION['email']) &&  isset($_SESSION['passW']) ) {
    //   $e = $_SESSION['email'];
    //   $p = $_SESSION['passW'];
    // } 
    $sql="UPDATE  user SET firstName='".$userFname."' , lastName='".$userLname."',aptId='".$userAptNo."' ,updatedBy='".$UpdatedByPerson."' WHERE uId = '".$id."'";
    $uData=$conn->query($sql);
    if($uData) {
      return true;
    } else {
      return false;
    }
  } 

  function userDelete($uId){
    global $conn;
    $sql="DELETE FROM user WHERE uId='".$uId."'";
    $result=$conn->query($sql);
    if($result) {
        return true;
    } else {
        return false;
    }
}
 function userToChairperson($uId){
  global $conn;
  $sql="UPDATE  user SET rId=3  WHERE uId = '".$uId."'";
  $result=$conn->query($sql);
    if($result) {
        return true;
    } else {
        return false;
    }

 }

 function chairpersonToUser($uId){
  global $conn;
  $sql="UPDATE  user SET rId=2  WHERE uId = '".$uId."'";
  $result=$conn->query($sql);
    if($result) {
        return true;
    } else {
        return false;
    }
 }
}
?>