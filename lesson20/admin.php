<!DOCTYPE html>
<html>
<head>
	<title>My Shop Management</title>
	<link rel="stylesheet" type="text/css" href="public/css/backend.css">
</head>
<body>
	<?php require_once 'controller/backend_controller.php';?>
	<h1>Backend</h1>
	<ul>
		<li><a href="admin.php">Dashboard</a></li>
		<li><a href="admin.php?controller=news&action=add">Add News</a></li>
		<li><a href="admin.php?controller=news&action=list">List News</a></li>
		<li><a href="admin.php?controller=products&action=add">Add Product</a></li>
		<li><a href="admin.php?controller=products&action=list">List Products</a></li>
	</ul>
	<?php 
		$backend = new BackendController();
		$backend->handleRequest();
	?>
</body>
</html>