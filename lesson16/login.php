<html>
<head></head>
<body>
<?php

session_start();
error_reporting(error_reporting() & ~E_NOTICE);
$username = $_SESSION['username'];

if(isset($_POST['register']))
	echo "Seccues submit";
{
$conn = mysqli_connect('127.0.0.1','root','','18php06');
if(! $conn)
{
die('Something went wrong show this to dylan:'.mysqli_error());
}

$name = $_POST['name'];
$username = $_POST['username']; 
$password = $_POST['password'];
$sex = $_POST['sex'];
$favioure = $_POST['favioure'];

$sql = "UPDATE test".
   "SET name = $name ".
   "SET username = $username ".
   "SET password = $password ".
   "SET sex = $sex".
   "SET favioure = $favioure".
   "WHERE name = $name";

if(!$conn){
		echo 'Not connect';
	}
	elseif(!mysqli_select_db($conn,'18php06')){
		echo 'Data base not select';
	}
echo "<br>";
	if(!mysqli_query ($push, $sql)){
		echo "Not Success";
	} else{
		echo "Success";
	}
	?>
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
<?php
}
?>
</body>
</html>