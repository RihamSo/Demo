<?php
session_start();
include('./public/meta.php');
include('./protected/header.php');
if ( isset($_POST['submit']) ) { 
    $id=$_POST['id'];
    $row=$user->get($id);
}
?>

<h4>
<form action="" method="POST" class="id-form text-center" >
<div class="row g-3 align-items-center text-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">User ID:</label>
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

 <h4><table class="table table-bordered">
<thead class="thead-dark">
<tr >
    <th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Apt Id</th>
</tr>
</thead>
<?php if ( isset($_POST['submit']) ) { ?>
<tr class="table-success">
<td><?php echo $row["uId"]; ?></td>
     <td><?php echo $row["firstName"]; ?></td>
     <td><?php echo $row["lastName"]; ?></td>
     <td><?php echo $row["email"]; ?></td>
     <td><?php echo $row["password"]; ?></td>
     <td><?php echo $row['aptId']; ?></td>
     
</tr>
<?php }?>
</table></h4>  