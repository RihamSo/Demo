<?php
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
$result=$apt->listApt();

if(isset($_POST['add'])){
    echo "he";
    header('location:add.php');
}
if(isset($_POST['getApt'])){
    echo "he";
    header('location:detail.php');
}
?>


<div class="container maindiv">
<div class="d-grid d-md-flex justify-content-md-end bdiv">
    <form method="POST" action="">
<button type="submit" class="btn btn-dark addbtn" name="add">ADD NEW APARTMENT</button>
<button type="submit" class="btn btn-dark addbtn" name="getApt">GET APARTMENT</button></form>
</div>
<table class="table table-bordered rounded table-responsive ">
<thead class="thead-dark">
<tr class="table-dark">
    <th >ID</th>
    <th>Apt Name</th>
    <th>Apt Address</th>
    <th>Apt City</th>
    <th>Apt State</th>
    <th>Apt Country</th>
    <th>Apt ChairPerson Id</th>
    <th>Apt Created By</th>
    <th>Apt Updated By</th>
    <th>Operations</th>
</tr>
</thead>
<?php  while($row = mysqli_fetch_assoc($result)){?>
<tr class="table-secondary">
<td><?php echo $row["aptId"]; ?></td>
<td><?php echo $row["aptName"]; ?></td>
     <td><?php echo $row["aptAddress"]; ?></td>
     <td><?php echo $row["aptCity"]; ?></td>
     <td><?php echo $row["aptState"]; ?></td>
     <td><?php echo $row['aptCountry']; ?></td>
     <td><?php echo $row['aptChairPerson_Id']; ?></td>
     <td><?php echo $row['createdBy']; ?></td>
     <td><?php echo $row['updatedBy']; ?></td>
     <td>
        <form action="" method="POST">
        <a href="edit.php?id=<?php echo $row["aptId"] ?>"><input type="button"  class="btn btn-dark " name="update" value="Update"/></a> 
        <a href="delete.php?id=<?php echo $row["aptId"] ?>"><input type="button"  class="btn btn-dark " name="delete" value="Delete"/></a>  
    </form>
    </td>

</tr>
<?php } ?>

</table>
</div>
