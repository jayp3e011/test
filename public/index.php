<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iMock | Home</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/green.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    /*background-image: url('http://boletinpatron.com/wp-content/uploads/2015/01/ExamenesEnAndalucia.jpg');background-size: cover;opacity: 0.5;background-color: green;*/

    .background{
      background:url('http://boletinpatron.com/wp-content/uploads/2015/01/ExamenesEnAndalucia.jpg');
      background-size: cover;
      position: relative;
    }

    .layer {
        background-color: rgba(248, 247, 216, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .login-box{
      margin-top: 50px;
    }     

    .register-box{
      margin-top: 50px;
    }    

    a{
      color:#00a65a;
    }
  </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
  <div class="wrapper">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="../../index2.html" class="navbar-brand"><b>i</b>MOCK</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper background">
      <div class="container layer">

      <?php //require_once("../app/views/login.php"); ?>
      <?php require_once("../app/views/register.php"); ?>

        
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="#">iMock | AMA Capstone</a>.</strong> All rights
        reserved.
      </div>
      <!-- /.container -->
    </footer>
  </div>
  <!-- ./wrapper -->


  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="plugins/fastclick/fastclick.js"></script>
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/demo.js"></script>
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
