<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<?php 
	if (isset($_POST['register'])) {
		header("Location: test_here.php");
	}
	?>
	<form action="#" method="POST">
		<input type="text" name="name">
		<input type="submit" name="register" value="Register">
	</form>
</body>
</html>