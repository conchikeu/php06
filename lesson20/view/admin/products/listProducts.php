<div id="content">
	<h2>List Products</h2>
</div>
<?php
	while($products = $listProducts->fetch_assoc()) {
		$products_id = $products['id'];
		echo $products['id'].' ---- '.$products['products'];
		echo "<a href='admin.php?controller=products&action=delete&id=$products_id'> DELETE</a>";
		echo " | <a href='admin.php?controller=products&action=editProducts&id=$products_id'> EDIT</a>";
		echo " | <a href='admin.php?controller=products&action=infomation=$products_id'> Information</a>";
		echo "<br>";
	}
?>