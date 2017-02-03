<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iMock</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/green.css">
  <link rel="stylesheet" href="dist/css/app.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="?page=login" class="navbar-brand"><b>i</b>MOCK</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="?page=login">Login</a></li>
              <li><a href="?page=register">Register</a></li>
              <li><a href="?page=exam">Exam</a></li>
              <li><a href="?page=subject">Subject</a></li>
              <li><a href="?page=question">Question</a></li>
              <li><a href="?page=topic">Topic</a></li>
              <li><a href="?page=quiz">Quiz</a></li>
              <li><a href="?page=news">News</a></li>
              <li><a href="?page=feedback">Feedback</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->

      <?php
        //routes
        if(isset($_GET['page'])){
          if($_GET['page'] == "login"){
            $page_url = "../app/views/login.php";
          }          
          else if($_GET['page'] == "register"){
            $page_url = "../app/views/register.php";
          }          
          else if($_GET['page'] == "exam"){
            $page_url = "../app/views/exam.php";
          }          
          else if($_GET['page'] == "subject"){
            $page_url = "../app/views/subject.php";
          }
          else{
            $page_url = "../app/views/error404.php";
          }
          require_once($page_url);
        }
        else{
          require_once("../app/views/login.php");
        }
      ?>        



<!--     <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">iMock | AMA Capstone</a>.</strong> All rights
        reserved.
      </div>
    </footer> -->
  </div>
  <!-- ./wrapper -->


  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="plugins/fastclick/fastclick.js"></script>
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/demo.js"></script>
  <!-- controllers -->
  <script src="../app/controllers/exam.js"></script>
  <!-- plugins -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>
</html>
