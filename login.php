<!DOCTYPE html>
<html lang="en">

	

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Login</title>

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
	
		$username = mysqli_escape_string($conn,$_POST['username']);
		$password =  mysqli_escape_string($conn,$_POST['password']);

		//submit
		$sqli = "SELECT * FROM users where username = '$username' AND password = '$password' ";
		$query = mysqli_query($conn,$sqli);
		$count =  mysqli_num_rows($query);

       if ($count > 0){

			$_SESSION['login'] = $_POST['username'];
			echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<strong>Well done!</strong>Login successfull!!
			</div>';
			echo "<script> location.href='dashboard.php'; </script>";
	   }
	   else{
		echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Well done!</strong> Access Denied !!!
		</div>';
	   }

	}
	?>

	<body class="red-skin">
	
		<div class="container-fluid">
			<div class="row">
				<div class="hidden-xs hidden-sm col-lg-6 col-md-6 theme-bg">
					
					<div class="clearfix">
							<img class="img-responsive" src="assets/dist/img/logo.png" alt="Logo Icon">
						<div class="logo-title-container text-center">
							<br>
							<br>
							<h3 class="cl-white text-upper">Crime Scene Analyis System</h3>
							
							 <div class="copy animated fadeIn">
								<p class="cl-white"><br> Data Storage Module.</p>
							</div>
						</div> <!-- .logo-title-container -->
					</div>
				</div>

				<div class="col-12 col-sm-12 col-md-6 col-lg-6 login-sidebar animated fadeInRightBig">

					<div class="login-container animated fadeInRightBig">

						<h2 class="text-center text-upper">Login To Dashboard</h2>
						<form class="form-horizontal" action = "" method = "POST">
							<div class="form-group">
								<input type="text"    name = "username" class="form-control" id="inputEmail3" placeholder= "Username">
								<i class="fa fa-user"></i>
							</div>
							<div class="form-group help">
								<input type="password"  name = "password" class="form-control" id="inputPassword3" placeholder="Password">
								<i class="fa fa-lock"></i>
								<a href="#" class="pass-view fa fa-eye"></a>
							</div>
							
							
							<div class="form-group">
								<div class="flexbox align-items-center">
									<button type="submit" name = "submit" class="btn theme-bg">log in</button>
									<p>If You Are a New User <a href="signup.php" data-toggle="tooltip" class="theme-cl" data-original-title="Sign Up">Signup Here.</a></p>
								</div>
							</div>
						
						</form>
					</div> 
					<!-- .login-container -->
					
				</div> <!-- .login-sidebar -->
			</div> <!-- .row -->
		</div>
		

		<!-- Bootstrap core JavaScript-->
		<script src="assets/plugins/jquery/jquery.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		
		<!-- Core plugin JavaScript-->
		<script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
		
		 <!-- Slick Slider Js -->
		<script src="assets/plugins/slick-slider/slick.js"></script>
		
		<!-- Slim Scroll -->
		<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom scripts for all pages-->
		<script src="assets/dist/js/glovia.js"></script>
		<script src="assets/dist/js/jQuery.style.switcher.js"></script>
		
		<script>
		  $('.dropdown-toggle').dropdown()
		</script>
	  
	</body>


</html>
