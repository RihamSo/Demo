<?php
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');

 if(isset($_POST['listNotes'])){
    $aName=$_POST['aname'];
    $result=$note->listNotes($aName);
} else {
    echo "not clickrd";
}

?>
 <div class="col-lg-8 text-center">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Apartment Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <form action="" method="POST">
									<input type="text" class="form-control" value="" name="aname">
								</div>
                                <div class="col-sm-9 text-secondary text-center">
								<button type="submit" name= "listNotes" class="btn btn-primary px-4" value="">List All Notes</button>
</form>
                                      
								</div>
							</div>
</div>
</div>
</div>
<?php if(isset($_POST['listNotes'])){?>
<div class="container maindiv">

<?php  while($row = mysqli_fetch_assoc($result)){?>
    <div class="card-group row">
    <div class="card   text-white bg-success mb-4 col-lg-6">
  <div class="card-body">
    <h5 class="card-title text-white"><?php echo $aName;?></h5>
    <h6 class="card-subtitle mb-2 text-white"><?php echo "Created By  ".$row['createdBy'] ."   At :".$row['createdAt']."  <br> Updated By:".$row['updatedBy']."   Updated At: ".$row['updatedAt'];?></h6>
    <p class="card-text text-white"><?php echo $row['nData'];?></p>
    <form action="" method="POST">
        <a href="edit.php?id=<?php echo $row["nId"] ?>"><input type="button"  class="btn btn-primary " name="update" value="Update"/></a> 
        <a href="delete.php?id=<?php echo $row["nId"] ?>"><input type="button"  class="btn btn-primary " name="delete" value="Delete"/></a>  
    </form>
  </div>
</div>
</div>
       
<?php } ?>

<!-- </table> -->
</div>
<?php } ?>
