<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studant";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

//$sql = "CREATE DATABASE Studant";


//sql to create table
// $sql = "CREATE TABLE Student1 (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// class VARCHAR(10),
// email VARCHAR(50),
// Address VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

$sql="INSERT INTO Student1(id,firstname,lastname,class,email,Address) VALUES( '2','Pranali','Hire','YY','pranalihire55@gmail.com','Pune')";
//$sql="ALTER TABLE Student1 DROP COLUMN reg_date";

if ($conn->query($sql) === TRUE) {
  echo "insert data into Student1  successfully";
} else {
  echo "Error : " . $conn->error;
}

$conn->close();
?>