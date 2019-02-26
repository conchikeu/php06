<?php session_start();?>
<?php class AdminLogin {
		public function loginRequest(){
			$controller = isset($_GET['controller'])?$_GET['controller']:'loginAdmin';
			if(!isset($_SESSION['login'])){
				header("Location: admin.php?controller=users&action=login");
			}
		}
	} ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Shop Management</title>
	<link rel="stylesheet" type="text/css" href="public/css/backend.css">
</head>
<body>
	
	
	<?php require_once 'controller/backend_controller.php';?>
	
	<h1>Backend</h1>
	<?php if (isset($_SESSION['login'])) {?>
		<p id="hi-admin">Hi <?php echo $_SESSION['login'];?></p>
		<a href="admin.php?controller=users&action=logout" id="logout-align"> Logout</a>
	<?php }?>
	<ul>
		<li class="align-li"><a href="admin.php">Dashboard</a></li>
		<li class="align-li"><a href="admin.php?controller=news&action=add">Add News</a></li>
		<li class="align-li"><a href="admin.php?controller=news&action=list">List News</a></li>
		<li class="align-li"><a href="admin.php?controller=products&action=addProducts">Add Products</a></li>
		<li class="align-li"><a href="admin.php?controller=products&action=list">List Products</a></li>
		<li class="align-li"><a href="admin.php?controller=products&action=infomation">List Products Information</a></li>
	</ul>
	<?php 
		$backend = new BackendController();
		$backend->handleRequest();
	?>
</body>
</html>