<?php
error_reporting(E_ERROR | E_PARSE);
class Note { 


    function addNote($nData,$aname,$createdByPerson) {
      global $conn;
      $sql="SELECT aptId FROM apartment WHERE aptName='".$aname."'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      $aptId=$row['aptId'];
      $sql="INSERT INTO notes (`aptId`,`createdBy`,`nData`) VALUES('".$aptId."','".$createdByPerson."','".$nData."')";
      $result = $conn->query($sql);
      if($result) {
       $sql= "SELECT * FROM notes  WHERE aptId = '".$aptId."' ORDER BY nId DESC LIMIT 1";
        $result=$conn->query($sql);
        $row = mysqli_fetch_assoc($result);
      return $row;
      } else {
        return false;
      }
    }

    function addNoteToChairpersonApt($nData,$aptId,$createdByPerson){
      global $conn;
      $sql="INSERT INTO notes (`aptId`,`createdBy`,`nData`) VALUES('".$aptId."','".$createdByPerson."','".$nData."')";
      $result = $conn->query($sql);
      if($result) {
       $sql= "SELECT * FROM notes  WHERE aptId = '".$aptId."' ORDER BY nId DESC LIMIT 1";
        $result=$conn->query($sql);
        $row = mysqli_fetch_assoc($result);
      return $row;
      } else {
        return false;
      }
    }

    function listNotes($aptName) {
      global $conn;
      $sql= "SELECT aptId FROM apartment  WHERE aptName = '".$aptName."'";
        $result=$conn->query($sql);
        $result = mysqli_fetch_assoc($result);
        $aptId=$result['aptId'];
        $sql="SELECT * FROM notes  WHERE aptId = '".$aptId."'";
        $result = $conn->query($sql);
        return $result;
      } 
      

    

    function deleteNote($nId) {
      global $conn;
      $sql="DELETE FROM notes WHERE nId='".$nId."'";
      $result=$conn->query($sql);
      if($result) {
          return true;
      } else {
          return false;
      }

    }

    function updateNote($nId,$nData,$UpdatedByPerson) {
      global $conn;
      $sql="UPDATE  notes SET nData='".$nData."' ,updatedBy='".$UpdatedByPerson."' WHERE nId = '".$nId."'";
      $aData=$conn->query($sql);
      if($aData) {
       return true;
      } else {
       return false;
      }

    }
}

?>