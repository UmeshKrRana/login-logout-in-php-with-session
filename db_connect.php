<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_register";

	$con = mysqli_connect($hostname, $username, $password, $dbname) or die("Database error " .mysqli_connect_error());
?>