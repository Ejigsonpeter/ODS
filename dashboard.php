<!DOCTYPE html>
<html lang="en">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
        <title> Dashboard </title>
        
        <?php
            include 'connect.php';
            session_start();
            if (isset($_SESSION['login'])){
            $id = $_SESSION['login'];
            
            $sql =  "SELECT * FROM  users WHERE  username = '$id' ";
            $count =  mysqli_num_rows($query);
            $query = mysqli_query($conn,$sql);
            if ($count > 0){
                
                           
                       }
                       else{
                        header("location:login.php");
                       }
                
     
            }
?>
<?php
        include 'connect.php';
       
       
        $sql1 = "select * from users";
        $query1 = mysqli_query($conn,$sql1);
        $count1 = mysqli_num_rows($query1);

        $s1 = "select * from drones";
        $q1 = mysqli_query($conn,$s1);
        $c1 = mysqli_num_rows($q1);

        $s2 = "select * from case_file where status = 'pending' ";
        $q2 = mysqli_query($conn,$s2);
        $c2 = mysqli_num_rows($q2);

        $s3 = "select * from case_file where status = 'Solved' ";
        $q3 = mysqli_query($conn,$s3);
        $c3 = mysqli_num_rows($q3);
       
        
        
?>

		<!-- Bootstrap core CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Custom fonts for this template -->
		<link href="assets/plugins/themify/css/themify.css" rel="stylesheet" type="text/css">

		<!-- Angular Tooltip Css -->
		<link href="assets/plugins/angular-tooltip/angular-tooltips.css" rel="stylesheet">
		
		<!-- Morris Charts CSS -->
		<link href="assets/plugins/morris.js/morris.css" rel="stylesheet">

		<!-- Page level plugin CSS -->
		<link href="assets/dist/css/animate.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="assets/dist/css/glovia.css" rel="stylesheet">
		<link href="assets/dist/css/glovia-responsive.css" rel="stylesheet">

		<!-- Custom styles for Color -->
		<link rel="stylesheet" href="assets/dist/css/skins/default.css">
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
		<!-- =====================================================
		                    End Navigations
		======================================================= -->
	  
		<div class="content-wrapper">
			<div class="container-fluid">
			
				<!-- Title & Breadcrumbs-->
				<div class="row page-titles">
					<div class="col-md-12 align-self-center">
						<h4 class="theme-cl">Dashboard</h4>
						
					</div>
				</div>
				<!-- Title & Breadcrumbs-->
				
				<!-- row -->
				<div class="row">
					
					<div class="col-md-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="float-right">
									<i class="icon ti-user blue-cl font-30"></i>
								</div>
								<div class="widget-detail">
									<h4 class="mb-1"><?php echo $count1;  ?></h4>
									<span>New Users</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="float-right">
									<i class="ti-shopping-cart-full red-cl font-30"></i>
								</div>
								<div class="widget-detail">
									<h4 class="mb-1"><?php echo $c1;  ?></h4>
									<span>Drones</span>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="float-right">
									<i class="icon ti-medall yellow-cl font-30"></i>
								</div>
								<div class="widget-detail">
									<h4 class="mb-1"><?php echo $c2;  ?></h4>
									<span>Pending Case</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-6">
							<div class="card">
								<div class="card-body">
									<div class="float-right">
										<i class="icon ti-medall yellow-cl font-30"></i>
									</div>
									<div class="widget-detail">
										<h4 class="mb-1"><?php echo $c3;  ?></h4>
										<span>Solved Case</span>
									</div>
								</div>
							</div>
						</div>
					
			
					
				</div>
				<!-- /row -->
				
				<!-- row -->
			
				
				<!-- row -->
			<!-- row -->
			<div class="row">
					<div class="col-md-12">
						<div class="card  ">
							<div class="card-header">
								<h4>User Table</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive"> 
										<?php
										include 'connect.php';
										$sql = "select * from users";
										$query = mysqli_query($conn,$sql);
								echo '<table id="data-table-simple" class="table table-bordered">
										<thead class="thead-inverse">
											<tr>
												<th>Id</th>
												<th>Fullname</th>
												<th>Username</th>
												<th>Email</th>
												<th>Password</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>';
											  while ($row = mysqli_fetch_assoc($query)) {
													
											 
                                                echo '<tr class="odd gradeX">
                                                <td>'. $row['id'] .'</td>
                                                <td>'. $row['fullname'] .'</td>
                                                <td>'. $row['username'] .'</td>
                                                <td>'. $row['email'] .'</td>
                                                <td>'. $row['password'] .'</td>
					
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
				<!-- /.row -->
				
				<!-- row -->
			
				<!-- /.row -->
				

			</div>  
			<!-- /.content-wrapper -->
			
			<!-- Footer -->
			<footer class="sticky-footer">
			  <div class="container">
				<div class="text-center">
				  <small class="font-15">Copyright © Ejigson Peter </small>
				</div>
			  </div>
			</footer>
		
			<script src="assets/plugins/jquery/jquery.min.js"></script>
			<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			
			<!-- Core plugin JavaScript-->
			<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
			
			 <!-- Slick Slider Js -->
			<script src="assets/plugins/slick-slider/slick.js"></script>
			
			<!-- Slim Scroll -->
			<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
			
			
			
			
			
			
			<!-- Custom scripts for all pages -->
			<script src="assets/dist/js/glovia.js"></script>
			<script src="assets/dist/js/jQuery.style.switcher.js"></script>
			<!-- Scroll to Top Button-->  
			<a class="scroll-to-top rounded cl-white theme-bg" href="#page-top">
					<i class="ti-angle-double-up"></i>
				</a>
	
				<!-- Bootstrap core JavaScript-->
				<script src="assets/plugins/jquery/jquery.min.js"></script>
				<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
				
				<!-- Core plugin JavaScript-->
				<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
				
			
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
				
		
				
			</div>
			<!-- Wrapper -->
			
			<script>
			
				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
			<script>
					$('.dropdown-toggle').dropdown()
				</script>

			
			
			
			
	  </div>
	  <!-- Wrapper -->
	</body>


</html>
