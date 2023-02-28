<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//mysqli_select_db($con,"ajax_demo");
mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM Student1 WHERE id = '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>class</th>
<th>email</th>
<th>Address</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['class'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>