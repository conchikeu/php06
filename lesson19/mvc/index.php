<a href="index.php">Home</a>
 | <a href="index.php?action=about">About</a>
 | <a href="index.php?action=contact">Contact</a>
 <br>
<?php 
	include 'controller/home_controller.php';
	$controller = new HomeController();
	$controller->xuly_yeucau();
?>