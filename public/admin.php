 <?php
  include_once('../includes/dbconnect.php');
  if (!$con->userLevel()==1) {
    header('Location: ../public');
  }
        $page_url = null;
        $arr_url = array($page_url);
        //routes
        function getPage()
        {
          $titlepage = '| Admin';
          if(isset($_GET['page'])){
            if($_GET['page'] == "questions"){
              $page_url = "../app/views/admin/questions/index.php";
              $titlepage='| Questions';
            }          
            else if($_GET['page'] == "subjects"){
              $page_url = "../app/views/admin/subjects/index.php";
              $titlepage='| Questions';
            }          
            else if($_GET['page'] == "topics"){
              $page_url = "../app/views/admin/topics/index.php";
              $titlepage='| Topics';
            }
            else if($_GET['page'] == "guidelines"){
              $page_url = "../app/views/admin/guidelines/index.php";
              $titlepage='| Guidelines';
            }
            else if($_GET['page'] == "users"){
              $page_url = "../app/views/admin/users/index.php";
              $titlepage='| Users';
            }
            else if($_GET['page'] == "news"){
              $page_url = "../app/views/admin/news/index.php";
              $titlepage='| News';
            }
            else if($_GET['page'] == "home"){
              $page_url = "../app/views/index.php";
              $titlepage='| Admin';
            }
            else{
              $page_url = "admin.php";
            }
            require_once($page_url);
          }
          else{
            require_once("feedback.php");
          }
        }


        function breadcrumbs($separator = ' > ', $home = 'Home') {
          $url = $_SERVER['REQUEST_URI'];
        if (isset($_GET['page'])) {
          $url= $_GET['page'];
          # code...
        }

        $path = array_filter(explode('/', parse_url($url, PHP_URL_PATH)));
        $base_url = "http://". $_SERVER['HTTP_HOST'] . "/testmock/public/";
        $breadcrumbs = array("<li><i class='fa fa-dashboard'></i><a href=\"$base_url\">$home</a></li>");
        $tmp = array_keys($path);
        $last = end($tmp);

        foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(array('.php', '_'), Array('', ' '), $crumb));
        if ($x != $last){
        $breadcrumbs[] = '<li><a href="'.$base_url.$crumb.'">'.$title.'</a></li>';
        }else{
        $breadcrumbs[] = $title;
        }
        }

        return implode($separator, $breadcrumbs);
        }
      ?>  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iMock <?php if(isset($titlepage)) echo $titlepage; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="favicon16.png">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="public/dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/datatables/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="plugins/datatables/css/jquery.dataTables_themeroller.css">
  <link rel="stylesheet" type="text/css" href="plugins/datatables/css/jquery.dataTables.css">
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">
    <!-- NAVBARTOP -->
    <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>iMk</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>iMock</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="?page=home">Home</a></li>
            <li><a href="{{ url('/news') }}">News</a></li>
            <li><a href="{{ url('/about') }}">About Us</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> -->
        </div>
        <!-- /.navbar-collapse -->

      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <li>
            <!-- USERNAME/LOGOUT -->
            <a href="../includes/logout.php">
                <i class="fa fa-fw fa-power-off"></i> LOGOUT
            </a>
            <!-- /USERNAME/LOGOUT -->
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <!-- /NAVBARTOP -->
    <!-- =============================================== -->
    <!-- SideBarr Here -->
    <aside class="main-sidebar control-sidebar-dark">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <!-- <div class="pull-left image"> -->
            <!-- <img src="{{asset('assets/dist/img/user2-160x160.png')}}" class="img-circle" alt="User Image"> -->
          <!-- </div> -->
          <!-- <div class="pull-left info">
            <p>Jaypee Bautista</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
          </div><br><br><br> -->
        </div>
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="?page=questions">
              <i class="fa fa-book"></i> <span>Question</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=subjects">
              <i class="fa fa-plus-circle"></i> <span>Subject</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=topics">
              <i class="fa fa-plus-circle"></i> <span>Topic</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=users">
              <i class="fa fa-users"></i> <span>User</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=guidelines">
              <i class="fa fa-sticky-note-o"></i> <span>Guidelines</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=news">
              <i class="fa fa-newspaper-o"></i> <span>News</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=reports">
              <i class="fa fa-bar-chart"></i> <span>Report</span>
              </span>
            </a>
          </li>
      </ul>
    </section>
      <!-- /.sidebar -->
  </aside>
    <!-- End Side Bar Here -->
    <!-- Full Width Column -->
     <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Admin
          <small>Dashboard</small>
        </h1>
        <ol class="breadcrumb">
          <?php echo breadcrumbs(); ?>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <?php getPage(); ?>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
<!-- ./wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1
    </div>
    <strong>Copyright &copy;2016 <a href="#">J&J</a>.</strong> All rights reserved.
  </footer>
<!-- jQuery 2.2.3 -->
<!-- <script src="../../../../public/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/routes.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
