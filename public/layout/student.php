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
            <li><a href="{{ url('/home') }}">Home</a></li>
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
            <a href="app/models/logout.php">
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
      <!-- <div class="user-panel"> -->
        <!-- <div class="pull-left image"> -->
          <!-- <img src="{{asset('assets/dist/img/user2-160x160.png')}}" class="img-circle" alt="User Image"> -->
        <!-- </div> -->
        <!-- <div class="pull-left info"> -->
          <!-- <p>Jaypee Bautista</p> -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Student</a> -->
        <!-- </div> -->
      <!-- </div> -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="?page=quiz">
            <i class="fa fa-edit"></i> <span>Quiz</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./app/views/takeExam.php" target="_blank">Exam</a></li>
            <li><a href="?page=results"><i class="fa fa-circle-o"></i> Status</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="?page=feedback">
            <i class="fa fa-feed"></i> <span>Feedback</span>
            </span>
          </a>
       </li>
        <li class="treeview">
          <a href="app/models/logout.php">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
            </span>
          </a>
       </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <!-- End Side Bar Here -->