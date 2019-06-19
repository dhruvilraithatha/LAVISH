<?php include "includes/dbconnect.php" ?>
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
        <!-- form Uploads -->
        <link href="assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />
        <!-- froala css -->
        <link href="froala/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="froala/css/froala_style.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />


        <link href="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
                        <div class="col-sm-12">
                          <div class="card-box">
<?php
$newsid=$_REQUEST['newsid'];
$query="SELECT * FROM news WHERE news_id=$newsid;";
$result=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($result))
{
  $news_name=$row['news_name'];
  $news_image=$row['news_image'];

  $news_author=$row['news_author'];
  $news_content=$row['news_content'];
  $news_category=$row['category_id'];
  $news_tags=$row['news_tags'];
  $news_image=$row['news_image'];

}
 ?>


                            <div class="row">
                              <div class="col-lg-12">
                                <form class="form-horizontal" role="form" method="post" action="includes/update-news-sub.php?id=<?php echo $newsid ?>">
                                            <div class="form-group">
                                                <h3 class="col-md-2">News Name</h3><br><br>
                                                <p align="center">  <div class="col-md-10">
                                                  <input type="text" class="form-control" value="<?php echo $news_name; ?>" name="n_name" required>
                                                </div></p>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="col-md-2">News Content</h3><br><br>
                                                <p align="center"><div class="col-md-10">
                                                    <textarea class="form-control" rows="5" value="" name="n_content" required> <?php echo $news_content; ?></textarea>
                                                </div></p>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="col-md-2">News Author</h3><br><br>
                                                <p align="center">  <div class="col-md-10">
                                                  <input type="text" class="form-control" value="<?php echo $news_author; ?>" name="n_author" required>
                                                </div></p>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="col-md-2">News Tags</h3><br><br>
                                                <p align="center">  <div class="col-md-10">
                                                  <div class="tags-default">
                                                      <input type="text" value="<?php echo $news_tags; ?>" data-role="tagsinput" placeholder="add tags" name="n_tags" required>
                                                  </div>

                                                </div></p>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">


                                            <h3><b>Category</b></h3>
                                            <select class="form-control select2" name="catselect" required>
                                              <?php
                                              $query="SELECT * FROM category WHERE category_id=$news_category;";
                                              $result=mysqli_query($connection,$query);
                                              while($row=mysqli_fetch_assoc($result))
                                              {
                                                $catid=$row['category_id'];
                                                $catname=$row['category_name'];
                                              ?>
                                              <option selected value="<?php echo $catid;?>"><?php echo $catname;?></option>
                                            <?php } ?>
                                                <?php
                                                $query="SELECT * FROM category; ";
                                                $result=mysqli_query($connection,$query);
                                                while($row=mysqli_fetch_assoc($result))
                                                {
                                                  $catid=$row['category_id'];
                                                  $catname=$row['category_name'];
                                                  if ($catid==$news_category) {
                                                    continue;
                                                  }
                                                ?>

                                                    <option value="<?php echo $catid; ?>"><?php echo $catname; ?></option>
                                                  <?php } ?>

                                            </select>
                                                </div>
                                              </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                  <h3 >News Image</h3>

                                                        <input type="file" class="dropify" data-default-file="../N E W S   F E E D/images/<?php echo $news_image;?>"name="n_image"  />
                                                </div>
                                              </div>
                                              <br><br><p align="center"><button type="submit" class="btn btn-lg btn-success btn-rounded w-md waves-effect waves-light m-b-5" name="submitu">Success</button></p>

                                        </form>
                              </div><!-- end col -->


                            </div><!-- end row -->
                          </div>
                        </div><!-- end col -->
                      </div>

                        <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer">
                    2017 © Lavish.
                </footer>

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <?php include "includes/rightsidebar.php" ?>

        </div>
        <!-- END wrapper -->


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
        <!-- Include Editor JS files. -->
        <script type="text/javascript" src="froala/js/froala_editor.pkgd.min.js"></script>

        <!-- Initialize the editor. -->
        <script src="froala.js"> </script>

        <!-- Plugins Js -->
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="assets/plugins/moment/moment.js"></script>
      <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
      <script src="assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
      <script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
      <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>


        <!-- file uploads js -->
        <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>
        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


        <script type="text/javascript">
        $(document).ready(function() {
        $('form').parsley();
        });
        </script>
        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>


        <script>
            var resizefunc = [];

            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>
    </body>
</html>
