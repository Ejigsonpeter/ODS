<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>New Case</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/themify/css/themify.css" rel="stylesheet" type="text/css">

		<!-- Angular Tooltip Css -->
		<link href="assets/plugins/angular-tooltip/angular-tooltips.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/dist/css/glovia.css" rel="stylesheet">
		<link href="assets/dist/css/glovia-responsive.css" rel="stylesheet">

		<!-- Custom styles for Color -->
		<link id="jssDefault" rel="stylesheet" href="assets/dist/css/skins/default.css">
	</head>
<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$ipo  =  mysqli_escape_string($conn,$_POST['ipo']);
	$fileno  =  mysqli_escape_string($conn,$_POST['fileno']);
	$location  =  mysqli_escape_string($conn,$_POST['location']);
	$suspect  =  mysqli_escape_string($conn,$_POST['suspect']);
	$victim  =  mysqli_escape_string($conn,$_POST['victim']);
	$date  =  mysqli_escape_string($conn,$_POST['date']);
	$status  =  mysqli_escape_string($conn,$_POST['status']);
	$description  =  mysqli_escape_string($conn,$_POST['description']);
	$object  =  mysqli_escape_string($conn,$_POST['object']);
	$filepath = 'images/';
	copy($_FILES['upload']['tmp_name'], "".$filepath."".$_FILES['upload']['name']);
	$picture = ("".$filepath."".$_FILES['upload']['name']);

	//insert into database
	$sql =  "INSERT INTO case_file (fileno,investigatingofficer,casedescription,picture,object_detected,date,status,victim,suspect,location)VALUES(
							     '$fileno',
								 '$ipo',
								 '$description',
								 '$picture',
								 '$object',
								 '$date',
								 '$status',
								 '$victim',
								 '$suspect',
								 '$location')";
   $query = mysqli_query($conn,$sql);
   if ($query){
	echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Well done!</strong>successfull!!
	</div>';
   }
}


