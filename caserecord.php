<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from codeminifier.com/new-glovia/glovia/advance-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2019 09:37:06 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Case Records</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/themify/css/themify.css" rel="stylesheet" type="text/css">

		<!-- Angular Tooltip Css -->
		<link href="assets/plugins/angular-tooltip/angular-tooltips.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/dist/css/glovia.css" rel="stylesheet">
		<link href="assets/dist/css/glovia-responsive.css" rel="stylesheet">

		<!-- Custom styles for Color -->
		<link id="jssDefault" rel="stylesheet" href="assets/dist/css/skins/default.css">
	</head>

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
						<li class="nav-item  active" data-toggle="tooltip" data-placement="right" title="Table">
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
		                
		<!-- ===============================================    End Navigations======== -->
		
		<!-- =========================================================
			Content Wrapper
		============================================================ -->
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Database</h4>
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>Case Records</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive"> 
								
										<?php
										include 'connect.php';
										$sql = "select * from case_file";
										$query = mysqli_query($conn,$sql);
								echo '	<table id="data-table-simple" class="table table-bordered">
								<thead class="thead-inverse">
											<tr>
										
												<th>Id</th>
												<th>Officer</th>
												<th>FileNo</th>
												<th>Case Description</th>
												<th>Location</th>
												<th>Victim</th>
												<th>Suspect</th>

												<th>Object Detected</th>
												<th>Date</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>';
											  while ($row = mysqli_fetch_assoc($query)) {
													
											 
                                                echo '<tr class="odd gradeX">
                                                <td>'. $row['id'] .'</td>
                                                <td>'. $row['investigatingofficer'] .'</td>
                                                <td>'. $row['fileno'] .'</td>
												<td>'. $row['casedescription'] .'</td>
												<td>'. $row['location'] .'</td>
                                                <td>'. $row['victim'] .'</td>
												<td>'. $row['suspect'] .'</td>
												<td>'. $row['object_detected'] .'</td>
												<td>'. $row['date'] .'</td>
												<td>'. $row['status'] .'</td>
					
                                                <td class="actions"><a  href="o_orphan.php?id=' . $row['id'] .'" class="text-danger text-uppercase text-strong text-sm mr-10">DELETE</a></td>
                                                        </tr>';
                                                        				 
						 
			}
	 echo '</tbody>
			</table>';
			?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->
				
				<!-- row -->
			
				<!-- /.row -->
				
				
				<!-- End Product Popup -->

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
		
			<!-- /Switcher -->
			<footer class="sticky-footer">
			  <div class="container">
				<div class="text-center">
				  
				</div>
			  </div>
			</footer>
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
			
			<!-- Data Table Js -->
			<script src="assets/plugins/datatables/jquery.dataTables.js"></script>
			<script src="assets/plugins/datatables/dataTables.bootstrap4.js"></script>
			
			<!-- Angular Tooltip -->
			<script src="assets/plugins/angular-tooltip/angular.js"></script>
			<script src="assets/plugins/angular-tooltip/angular-tooltips.js"></script>
			<script src="assets/plugins/angular-tooltip/index.js"></script>
			
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
			  $(document).ready(function() {
				$('#data-table-advance').DataTable();
			} );
			</script>
			
			<script>
			  $(document).ready(function() {
				$('#data-table-simple').DataTable();
			} );
			</script>
			
			<script>
			  $('.dropdown-toggle').dropdown()
			  </script>
			
		</div>
		<!-- Wrapper -->
	  
	</body>

<!-- Mirrored from codeminifier.com/new-glovia/glovia/advance-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2019 09:37:11 GMT -->
</html>
