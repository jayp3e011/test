<?php
  include_once('app/models/conf.php');
  if (!intval($_SESSION['level'])==0) {
    header('Location: /test/public');
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
		<!-- Nav -->
		<?php include_once 'layout/student.php'; ?>		
		<!-- Routes -->
		<?php
        //routes
        if(isset($_GET['page'])){
          if($_GET['page'] == "quiz"){
            $page_url = "app/views/error404.php";
          }          
          else if($_GET['page'] == "take"){
            $page_url = "app/views/takeExam.php";
          }          
          else if($_GET['page'] == "results"){
            $page_url = "app/views/error404.php";
          }
          else if($_GET['page'] == "feedback"){
            $page_url = "app/views/error404.php";
          }
          else if($_GET['page'] == "news"){
            $page_url = "app/views/error404.php";
          }
          else{
            $page_url = "app/views/error404.php";
          }
          require_once($page_url);
        }
        else{
          require_once("app/views/error404.php");
        }
      ?>  
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 1.1
		</div>
		<strong>Copyright &copy;2016 <a href="#">J&J</a>.</strong> All rights reserved.
	</footer>
<!-- Scripts and Footer -->
<?php include_once 'layout/footer.php'; ?>
</body>
</html>
