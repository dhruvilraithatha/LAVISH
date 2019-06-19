<?php include "../LOGIN-SIGNUP/ADMIN/login.php";?>
<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.php" class="logo"><span>L A V I S H</span><i class="zmdi zmdi-layers"></i></a>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">

            <!-- Page title -->
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <button class="button-menu-mobile open-left">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                </li>
                <li>
                    <h4 class="page-title">Dashboard</h4>
                </li>
            </ul>

            <!-- Right(Notification and Searchbox -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <!-- Notification -->
                    <div class="notification-box">
                        <ul class="list-inline m-b-0">
                            <li>
                                <a href="javascript:void(0);" class="right-bar-toggle">
                                    <i class="zmdi zmdi-notifications-none"></i>
                                </a>
                                <div class="noti-dot">
                                    <span class="dot"></span>
                                    <span class="pulse"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Notification bar -->
                </li>
                <li class="hidden-xs">
                    <form role="search" class="app-search">
                        <input type="text" placeholder="Search..."
                               class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>

        </div><!-- end container -->
    </div><!-- end navbar -->
</div>
<!-- Top Bar End -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#"><?php echo $_SESSION['admin_name'];?></a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="#" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="../LOGIN-SIGNUP/ADMIN/logout.php" class="text-custom">
                        <i class="zmdi zmdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End User -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
              <li class="text-muted menu-title">Navigation</li>

                <li>
                    <a href="index.php" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> News </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="Add News.php">Add News</a></li>
                        <li><a href="All News.php">View News</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                      <li><a href="Add_Category.php">Add New Category</a></li>
                        <li><a href="All_Category.php">All Category</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Thread </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="Add_Thread.php">Add Thread</a></li>
                        <li><a href="All_Thread.php">All Threads</a></li>
                        <li><a href="Add_Topic.php">Add Topic</a></li>
                        <li><a href="All_Topic.php">All Topics</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> Friend Feed </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="All_Users.php">View Users</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-layers"></i><span> Groups </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="All Groups.php">All Groups</a></li>
                        <li><a href="Delete Groups.php">Delete Groups</a></li>


                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->
