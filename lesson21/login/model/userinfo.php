<?php 
	class Login extends ConnectDB{
		public function login($username, $password){
			$sql = "SELECT * FROM userinfo(username, password) VALUES ('$username', '$password')";
			return mysqli_query($this->connect_db(), $sql);
		}
	}
?>