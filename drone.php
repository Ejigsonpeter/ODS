<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Drone</title>

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
if(isset($_POST['submit'])){

	$model  =  mysqli_escape_string($conn,$_POST['model']);
	$serialno  =  mysqli_escape_string($conn,$_POST['serialno']);
	$ip  =  mysqli_escape_string($conn,$_POST['ip']);
	$date  =  mysqli_escape_string($conn,$_POST['date']);

	$sql = "insert into drones(model,serialnumber,ip_address,date)VALUES(
										'$model',
										'$serialno',
										'$ip',
										'$date')";
	$query = mysqli_query($conn,$sql);
	if($query){
		echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Well done!</strong>  successfull!!
		</div>';
	}
	else{
		echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Well done!</strong>failed !!
		</div>';
	}
	
}
?>
	<body class="fixed-nav sticky-footer red-skin" id="page-top">
	
		<!-- ===============================
			Navigation Start
		====================================-->
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
							
		
					
					<li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Form">
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
						<li class="nav-item " data-toggle="tooltip" data-placement="right" title="Table">
							<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#table" data-parent="#exampleAccordion">
							<i class="ti ti-shopping-cart"></i>
							<span class="nav-link-text">Record</span>
							</a>
							<ul class="sidenav-second-level collapse" id="table">
							
							<li>
								<a href="caserecord.php">Case Records</a>
							</li>
							<li>
								<a href="dronerecords">Drone</a>
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
							<li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
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
									<a href="basic-form.html">New Case</a>
															</li>
															<li>
									<a href="basic-form.html">New Drone</a>
								</li>
								
								
								</ul>					  
							</li>
							<!-- End Forms -->
							
							<!-- Start Table -->
							<li class="nav-item " data-toggle="tooltip" data-placement="right" title="Table">
								<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#table" data-parent="#exampleAccordion">
								<i class="ti ti-shopping-cart"></i>
								<span class="nav-link-text">Record</span>
								</a>
								<ul class="sidenav-second-level collapse" id="table">
								
								<li>
									<a href="basic-table.html">Case Records</a>
								</li>
								<li>
									<a href="basic-table.html">Drone</a>
								</li>
								
								
								</ul>
							</li>
											<!-- End Table -->
											<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoice">
							<a class="nav-link" href="http://127.0.0.1:8000" target = "_blank">
							<i class="ti ti-printer"></i>
							<span class="nav-link-text">Log out</span>
							
							</a>
						</li>
	
						</ul>
					</div>
				
				</div>
				<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			</nav>
		<!-- =====================================================
		                    End Navigations
		======================================================= -->
	  
		<!-- ============================================
					Start Wrapper
		============================================== -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Registration</h4>
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				
				<!-- .row -->
				<div class="row">
					<!--.col-md-6 -->
					<div class="col-md-6 col-lg-6 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h4>Register Drone</h4>
							</div>
							
							<div class="card-body">
								<form method = "POST" action = "">
								  <div class="form-group">
									<label for="exampleInputEmail1">Model</label>
									<input type="text" class="form-control"   name = "model" required>
							
								  </div>
								  
								  <div class="form-group">
									<label for="exampleInputPassword1">Serial Number</label>
									<input type="text" class="form-control" name = "serialno" required>
								  </div>
									
									<div class="form-group">
											<label for="exampleInputEmail1">Ip Address</label>
											<input type="text" class="form-control" name = "ip" required>
											
											</div>
											
									<div class="form-group">
											<label for="exampleInputPassword1">Date</label>
											<input type="date" class="form-control" name = "date" required>
											</div>	  
								  
								  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
								</form>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
					
					<!-- .col-md-6 -->
	
		<!-- Wrapper -->
	  
	</body>


</html>
