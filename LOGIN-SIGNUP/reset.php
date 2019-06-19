<?php include "../includes/dbconnect.php";   ?>
<?php include "functions.php";   ?>
<?php
    $errors=[];
    $email=$_GET['email'];
    $validation_code=$_GET['code'];
    $query_for_selecting_user="SELECT * FROM user WHERE email='$email' AND validation_code='$validation_code'";
    $result_for_selecting_user=mysqli_query($connection,$query_for_selecting_user);
    $rows=mysqli_num_rows($result_for_selecting_user);
    if($rows == 1)
    {

    if(isset($_POST['submit']))
    {
      $password=$_POST['password'];
      $password2=$_POST['password2'];
      if($password != $password2)
      {
        $errors[]="Your Password Doesn't Match";
      }
      else {
          $query_for_updating_user="UPDATE user SET password='$password' WHERE email='$email'";
          $result=mysqli_query($connection,$query_for_updating_user);
          ?>
          <script type="text/javascript">
          alert("Your Password has been Changed Sucessfully");
          </script>
          <?php
          redirect("../login-4.php");
      }
    }
  }
  else {
    $errors[]="Invalid Email";
  }

  foreach ($errors as $error) {
  echo $error;
  }

 ?>


 <?php
 if(isset($_SESSION['login_user'])){
 header("location: FRIEND_FEED/profilepage.php");
 }
 ?>
 <!DOCTYPE html
 <html lang="en" >
 	<!-- begin::Head -->
 	<head>
 		<meta charset="utf-8" />
 		<title>
 	L A V I S H | Login Page - 4
 		</title>
 		<meta name="description" content="Latest updates and statistic charts">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<!--begin::Web font -->
 		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
 		<script>
           WebFont.load({
             google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
             active: function() {
                 sessionStorage.fonts = true;
             }
           });
 		</script>
 		<!--end::Web font -->
 		<!--begin::Base Styles -->
 		<link href="vendors.bundle.css" rel="stylesheet" type="text/css" />
 		<link href="style.bundle.css" rel="stylesheet" type="text/css" />
 		<!--end::Base Styles -->
 		<link rel="shortcut icon" href="favicon.ico" />
 	</head>
 	<!-- end::Head -->
 	<!-- end::Body -->
 	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
 		<!-- begin:: Page -->
 		<div class="m-grid m-grid--hor m-grid--root m-page">
 			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(bg-2.jpg);">
 				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
 					<div class="m-login__container">
 						<div class="m-login__logo">
 							<a href="#">
 								<img src="logo-1.png" >
 							</a>
 						</div>
 						<div class="m-login__signin">
 							<div class="m-login__head">
 								<h3 class="m-login__title">
 									Password Reset
 								</h3>
 							</div>
 							<form class="m-login__form m-form" method="post">
 								<div class="form-group m-form__group">
 									<input class="form-control m-input" type="password" placeholder="Enter New Password" name="password" autocomplete="off" required>
 								</div>
 								<div class="form-group m-form__group">
 									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Re-Enter New Password" name="password2" required>
 								</div>

 								<div class="m-login__form-action">
 									<button  class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" name="submit">
 										Change Password
 									</button>
 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 		<!-- end:: Page -->
 		<!--begin::Base Scripts -->
 		<script src="vendors.bundle.js" type="text/javascript"></script>
 		<script src="scripts.bundle.js" type="text/javascript"></script>
 		<!--end::Base Scripts -->
 		<!--begin::Page Snippets -->
 		<script src="login.js" type="text/javascript"></script>
 		<!--end::Page Snippets -->
 	</body>
 	<!-- end::Body -->
 </html>
