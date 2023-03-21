<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
if ( isset($_POST['submit']) ) { 
    $id=$_POST['id'];
    $row=$apt->getApt($id);
}

?>

<h4>
<form action="" method="POST" class="id-form text-center" >
<div class="row g-3 align-items-center text-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Apartment ID:</label>
  </div>
  <div class="col-auto">
    <input type="number" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="id">
  </div>
  <div class="col-auto">
    
  </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary ">Find</button> 
 </form>
</h4>

 <h4>
  <div class="container">
  <table class="table table-bordered ">
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
<?php if ( isset($_POST['submit']) ) { ?>
<tr class="table-secondary">
<td><?php echo $row["aptId"]; ?></td>
     <td><?php echo $row["aptName"]; ?></td>
     <td><?php echo $row["aptAddress"]; ?></td>
     <td><?php echo $row["aptCity"]; ?></td>
     <td><?php echo $row["aptState"]; ?></td>
     <td><?php echo $row['aptCountry']; ?></td>
     <td><?php echo $row['aptChairPerson_Id']; ?></td>
     <td><?php echo $row['createdBy']; ?></td>
     <td>
      <form method="POST" action="">
      <a href="edit.php?id=<?php echo $row["aptId"] ?>"><input type="button"  class="btn btn-dark " name="update" value="Update"/></a> 
      <a href="delete.php?id=<?php echo $row["aptId"] ?>"><input type="button"  class="btn btn-dark " name="delete" value="Delete"/></a>      </form>
    </td>
     
</tr>
<?php }?>
</table>
</div>
</h4> 