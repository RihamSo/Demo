<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');

$aptId=$_GET['aptId'];
global $conn;
      $sql="SELECT aptName FROM apartment WHERE aptId='".$aptId."'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_assoc($result);
      $aptName=$row['aptName'];
$err="";
if(isset($_POST['listNotes'])) {
	header('location:chairpersonAptNoteList.php?apartment_name='.$aptName);
}
if(isset($_SESSION['email']) &&  isset($_SESSION['passW'])) {
    $e = $_SESSION['email'];
    $p = $_SESSION['passW'];
    if(isset($_POST['addNote'])) {
        if( !empty($_POST['info']) ) {
			$nData=$_POST['info'];
            global $conn;
            $sql="SELECT firstName from user WHERE email='".$e."' AND password='".$p."'";
			    $result = $conn->query($sql);
                $resultArray= mysqli_fetch_assoc($result);
			    $createdByPerson=$resultArray['firstName'];
  
                $result=$note->addNoteToChairpersonApt($nData,$aptId,$createdByPerson); 
               if($result) {
                  $err="added note successfully for note id".$result['nId'];
                } else {
                $err="not added";
                }
                } else {
                  $err="please fill all fields";
                }
        }
 }
?>

<form action="" method="POST" class="id-form text-center" >
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Notes</h6>
									<a href="../adminDashboard.php"><span class="text-secondary"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="container my-3 text-center">
					<div class="card">
						<div class="card-body">
							
                                <textarea id="w3review" name="info" rows="10" cols="120" class="form-control">
                                                        hello
                                 </textarea>
								</div>
							</div>
                            
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
	                              <input type="submit" name= "listNotes" class="btn btn-primary px-4" value="see all Notes">
									<input type="submit" name= "addNote" class="btn btn-primary px-4" value="Create Notes">
                                      <?php echo $err ? '<span class="error">'.$err.'</span>':'';?> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
<?php if (isset($_POST['addNote'])) { ?>
	<?php if($result) { ?>
  <div class="card  text-center text-white bg-success mb-8" style="max-width: 540px;">
  <div class="card-body">
    <h5 class="card-title text-white"><?php echo  $aptName;?></h5>
    <h6 class="card-subtitle mb-2 text-white"><?php echo "Created By  ".$result['createdBy'] ."   At :".$result['createdAt'];?></h6>
    <p class="card-text text-white"><?php echo $result['nData'];?></p>
    <form action="" method="POST">
        <a href="edit.php?id=<?php echo $result["nId"] ?>"><input type="button"  class="btn btn-primary " name="update" value="Update"/></a> 
        <a href="delete.php?id=<?php echo $result["nId"] ?>"><input type="button"  class="btn btn-primary " name="delete" value="Delete"/></a>  
    </form>
  </div>
</div>
<?php } ?>
<?php } ?>
    