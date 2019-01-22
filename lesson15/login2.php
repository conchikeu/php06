<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<style>
	span{
		color: red;
	}
</style>
<body>
	<?php
	$errorName = $errorUserName = $errorPassword = $errorSex = $errorFavioure = $errorCity = '';
	$name = $username = $password = $sex = $favioure = $citya = '';
	if(isset($_POST['register'])) {
		
		var_dump($_POST);
		//isset();
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!isset($_POST['sex'])){
			$sex = '';
		}
		else {
			$sex = $_POST['sex'];
		}
		if(!isset($_POST['favioure'])){
			$favioure = '';
		}
		else {
			$favioure = $_POST['favioure'];
		}
		if(!isset($_POST["citya"])){
			$citya ='';
		}else{
			$citya = $_POST["citya"];
		}


		if($name == ''){
			$errorName = "Please input name";
		}
		if($username == ''){
			$errorUserName = "Please input username";
		}
		if($password == ''){
			$errorPassword = "Please input password";
		}
		if($sex == ''){
			$errorSex = "Please select Sex";
		}
		if($favioure == ''){
			$errorFavioure = "Please select Favioure";
		}
		if($citya === 'Choice Your City'){
			$errorCity = "Please select Your City";
		}
		// echo $name;
		// echo $username;
		// echo $password;
		// var_dump($_POST['name']);
	}
	elseif ($errorName = $errorUserName = $errorPassword != ''){
		echo "Please submit";
	}
	$con = '';
	if ($name == '' || $username == ''|| $password == ''|| $sex == ''|| $favioure == ''){
		echo "Inpus information";
	}
	else {
		$con = mysqli_connect('127.0.0.1','root','', '18php06');
	}

	echo "<br>";

	if(!$con){
		echo 'Not connect';
	}
	elseif(!mysqli_select_db($con,'18php06')){
		echo 'Data base not select';
	}
	$sql = "INSERT INTO test (name, username, password, sex, favioure) VALUES ('$name', '$username', '$password', '$sex', '$favioure')";

	echo "<br>";

	$result = '';
	if(!mysqli_query ($con, $sql)){
		echo "Not Success";
	} else{
		echo "Success";
	}
	?>

	<h1>Login</h1>
	<p id="success"></p>
	<form action="login.php" method="post">
		<div>
			<p id="inputName"></p>
			<p>Name:<input type="text" name="name" 
				value="<?php echo $name?>"></p>
			<span><?php echo $errorName ?></span>
		</div>
		<div>
			<i id="inputUsername"></i>
			<p>Username:<input type="text" name="username" id="username1" 
				value="<?php echo $username?>" ></p>
			<span><?php echo $errorUserName ?></span>
		</div>
		<div id="spaceee">
			<i id="inputPassword"></i>
			<p>Password:<input type="password" name="password" id="password1" 
				value="<?php echo $password?>" maxlength="16"></p>
			<span><?php echo $errorPassword ?></span>	
		</div>
		<div>
			<p>Sex:
			<input type="radio" name="sex" value="Men"
			<?php if($sex == 'Men'){echo "checked";} ?>>Men
			<input type="radio" name="sex" value="Girl"
			<?php if($sex == 'Girl'){echo "checked";} ?>>Girl
			<input type="radio" name="sex" value="Buedur"
			<?php if($sex == 'Buedur'){echo "checked";} ?>>Buedur
			</p>
			<span><?php echo $errorSex ?></span>
		<p>Favioure:
			<input type="checkbox" name="favioure" value="Soccer" 
			<?php if($favioure == 'Soccer'){echo "checked";} ?>>Soccer
			<input type="checkbox" name="favioure" value="Swimming"
			<?php if($favioure == 'Swimming'){echo "checked";} ?>>Swimming
			<input type="checkbox" name="favioure" value="Basketball"
			<?php if($favioure == 'Basketball'){echo "checked";} ?>>Basketball
		</p>
			<span><?php echo $errorFavioure ?></span>
		<!-- <p>City:
			<select>
				<option value="Choice Your City" name ="citya">Choice Your City</option>
				<option value="a" name = "citya"
				<?php if($citya == 'a'){echo "checked";} ?>>a</option>
				<option value="b" name = "citya"
				<?php if($citya == 'b'){echo "checked";} ?>>b</option>
				<option value="c" name = "citya"
				<?php if($citya == 'c'){echo "checked";} ?>>c</option>
				<option value="d" name = "citya"
				<?php if($citya == 'd'){echo "checked";} ?>>d</option>
			</select>
				<span><?php echo $errorCity ?></span>
		</p> -->
		</div>
		<p><input type="submit" name="register" value="Register"></p>
	</form>
</body>
</html>