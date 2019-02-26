<div id="content">
	<h2>Information</h2>
</div>
<?php 
	while($informationOfProducts = $informations->fetch_assoc()){
		$information_id = $informationOfProducts['id'];
		echo "This Product".$informationOfProducts['id']." "."New"; 
		echo " | <a href='admin.php?controller=products&action=infomation=$information_id'> Information</a>";
	}

?>