<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');

$nId=$_GET['id'];
 $result=$note->deleteNote($nId);
 if($result){
    echo "deleted";
 } else {
    echo "not deleted";
 }
?>