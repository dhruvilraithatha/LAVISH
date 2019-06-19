<?php include "includes/dbconnect.php"; ?>
<?php

    $email=$_GET['email'];
    $validation_code=$_GET['code'];
    $query="UPDATE user SET active=1,validation_code=0 WHERE email='$email';";
    $result=mysqli_query($connection,$query);
    if($result)
    {?>

      <!DOCTYPE html
      <html lang="en" >
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
      									Sign In To Admin
      								</h3>
      							</div>
      							<form class="m-login__form m-form" action="../login-4.php" method="post">
      								<div class="form-group m-form__group">
      									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" value="Your Account Has Been Activated." disabled>
      								</div>
      								<div class="m-login__form-action">
      									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" name="submit">
      										Login To use L A V I S H.
      									</button>
      								</div>
      							</form>
      						</div>



      					</div>
      				</div>
      			</div>
      		</div>
      		<script src="vendors.bundle.js" type="text/javascript"></script>
      		<script src="scripts.bundle.js" type="text/javascript"></script>
      		<!--end::Base Scripts -->
      		<!--begin::Page Snippets -->
      		<script src="login.js" type="text/javascript"></script>
      		<!--end::Page Snippets -->
      	</body>
      	<!-- end::Body -->
      </html>

<?php
    }

    else {
      echo mysqli_error($connection);
    }

?>
