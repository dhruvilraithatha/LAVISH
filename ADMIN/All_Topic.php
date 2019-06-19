<?php include "includes/dbconnect.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>LAVISH ADMIN</title>
        <!-- Sweet Alert css -->
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
          <?php include "includes/navbar.php"; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                          <div class="col-lg-12">
                          <div class="card-box">

                                  <div class="dropdown pull-right">
                                      <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                          <i class="zmdi zmdi-more-vert"></i>
                                      </a>
                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Action</a></li>
                                          <li><a href="#">Another action</a></li>
                                          <li><a href="#">Something else here</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a></li>
                                      </ul>
                                  </div>

                            <h4 class="header-title m-t-0 m-b-30">All News</h4>
                              <table class="table table-striped m-0">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>Id</th>
                                              <th>Name</th>
                                              <th>Action</th>
                                              <th>Disscussion</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $count=1;
                                        $query="SELECT * FROM thread_topic;";
                                        $result=mysqli_query($connection,$query);
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                          $topic_id=$row['topic_id'];
                                          $topic_name=$row['topic_name'];
                                          $topic_type=$row['thread_topic_type'];
                                          ?>
                                          <tr >
                                              <th scope="row"><?php echo $count; ?></th>
                                              <td><?php echo $topic_id; ?></td>
                                              <td><?php echo $topic_name; ?></td>
                                              <td class="actions">
                                                <?php
                                                if($topic_type==0)
                                                {?>
                                                <a href="Update_topic.php?topicid=<?php echo $topic_id; ?>">
                                                  <i class="fa fa-pencil " style="color:#21b61e"></i>
                                                </a>
                                              <?php }
                                                ?>
                                                <a href="Delete_topic.php?topicid=<?php echo $topic_id; ?>">
                                                  <i class="fa fa-trash-o" style="color:#ff5b5b; padding-left:9px;"></i>
                                                </a>
                                              </td>
                                              <td>
                                                <a href="discussion.php?id=<?php echo $topic_id;?>" class="btn btn-danger waves-effect waves-light btn-sm">
                                                   Show Disscussion
                                                </a>
                                              </td>
                                          </tr>

                                        <?php
                                        $count+=1;

                                      }
                                         ?>

                                      </tbody>
                                  </table>


                          </div>
                          </div><!-- end col -->

                          </div>
                        </div>
                        <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    L A V I S H &nbsp; A D M I N
                </footer>

            </div>
            <!-- End content-page -->


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
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!--Sweet Alert .js-->
        <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
