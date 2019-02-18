<?php 
require_once 'config/database.php';
class ProductsModel extends ConnectDB {
	public function addProducts($products){
		$sql = "INSERT INTO products2(products) VALUES ('$products')";
		return mysql_query($this->connect_db(), $sql);
	}
	public function listProducts (){
		$sql = "SELECT * FROM products2";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function deleteProducts($id){
		$sql = "DELETE FROM products2 WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function getProductsInfo($id) {
		$sql = "SELECT * FROM products2 WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function editProducts($id, $products) {
		$sql = "UPDATE products2 SET products = '$products' WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
}
?>