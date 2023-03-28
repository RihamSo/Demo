<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/projects/srs-b4-Intern-2/Apartment_Management_Sys/protected/header.php');
$nId=$_GET['id'];
$err="";
if (isset($_SESSION['email']) &&  isset($_SESSION['passW'])) {
     $e = $_SESSION['email'];
     $p = $_SESSION['passW'];

     $sql="SELECT * FROM  notes  WHERE nId = '".$nId."'";
     $result = $conn->query($sql);
     $row = mysqli_fetch_assoc($result);

     if ( isset($_POST['updateNote']) ) { 
        if(!empty($_POST['info'])){
			$nData = $_POST['info'];
           

			$sql="SELECT firstName from user WHERE email='".$e."' AND password='".$p."'";
			$result = $conn->query($sql);
            $resultArray= mysqli_fetch_assoc($result);

			$UpdatedByPerson=$resultArray['firstName'];
            $resultFromFunc=$note->updateNote($nId,$nData,$UpdatedByPerson);
            if ($resultFromFunc){
				$sql="SELECT * FROM  notes  WHERE nId = '".$nId."'";
				$result = $conn->query($sql);
				$row = mysqli_fetch_assoc($result);
                $err="Updated Successfully of Note Id".$row['nId'];
            } 
		} else {
           $err="Please Fill All Fields";
        }
     }
   } 
?> 

<form action="" method="POST" class="id-form text-center" >
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Notes</h6>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
                <!-- <div class="col-lg-8 text-center">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Apartment Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="" name="aname">
								</div>
							</div>
</div>
</div>
</div> -->
				<div class="container my-3 text-center">
					<div class="card">
						<div class="card-body">
							
                                <textarea id="w3review" name="info" rows="10" cols="120" class="form-control">
<?php echo $row['nData'];?>
</textarea>
								</div>
								
							</div>
                            
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
								<!-- <input type="submit" name= "listNotes" class="btn btn-primary px-4" value="See All Notes"> -->
									<input type="submit" name= "updateNote" class="btn btn-primary px-4" value="Update Notes">
                                      <?php echo $err ? '<span class="error">'.$err.'</span>':'';?> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 