<?php
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');
$aptId=$_GET['aptId'];
$result=$user->chairPersonAptUserList($aptId);

if(isset($_POST['add'])){
    echo "he";
    header('location:chairpersonAptAddUser.php?aptId='.$aptId);
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
<button type="submit" class="btn btn-info addbtn" name="add">ADD NEW USER</button>
<button type="submit" class="btn btn-info addbtn" name="getApt">GET USER</button></form>
</div> 
<table class="table table-bordered">
<thead class="thead-dark">
<tr class="table-info">
    <th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Dept Id</th>
    <th>Updated By</th>
    <th>Created By</th>
    <th>Operations</th>
    
</tr>
</thead>

<?php  while($row = mysqli_fetch_assoc($result)){?>
<tr class="table-warning">
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
        <a href="edit.php?id=<?php echo $row["uId"] ?>"><input type="button"  class="btn btn-info " name="update" value="Update"/></a> 
        <a href="delete.php?id=<?php echo $row["uId"] ?>"><input type="button"  class="btn btn-info " name="delete" value="Delete"/></a>  
   <form>
    </td>

    
</tr>
<?php } ?>

</table>
</div>
</h5>