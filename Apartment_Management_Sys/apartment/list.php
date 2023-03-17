<?php
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
$result=$apt->listApt();
if(isset($_POST['update'])){
    header('location:edit.php');
}
if(isset($_POST['delete'])){
    header('location:delete.php');
}
if(isset($_POST['add'])){
    echo "he";
    header('location:add.php');
}
if(isset($_POST['getApt'])){
    echo "he";
    header('location:detail.php');
}
?>

<
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
    <th>Operations</th>
</tr>
</thead>
<?php while ($row = $result -> fetch_array(MYSQLI_NUM)){?>
<tr class="table-secondary">
     <td><?php echo $row[0] ?></td>
     <td><?php echo $row[1] ?></td>
     <td><?php echo $row[2] ?></td>
     <td><?php echo $row[3] ?></td>
     <td><?php echo $row[4] ?></td>
     <td><?php echo $row[5] ?></td>
     <td><?php echo $row[6] ?></td>
     <td><?php echo $row[7] ?></td>
     <td> 
        <form action="" method="POST">
            <button type="submit" class="btn btn-dark " name="update">Update</button><button type="submit"  class="btn btn-dark mx-3" name="delete">Delete</button>
        </form>
    </td>

</tr>
<?php } ?>

</table>
</div>
