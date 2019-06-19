<?php include "includes/dbconnect.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

          <?php include "includes/navbar.php" ?>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <?php
                    $count_for_news=0;
                    $query_for_total_news="SELECT news_id FROM news;";
                    $result_for_total_news=mysqli_query($connection,$query_for_total_news);
                    while($row=mysqli_fetch_assoc($result_for_total_news))
                    {
                      $count_for_news++;
                    }
                    ?>
                        <div class="row">
                          <div class="row">
                              <div class="col-lg-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="text-custom" data-plugin="counterup"><?php echo $count_for_news; ?></h2>
                                          <h5>News</h5>
                                      </div>
                                  </div>
                              </div>
                              <?php
                              $count_for_thread=0;
                              $query_for_total_news="SELECT thread_id FROM thread;";
                              $result_for_total_news=mysqli_query($connection,$query_for_total_news);
                              while($row=mysqli_fetch_assoc($result_for_total_news))
                              {
                                $count_for_thread++;
                              }
                              ?>

                              <div class="col-lg-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="text-pink" data-plugin="counterup"><?php echo $count_for_thread;?></h2>
                                          <h5>Threads</h5>
                                      </div>
                                  </div>
                              </div>
                              <?php
                              $count_for_user=0;
                              $query_for_total_news="SELECT user_id FROM user;";
                              $result_for_total_news=mysqli_query($connection,$query_for_total_news);
                              while($row=mysqli_fetch_assoc($result_for_total_news))
                              {
                                $count_for_user++;
                              }
                              ?>

                              <div class="col-lg-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="text-warning" data-plugin="counterup"><?php echo $count_for_user;?></h2>
                                          <h5>Users</h5>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-lg-3 col-md-6">
                                  <div class="card-box widget-user">
                                      <div class="text-center">
                                          <h2 class="text-info" data-plugin="counterup">14</h2>
                                          <h5>Groups</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>

                        </div>
                        <!-- end row -->
<!--
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                		<div class="card-box">
                                                			<h4 class="header-title m-t-0">Daily Sales</h4>

                                                            <div class="widget-chart text-center">
                                                                <div id="morris-donut-example" style="height: 245px;"></div>
                                                                <ul class="list-inline chart-detail-list m-b-0">
                                                                    <li>
                                                                        <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                                                    </li>
                                                                    <li>
                                                                        <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                                                    </li>
                                                                </ul>
                                                        	</div>
                                                		</div>
                                                    </div>-->
                                                    <!-- end col -->
<!--
                                                    <div class="col-lg-4">
                                                        <div class="card-box">

                                                            <h4 class="header-title m-t-0">Statistics</h4>
                                                            <div id="morris-bar-example" style="height: 280px;"></div>
                                                        </div>
                                                    </div>-->
                                                    <!-- end col -->
<!--
                                                      <div class="col-lg-4">
                                                          <div class="card-box">

                                                              <h4 class="header-title m-t-0">Total Revenue</h4>
                                                              <div id="morris-line-example" style="height: 280px;"></div>
                                                          </div>
                                                        </div>-->
                                                        <!-- end col -->

                                                <!--</div>-->
                                                <!-- end row -->


                    </div>
                     <!-- container -->

                </div>
                 <!-- content -->

                <footer class="footer text-right">
                    L A V I S H&nbsp;&nbsp; A D M I N
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- Counter Up  -->

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
