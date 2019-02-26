<?php 
class ConnectDB {
	function connect_db() {
		$conn = mysqli_connect('localhost', 'root', '', '18php06');
		if (mysqli_connect_errno()) {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		mysqli_set_charset($conn, "utf8");
		return $conn;
	}
}
?>