<?php
//include(PROJECT_ROOT.'public/meta.php');
//include(PROJECT_ROOT.'protected/header.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
$result=$user->listUser();
?>

<h4>
<div class="container">    
<table class="table table-bordered">
<thead class="thead-dark">
<tr class="table-dark">
    <th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Dept Id</th>
</tr>
</thead>
<?php while ($row = $result -> fetch_array(MYSQLI_NUM)){?>
<tr class="table-success">
     <td><?php echo $row[0] ?></td>
     <td><?php echo $row[1] ?></td>
     <td><?php echo $row[2] ?></td>
     <td><?php echo $row[3] ?></td>
     <td><?php echo $row[4] ?></td>
     <td><?php echo $row[11] ?></td>
</tr>
<?php } ?>

</table>
</div>
</h4>