<?php
include_once ('db_connect.php');
error_reporting(0);
session_start();
 $email = $_SESSION['user'];

 if(!isset($_SESSION['user'])){
 	header('location: login.php');
 }

 $mysql = "SELECT * FROM registration WHERE email = '$email' ";
 $data = mysqli_query($con, $mysql);
 $row = mysqli_fetch_assoc($data);
 $name = $row['first_name'] ." " .$row['last_name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<!-- jQuery File -->
	<script type="text/javascript" src="jquery/jquery.js"></script>

	<!-- Bootstrap CSS File -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Fontawesome File -->
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<!-- Bootstrap JS File -->
	<script src="js/bootstrap.js" type="text/javascript"></script>

	<!-- custom style-->
	<link rel="stylesheet" type="text/css" href="style/landingpage.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container-fluid">
		<a href="" class="navbar-brand text-warning">UMESH</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsenavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsenavbar">
			<ul class="navbar-nav m-auto">
				<li class="nav-item">
					<a href="" class="nav-link">HOME</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">ABOUT</a>
				</li>
				<li class="nav-item dropdown">
					<a href="" class="nav-link dropdown-toggle" id="mydropdown" data-toggle="dropdown">SERVICES</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="">Service 1 </a>
						<a class="dropdown-item" href="">Service 2 </a>
						<a class="dropdown-item" href="">Service 3 </a>
					</div>
				</li>
				
			</ul>
			<ul class="navbar-nav profile">
				<li class="nav-item dropdown">
					<a href="" class="nav-link" id="mydropdown1" data-toggle="dropdown">Welcome: <i class="fas fa-user-circle"></i> <?php echo $name; ?> </a>
					<div class="dropdown-menu profile-section">
						<a class="dropdown-item" href=""><i class="fas fa-cog"></i> Settings</a>
						<a class="dropdown-item" href=""><i class="fas fa-user-alt"></i> Profile </a>
						<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout </a>
					</div>
				</li>
			</ul>
		</div>

</nav>

<div class="bg-img">
<div class="container-fluid">

	</div>
</div>
</body>
</html>