?>
	<body class="fixed-nav sticky-footer red-skin" id="page-top">
	
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			
			<!-- Start Header -->
			<header class="header-logo">
				<a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
				<a class="navbar-brand" href="#">Drone System</a>
			</header>
			<!-- End Header -->
			
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="ti-align-left"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarResponsive">
				 
				<!-- =============== Start Side Menu ============== -->
				<div class="navbar-side">
				  <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				  
				    <!-- Start Dashboard-->
						<li class="nav-item " data-toggle="tooltip" data-placement="right" title="Dashboard">
								<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Dashboard" data-parent="#exampleAccordion">
								<i class="ti ti-dashboard"></i>
								<span class="nav-link-text">Dashboard</span>
								</a>
								<ul class="sidenav-second-level collapse" id="Dashboard">
								<li>
									<a href="dashboard.php">Dashboard</a>
								</li>
								
								</ul>
							</li>
					<!-- End Dashboard -->

					<!-- End Advance Pages -->
							
		
					
					<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Form">
							<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Form" data-parent="#exampleAccordion">
							<i class="ti ti-layout"></i>
							<span class="nav-link-text">File</span>
							</a>
							<ul class="sidenav-second-level collapse" id="Form">
							
							<li>
								<a href="case.php">New Case</a>
                            </li>
                            <li>
								<a href="drone.php">New Drone</a>
							</li>
							
							
							</ul>					  
						</li>
						<!-- End Forms -->
						
						<!-- Start Table -->
						<li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Table">
							<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#table" data-parent="#exampleAccordion">
							<i class="ti ti-shopping-cart"></i>
							<span class="nav-link-text">Record</span>
							</a>
							<ul class="sidenav-second-level collapse" id="table">
							
							<li>
								<a href="caserecord.php">Case Records</a>
							</li>
							<li>
								<a href="dronerecords.php">Drone</a>
							</li>
							
							
							</ul>
						</li>
                    <!-- End Table -->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoice">
					  <a class="nav-link" href="http://127.0.0.1:8000" target = "_blank">
						<i class="ti ti-printer"></i>
						<span class="nav-link-text">Detection Server</span>
						
					  </a>
					</li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoice">
					  <a class="nav-link" href="logout.php" target = "_blank">
						<i class="ti ti-printer"></i>
						<span class="nav-link-text">Log out</span>
						
					  </a>
					</li>
                  </ul>
                  
			  </div>
			
			</div>
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Case File</h4>
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				
				
				
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="card">
							<!-- form start -->
							<form data-toggle="validator" class="padd-20" action = "" method = "POST" enctype="multipart/form-data">
							
								<div class="row mrg-0">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputName" class="control-label">Name Of Investigating Officer</label>
											<input type="text" class="form-control" id="inputName" name = "ipo" required>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputEmail" class="control-label">Location</label>
											<input type="text" class="form-control" id="inputEmail" name = "location"  required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
								</div>
								
								<div class="row mrg-0">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputphone" class="control-label">File Number</label>
											<input type="text" class="form-control"  name = "fileno" value = "<?php $value = rand(1,99999999); echo $value;?>" readonly required>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputSubject" class="control-label">Suspect</label>
											<input type="text" class="form-control" name = "suspect" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
								</div>
								
								<div class="row mrg-0">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputAddress" class="control-label">Victim</label>
											<input type="text" class="form-control" name = "victim" required>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputState" class="control-label">Date</label>
											<input type="date" class="form-control" name = "date" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
								</div>
								
								<div class="row mrg-0">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputCity" class="control-label">Status</label>
											<input type="text" class="form-control" id="inputCity" name = "status" placeholder="City"  value = "pending" required readonly>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputZip" class="control-label">Case description</label>
											<input type="text" class="form-control" name = "description" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
								</div>
								
								<div class="row mrg-0">
								
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputPassword" class="control-label"> Object Detected</label>
											<input type="text" name = "object" class="form-control"  required>
											
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputPassword" class="control-label">Upload Crime Scene Photo</label>
											<input type="file" class="form-control" id="inputPasswordConfirm" name = "upload" required>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
								</div>
								
						
								
								<div class="col-12">
									<div class="form-group">
										<div class="text-center">
												<button type="submit" name = "submit" class="btn btn-primary"  >Submit</button>
										</div>
									</div>
								</div>
								
							</form>
							
						</div>
					</div>
					<!-- /.col-md-12 -->
					
				</div>

			</div>  
			<!-- /.content-wrapper-->
			
			<!-- Footer -->
			<footer class="sticky-footer">
			  <div class="container">
				<div class="text-center">				  
						<small class="font-15">Copyright © Ejigson Peter </small>
				</div>
			  </div>
			</footer>
			<!-- /Footer -->
			
			<!-- Switcher Start -->
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<div class="rightMenu-scroll">
				
					<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Setting Pannel <i class="ti-close"></i></button>
					<div class="right-sidebar" id="side-scroll">
						<div class="user-box">
						
							<div class="profile-img">
								<img src="assets/dist/img/user-7.jpg" alt="user">
								<!-- this is blinking heartbit-->
								<div class="notify setp"> <span class="heartbit"></span> <span class="point"></span> </div>
							</div>
							<div class="profile-text">
								<h4>Daniel Dax</h4>
								 <a href="#" class="bg-info-light"><i class="ti-settings"></i></a>
								 <a href="#" class="bg-warning-light"><i class="ti-email"></i></a>
								 <a href="#" class="bg-success-light"><i class="ti-headphone"></i></a>
								 <a href="#" class="bg-danger-light"><i class="ti-power-off"></i></a>
							</div>
							
							<div class="tabbable-line">
							
								<ul class="nav nav-tabs ">
								
									<li class="active">
										<a class="bg-primary-light" href="#options" data-toggle="tab">
										<i class="ti-palette"></i> </a>
									</li>
									
									<li>
										<a class="bg-danger-light" href="#notification" data-toggle="tab">
										<i class="ti-bell"></i> </a>
									</li>
									
									<li>
										<a class="bg-success-light" href="#all-messages" data-toggle="tab">
										<i class="ti-comment-alt"></i> </a>
									</li>
									
								</ul>
								
								<div class="tab-content">
								
									<!-- Option Tab -->
									<div class="tab-pane active" id="options">
										
										<ul id="themecolors" class="m-t-20">
											<li><a href="javascript:void(0)" data-skin="red-skin" class="default-theme">1</a></li>
											<li><a href="javascript:void(0)" data-skin="green-skin" class="green-theme">2</a></li>
											<li><a href="javascript:void(0)" data-skin="blue-skin" class="blue-theme">3</a></li>
											<li><a href="javascript:void(0)" data-skin="yellow-skin" class="yellow-theme">4</a></li>
											<li><a href="javascript:void(0)" data-skin="purple-skin" class="purple-theme">5</a></li>
											<li><a href="javascript:void(0)" data-skin="cyan-skin" class="cyan-theme">6</a></li>
										</ul>
										<ul id="themecolors" class="m-t-20">
											<li><a href="javascript:void(0)" data-skin="red-skin-light" class="default-light-theme working">7</a></li>
											<li><a href="javascript:void(0)" data-skin="green-skin-light" class="green-light-theme">8</a></li>
											<li><a href="javascript:void(0)" data-skin="blue-skin-light" class="blue-light-theme">9</a></li>
											<li><a href="javascript:void(0)" data-skin="yellow-skin-light" class="yellow-light-theme">10</a></li>
											<li><a href="javascript:void(0)" data-skin="purple-skin-light" class="purple-light-theme">11</a></li>
											<li><a href="javascript:void(0)" data-skin="cyan-skin-light" class="cyan-light-theme ">12</a></li>
										</ul>
										
									</div>
									
									<!-- Active User -->
									<div class="tab-pane" id="notification">
									
										<div class="ground-list ground-list-hove">
											<div class="ground ground-single-list">
												<a href="#">
													<div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Check New Admin Dashboard..</small>
													<span class="small">Just Now</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<div class="btn-circle-40 btn-danger"><i class="ti-calendar"></i></div>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">You can Customize..</small>
													<span class="small">02 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<div class="btn-circle-40 btn-info"><i class="ti-calendar"></i></div>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Need Responsive Business Tem...</small>
													<span class="small">10 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<div class="btn-circle-40 btn-warning"><i class="ti-calendar"></i></div>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Next Meeting on Tuesday..</small>
													<span class="small">15 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<div class="btn-circle-40 btn-purple"><i class="ti-calendar"></i></div>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">You can Change Your Pass..</small>
													<span class="small">18 Min Ago</span>
												</div>
											</div>
										</div>
										
									</div>
									
									<!-- All Messages -->
									<div class="tab-pane" id="all-messages">
									
										<div class="ground-list ground-list-hove">
											<div class="ground ground-single-list">
												<a href="#">
													<img class="ground-avatar" src="assets/dist/img/user-1.jpg" alt="...">
													<span class="profile-status bg-online pull-right"></span>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Co-Founder</small>
												</div>

												<div class="ground-right">
													<span class="small">Online</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<img class="ground-avatar" src="assets/dist/img/user-2.jpg" alt="...">
													<span class="profile-status bg-offline pull-right"></span>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Co-Founder</small>
												</div>

												<div class="ground-right">
													<span class="small">10 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<img class="ground-avatar" src="assets/dist/img/user-3.jpg" alt="...">
													<span class="profile-status bg-working pull-right"></span>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Co-Founder</small>
												</div>

												<div class="ground-right">
													<span class="small">20 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<img class="ground-avatar" src="assets/dist/img/user-4.jpg" alt="...">
													<span class="profile-status bg-busy pull-right"></span>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Co-Founder</small>
												</div>

												<div class="ground-right">
													<span class="small">18 Min Ago</span>
												</div>
											</div>
											
											<div class="ground ground-single-list">
												<a href="#">
													<img class="ground-avatar" src="assets/dist/img/user-5.jpg" alt="...">
													<span class="profile-status bg-online pull-right"></span>
												</a>

												<div class="ground-content">
													<h6><a href="#">Maryam Amiri</a></h6>
													<small class="text-fade">Co-Founder</small>
												</div>

												<div class="ground-right">
													<span class="small">Online</span>
												</div>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
			<!-- /Switcher -->
			
			<!-- Scroll to Top Button-->  
			<a class="scroll-to-top rounded cl-white theme-bg" href="#page-top">
			  <i class="ti-angle-double-up"></i>
			</a>

			<!-- Bootstrap core JavaScript-->
			<script src="assets/plugins/jquery/jquery.min.js"></script>
			<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			
			<!-- Core plugin JavaScript-->
			<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
			
			 <!-- Slick Slider Js -->
			<script src="assets/plugins/slick-slider/slick.js"></script>
			
			<!-- Slim Scroll -->
			<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
			
			<!-- Angular Tooltip -->
			<script src="assets/plugins/angular-tooltip/angular.js"></script>
			<script src="assets/plugins/angular-tooltip/angular-tooltips.js"></script>
			<script src="assets/plugins/angular-tooltip/index.js"></script>
			
			<!-- Validator JavaScript -->
			<script src="assets/plugins/validator/validator.js"></script>
			
			<!-- Custom scripts for all pages-->
			<script src="assets/dist/js/glovia.js"></script>
			<script src="assets/dist/js/jQuery.style.switcher.js"></script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>

			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			
			<script>
			  $('.dropdown-toggle').dropdown()
			</script>
			
	  </div>
	  <!-- Wrapper -->
	  
	</body>


</html>
