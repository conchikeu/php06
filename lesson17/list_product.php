<!DOCTYPE html>
<html>
<head>
	<title>List product</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 80%;
			margin: 0 auto;
		}
		table, th, td {
			border: 1px solid gray;
		}
		img {
			width: 100px;
		}
	</style>
</head>
<body>
	<a href="add_product.php"> ADD PRODUCT</a>
	<?php include 'connect_db.php';?>
	<?php 
		$sql = "SELECT * FROM products";
		$listProducts = mysqli_query($conn, $sql);
	?>
	<h1>Product list</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Image</th>
			<th>Price</th>
			<th>Status</th>
			<th>Created</th>
			<th>Action</th>
		</tr>
		<?php if ($listProducts->num_rows > 0){?>
		<?php while($product = $listProducts->fetch_assoc()) {
			$image = $product['image'];
			?>
				<tr>
					<td><?php echo $product['id']; ?></td>
					<td><?php echo $product['name']; ?></td>
					<td><img src="<?php echo 'uploads/'.$image; ?>"></td>
					<td><?php echo $product['price']; ?></td>
					<td><?php echo $product['status']?"Con hang":"Het hang"; ?></td>
					<td><?php echo $product['created']; ?></td>
					<td>
						<a href="edit_product.php?idEdit=<?php echo $product['id']?>">EDIT</a> 
						| <a href="delete_product.php?id=<?php echo $product['id']?>">DELETE</a> 

					</td>
				</tr>
		<?php 
				}
			} else {?>
			<tr>
				<td colspan="7" style="text-align: center;">No product</td>
			</tr>
		<?php }?>
	</table>
</body>
</html>