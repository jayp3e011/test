<!-- NAVBARTOP -->
    <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>iMc</b></span>
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
            <a href="?page=question">
              <i class="fa fa-book"></i> <span>Question</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=subject">
              <i class="fa fa-plus-circle"></i> <span>Subject</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=topic">
              <i class="fa fa-plus-circle"></i> <span>Topic</span>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="?page=user">
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
            <a href="?page=report">
              <i class="fa fa-bar-chart"></i> <span>Report</span>
              </span>
            </a>
          </li>
      </ul>
    </section>
      <!-- /.sidebar -->
  </aside>
  <!-- End Side Bar Here -->