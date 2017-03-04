 <?php
  include_once('app/models/conf.php');
  if (!intval($_SESSION['level'])==1) {
    header('Location: /test/public');
  }
        $page_url = null;
        $arr_url = array($page_url);
        //routes
        function getPage()
        {
          $titlepage = '| Admin';
          if(isset($_GET['page'])){
            if($_GET['page'] == "exam"){
              $page_url = "./app/views/exam.php";
            }          
            else if($_GET['page'] == "subject"){
              $page_url = "./app/views/subject.php";
            }
            else if($_GET['page'] == "user"){
              $page_url = "./app/views/user.php";
            }
            else if($_GET['page'] == "topic"){
              $page_url = "./app/views/topic.php";
            }
            else if($_GET['page'] == "news"){
              $page_url = "./app/views/news.php";
            }
            else if($_GET['page'] == "feedback"){
              $page_url = "./app/views/feedback.php";
            }
            else if($_GET['page'] == "guidelines"){
              $page_url = "./app/views/guidelines.php";
            }
            else if($_GET['page'] == "logout"){
              $page_url = "./app/controllers/php/logout.php";
            }
            else{
              $page_url = "./app/views/error404.php";
            }
            require_once($page_url);
          }
          else{
            require_once(getcwd()."/app/views/feedback.php");
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
  <?php include_once 'layout/header.php'; ?>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper"> 
    <?php include_once 'layout/admin.php'; ?>
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
  <?php include_once 'layout/footer.php'; ?>
</body>
</html>
