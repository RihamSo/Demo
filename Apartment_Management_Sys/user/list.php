<?php
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
$result=$user->listUser();

if(isset($_POST['add'])){
    echo "he";
    header('location:add.php');
}
if(isset($_POST['getApt'])){
    echo "he";
    header('location:detail.php');
}
?>

<h5>
<div class="container">   
<div class="d-grid d-md-flex justify-content-md-end bdiv">
    <form method="POST" action="">
<button type="submit" class="btn btn-dark addbtn" name="add">ADD NEW USER</button>
<button type="submit" class="btn btn-dark addbtn" name="getApt">GET USER</button></form>
</div> 
<table class="table table-bordered">
<thead class="thead-dark">
<tr class="table-dark">
    <th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Dept Id</th>
    <th>Updated By</th>
    <th>Created By</th>
    <th>Operations</th>
    <th>Chairperson</th>
</tr>
</thead>

<?php  while($row = mysqli_fetch_assoc($result)){?>
<tr class="table-success">
<td><?php echo $row["uId"]; ?></td>
     <td><?php echo $row["firstName"]; ?></td>
     <td><?php echo $row["lastName"]; ?></td>
     <td><?php echo $row["email"]; ?></td>
     <td><?php echo $row["password"]; ?></td>
     <td><?php echo $row['aptId']; ?></td>
     <td><?php echo $row['updatedBy']; ?></td>
     <td><?php echo $row['createdBy']; ?></td>
     <td>
        <form action="" method="POST">
        <a href="edit.php?id=<?php echo $row["uId"] ?>"><input type="button"  class="btn btn-dark " name="update" value="Update"/></a> 
        <a href="delete.php?id=<?php echo $row["uId"] ?>"><input type="button"  class="btn btn-dark " name="delete" value="Delete"/></a>  
   
    </td>
    <td>
    <a href="chairpersonOption.php?id=<?php echo $row["uId"] ?>">Select as Chairperson</a>
                                        </form></td>
</tr>
<?php } ?>

</table>
</div>
</h5>