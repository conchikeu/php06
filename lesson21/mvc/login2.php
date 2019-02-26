<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php 
		$conn = mysqli_connect('localhost', 'root', '', '18php06');
		if (mysqli_connect_errno()) {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_set_charset($conn, "utf8");

		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			// check username va password trung voi username va password trong bang users moi cho login thanh cong
			$sql = "SELECT * FROM userinfor WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($conn, $sql);
			$check = $result->fetch_assoc();
			if (!empty($check)) {
					$_SESSION['login'] = $username;
					header("Location: login2.php");
			} else {
				echo "Sai username hoac password";
			}
			// if (!isset($_SESSION['login'])){
			// 	header("Location: admin.php?controller=user$action=login");
			// }

		}
	?>
	<form action="login.php" method="POST">
		<p>Username <input type="text" name="username"></p>
		<p>Password <input type="password" name="password"></p>
		<p><input type="submit" name="Login" value="Login"></p>
	</form>
	<a href="admin.php">Admin page</a>
</body>
</html>