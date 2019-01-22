<?php 
	$conn = mysqli_connect('127.0.0.1', 'root', '', '18php06');

	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_set_charset($conn, "utf8");
?>