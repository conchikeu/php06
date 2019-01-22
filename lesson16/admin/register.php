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
  <link rel="stylesheet" href="css/register.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
              <span class="hidden-xs">Van Vu</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Van Vu - Web Developer
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
    $sex = "";
    $favioure = "";
    if (isset($_POST['register'])) {
    $name        = $_POST['name'];
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $sex         = $_POST['sex'];
    $favioure    = $_POST['favioure'] ;
    $sql = "INSERT INTO userinfo (name, username, password, sex, favioure) VALUES ('$name', '$username', '$password', '$sex', '$favioure')";
    if (mysqli_query($conn, $sql) === TRUE){
      header("Location:list_user.php");
      }
    }
  ?>
  <h1>Register</h1>
  <p id="success"></p>
  <form action="#" method="post">
    <div>
      <p id="inputName"></p>
      <p><input type="text" name="name" 
        placeholder="Your Name"></p>
    </div>
    <div>
      <i id="inputUsername"></i>
      <p><input type="text" name="username" id="username1" 
        placeholder="Your Username" ></p>
    </div>
    <div id="spaceee">
      <i id="inputPassword"></i>
      <p><input type="password" name="password" id="password1" 
        placeholder="Your password" maxlength="16"></p>
    </div>
    <div>
      <p>Sex:
      <input type="radio" name="sex">Men
      <input type="radio" name="sex">Girl
      <input type="radio" name="sex">Buedur
      </p>
    <p>Favioure:
      <input type="checkbox" name="favioure">Soccer
      <input type="checkbox" name="favioure">Swimming
      <input type="checkbox" name="favioure">Basketball
    </p>
    <!-- <p>City:
      <select>
        <option placeholder="Choice Your City" name ="citya">Choice Your City</option>
        <option placeholder="a" name = "citya"
        <?php if($citya == 'a'){echo "checked";} ?>>a</option>
        <option placeholder="b" name = "citya"
        <?php if($citya == 'b'){echo "checked";} ?>>b</option>
        <option placeholder="c" name = "citya"
        <?php if($citya == 'c'){echo "checked";} ?>>c</option>
        <option placeholder="d" name = "citya"
        <?php if($citya == 'd'){echo "checked";} ?>>d</option>
      </select>
        <span><?php echo $errorCity ?></span>
    </p> -->
    </div>
    <p><input type="submit" name="register" placeholder="Register"></p>
  </form>
</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
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
