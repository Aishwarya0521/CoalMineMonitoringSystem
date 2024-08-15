<?php
	$server      = 'mysql.hostinger.in'; 		// host
	$db_user     = 'u514009788_24_iot31'; 		// DB user
	$db_password = 'QwertyuioP!31'; 	// DB password
	$db_name     = 'u514009788_24_iot31';		// DB Name
	$con = mysqli_connect($server,$db_user,$db_password,$db_name);
 


	// Check connection
	if (mysqli_connect_errno()){
  		echo "Failed to connect to database: " . mysqli_connect_error();
  	}
?>