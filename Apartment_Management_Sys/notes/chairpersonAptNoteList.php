<?php
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');
if(isset($_GET['apartment_name']) && $_GET['apartment_name']!=''){
    $aName=$_GET['apartment_name'];
    $result=$note->listNotes($aName);
}

?>
 <div class="col-lg-8 text-center">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Apartment <?php echo $aName; ?></h6>
								</div>
					
</div>
</div>
</div>

<div class="container maindiv">

<?php  while($row = mysqli_fetch_assoc($result)){?>
    <div class="card-group row">
    <div class="card   text-dark bg-info mb-4 col-lg-6">
  <div class="card-body">
    <h5 class="card-title text-dark"><?php echo $aName;?></h5>
    <h6 class="card-subtitle mb-2 text-dark"><?php echo "Created By  ".$row['createdBy'] ."   At :".$row['createdAt']."  <br> Updated By:".$row['updatedBy']."   Updated At: ".$row['updatedAt'];?></h6>
    <p class="card-text text-dark"><?php echo $row['nData'];?></p>
    <form action="" method="POST">
        <a href="edit.php?id=<?php echo $row["nId"] ?>"><input type="button"  class="btn btn-warning " name="update" value="Update"/></a> 
        <a href="delete.php?id=<?php echo $row["nId"] ?>"><input type="button"  class="btn btn-danger " name="delete" value="Delete"/></a>  
    </form>
  </div>
</div>
</div>
       
<?php } ?>
</div>
