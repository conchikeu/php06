<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Boxed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
    table {
      border-collapse: collapse;
      width: 80%;
      margin: 0 auto;
    }
    table, th, td {
      border: 1px solid gray;
      text-align: center;z
    }
    img {
      width: 100px;
    }
  </style>
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="homepage.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Home</b> Page</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <?php include 'sidebar.php';?>

  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?php include 'connect_db.php';?>
  <!-- include, include_once, require, require_once; -->
  <?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		// Lay thong tin cu cua san pham can edit theo ID
		$sql = "SELECT * FROM listproduction WHERE id = $id";
		$oldProductEdit = mysqli_query($conn, $sql);
		$oldProduct = $oldProductEdit->fetch_assoc();
		$name        = $oldProduct['name'];
		$description = $oldProduct['description'];
		$price       = $oldProduct['price'];
		$status      = $oldProduct['status'];
		$imageName   = $oldProduct['image'];
		if (isset($_POST['edit_product'])) {
			$name        = $_POST['name'];
			$description = $_POST['description'];
			$price       = $_POST['price'];
			$status      = $_POST['status'];
			if (!$_FILES['image']['error']) {
				// xu ly upload anh
				$image = $_FILES['image'];
				$imageName   = uniqid().'_'.$image['name'];
				$targetUpload = 'uploads/'.$imageName;
				move_uploaded_file($image['tmp_name'], $targetUpload);
			// ket thuc xu ly upload anh
			}
			$sql = "UPDATE listproduction SET name = '$name', description = '$description', price = $price, status = $status, image = '$imageName' WHERE id = $id";
			if (mysqli_query($conn, $sql) === TRUE) {
				header("Location:list_product.php");
			}
		}
	?>
	<h1>Edit product</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Product name: <input type="text" name="name" placeholder="Please input product name" value="<?php echo $name?>"></p>
		<p>Product description: <textarea name="description" rows="10" cols="30"><?php echo $description?></textarea></p>
		<p>Product price: <input type="text" name="price" placeholder="Please input product price" value="<?php echo $price?>"></p>
		<p>Product image: <input type="file" name="image"></p>
		<img src="uploads/<?php echo $imageName?>">
		<p>Status:
			<input type="radio" name="status" value="1" <?php echo $status == 1?"checked":"";?>> Yes
			<input type="radio" name="status" value="0" <?php echo $status == 0?"checked":"";?>> No
		</p>
		<p><input type="submit" name="edit_product" value="Edit product"></p>
	</form>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
</body>
</html>
