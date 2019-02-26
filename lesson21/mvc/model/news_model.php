<?php 
require_once 'config/database.php';
class NewsModel extends ConnectDB {
	public function add($title) {
		$sql = "INSERT INTO news2(title) VALUES ('$title')";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function listNews() {
		$sql = "SELECT * FROM news2";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function deleteNews($id) {
		$sql = "DELETE FROM news2 WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function getNewsInfo($id) {
		$sql = "SELECT * FROM news2 WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function edit($id, $title) {
		$sql = "UPDATE news2 SET title = '$title' WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function login($username, $password){
		$sql = "SELECT * FROM userinfo WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($this->connect_db(), $sql);
		return $result->fetch_assoc();
	}
}
?>