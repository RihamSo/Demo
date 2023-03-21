<?php
class Apt { 
    function addApt($aName,$aAddress,$aCity,$aState,$aCountry,$aChairPersonId,$admin) {
        global $conn;
    //Get data from add.php file that is in user folder.
     $sql="INSERT INTO apartment(`aptName`,`aptAddress`,`aptCity`,`aptState`,`aptCountry`,`aptChairPerson_Id`,`createdBy`) VALUES('$aName','$aAddress','$aCity','$aState','$aCountry','$aChairPersonId','$admin')";
     $result=$conn->query($sql);
     if($result){
      $sql="SELECT aptId FROM apartment WHERE aptName = '".$aName."'";
      $row=$conn->query($sql);
      $id = mysqli_fetch_assoc($row);
      return $id;
    } else {
      return false;
    }
    
    }

    function getApt($aptId) {
        global $conn;
        $sql= "SELECT * FROM apartment WHERE aptId='".$aptId."'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function listApt() {
        global $conn;
        $sql="SELECT * FROM `apartment` ORDER BY aptId";
        $result = $conn->query($sql);
        return $result;
    }

    function updateApt($aptId,$aName,$aAddress,$aCity,$aptState,$aptCountry,$chairPersonId,$UpdatedByPerson) {
        global $conn;
        $sql="UPDATE  apartment SET aptName='".$aName."' , aptAddress='".$aAddress."', aptCity='".$aCity."',aptState='".$aptState."',aptCountry='".$aptCountry."',aptChairPerson_Id='".$chairPersonId."',updatedBy='".$UpdatedByPerson."' WHERE aptId = '".$aptId."'";
        $aData=$conn->query($sql);
        if($aData) {
         return true;
        } else {
         return false;
        }
  
    }

    function aptDelete($aId){
        global $conn;
        $sql="DELETE FROM apartment WHERE aptId='".$aId."'";
        $result=$conn->query($sql);
        if($result) {
            return true;
        } else {
            return false;
        }
    }

}


?>