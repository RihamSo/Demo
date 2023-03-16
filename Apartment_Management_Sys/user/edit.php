<?php
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/Riham/Apartment_Management_Sys/protected/header.php');
$err="";
if (isset($_SESSION['email']) &&  isset($_SESSION['passW'])) {
    $e = $_SESSION['email'];
    $p = $_SESSION['passW'];
     $sql="SELECT * FROM  user  WHERE email = '".$e."' AND password = '".$p."'";
     $result = $conn->query($sql);
     $row = mysqli_fetch_assoc($result);
     if ( isset($_POST['submit']) ) { 
        if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['aptno'])){
            $err= "Please Fill all Fields";
        } else {
            $userFname = $_POST['fname'];
            $userLname = $_POST['lname'];
            $userAptNo = $_POST['aptno'];
            $result=$user->updateUser($userFname,$userLname,$userAptNo);
            if ($result){
                $err="Updated Successfully of User Id".$row['uId'];
            }
        }
     }
   } 
?>


<form action="" method="POST" class="id-form text-center" >
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">First Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $row ? $row['firstName']:'';?>" name='fname'>
								</div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Last Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $row ? $row['lastName']:'';?>" name='lname'>
								</div>
							</div>
							<!-- <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" class="form-control" value="john@example.com" name='email'>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="*********" name='pass'>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Confirm Pass</h6>
								</div> -->
								<!-- <div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="*********" name='cpass'>
								</div>
							</div> -->
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Apartment No</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="number" class="form-control" value="<?php echo $row ? $row['aptId']:'';?>" name='aptno'>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" name= "submit" class="btn btn-primary px-4" value="Save Changes">
                                    <?php echo $err ? '<span class="error">'.$err.'</span>':'';?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Project Status</h5>
									<p>Web Design</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Website Markup</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>One Page</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Mobile Template</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Backend API</p>
									<div class="progress" style="height: 5px">
										<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>