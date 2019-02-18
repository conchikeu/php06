<div id="content">
	<h2>Edit Products</h2>
	<?php $products = $newEditProducts->fetch_assoc()?>
	<form action="admin.php?controller=products&action=edit&id=<?php echo $id?>" method="POST">
		<p>Title <input type="text" name="products" placeholder="Please input news Products" value="<?php echo $products2['products']?>"></p>
		<p><input type="submit" name="editProducts" value="Edit Products"></p>
	</form>
</div>