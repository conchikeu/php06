<div id="content">
	<h2>Edit Products</h2>
	<?php $editProductsHere = $newEditProducts->fetch_assoc()?>
	<form action="admin.php?controller=products&action=editProducts&id=<?php echo $id?>" method="POST">
		<p>Title <input type="text" name="products" placeholder="Please input new Products" value="<?php echo $editProductsHere['products']?>"></p>
		<p><input type="submit" name="editProducts" value="Edit Products"></p>
	</form>

</div>