<?php
	$conn = mysqli_connect ('127.0.0.1', 'root', '', 'test');

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL:" .mysqli_connect_errno();
	}

	mysqli_set_charset($conn, "uft8");
	echo "<pre>";
	var_dump($conn);
?>