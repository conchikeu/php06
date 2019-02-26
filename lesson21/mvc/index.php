<!DOCTYPE html>
<html>
<head>
	<title>My Shop</title>
	<link rel="stylesheet" type="text/css" href="public/css/frontend.css">
</head>
<body>
	<?php require_once 'controller/frontend_controller.php';?>
	<h1>Frontend</h1>
	<div id="container">
		<div>
			<ul id="frontend-align-top-table">
			<li class="align-li"><a href="#">Home</a></li>
			<li class="align-li"><a href="index.php?controller=news">News</a></li>
			<li class="align-li"><a href="index.php?controller=products">Products</a></li>
			<li class="align-li"><a href="index.php?controller=contact">Contact</a></li>
		</ul>
		</div>
	</div>
		
	<?php 
		$frontend = new FrontendController();
	?>

</body>
</html>