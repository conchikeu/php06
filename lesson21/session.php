<?php 
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['name'] = $username;
	$a = "Test";

	echo $_SESSION['name'];	
	echo "<br>";
	echo $a;
?>