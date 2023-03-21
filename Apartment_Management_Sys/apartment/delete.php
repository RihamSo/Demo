<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');

$aId=$_GET['id'];
 $result=$apt->aptDelete($aId);
 if($result){
    echo "deleted";
 } else {
    echo "not deleted";
 }
?>