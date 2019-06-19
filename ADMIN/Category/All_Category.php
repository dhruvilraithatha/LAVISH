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
        <title>Adminto - Responsive Admin Dashboard Template</title>
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
                                              <th> Name</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $count=1;
                                        $query="SELECT * FROM category;";
                                        $result=mysqli_query($connection,$query);
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                          $category_id=$row['category_id'];
                                          $category_name=$row['category_name'];
                                          ?>

                                          <tr >
                                              <th scope="row"><?php echo $count; ?></th>
                                              <td><?php echo $category_id; ?></td>
                                              <td><?php echo $category_name; ?></td>

                                              <td class="actions">

                                                <a href="Update_Category.php?category_id=<?php echo $category_id; ?>"><i class="fa fa-pencil " style="color:#21b61e"></i></a>
                                              <a href="Delete_Category.php?category_id=<?php echo $category_id; ?>"><i class="fa fa-trash-o" style="color:#ff5b5b; padding-left:9px;"></i></a></td>

                                          </tr>

                                        <?php
                                        $count+=1;

                                      }
                                         ?>
                                         <form method="get" action="Delete News.php">
                                         <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="sa-params" name="deletebtn">Click me</button>
</form>
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
                    2016 - 2017 © Adminto.
                </footer>

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
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
