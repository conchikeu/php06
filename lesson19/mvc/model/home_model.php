<?php 
	include 'config/database.php';
	class HomeModel extends ConnectDB {
		public function getHomePage() {
			$sql = "SELECT * FROM news";
			$listNews = mysqli_query($this->connect_db(), $sql);
    		return $listNews;
		}
		public function getNewsDetail($news_id){
			$sql = "SELECT * FROM news WHERE id = $news_id";
			$newsDetail = mysqli_query($this->connect_db(), $sql);
			return $newsDetail;
		}
		public function delete($delete_id){
			$id = $_GET['id'];
			$sql = "DELETE FROM news WHERE id = $id";
			$delete = mysqli_query($this->connect_db(), $sql);
			if (mysqli_query($conn, $sql) === TRUE) {
		header("Location: about.php");
	}
			return $delete;
		}
		
	}
?>