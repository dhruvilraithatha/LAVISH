<?php include "includes/dbconnect.php"; ?>
<?php include "functions.php"; ?>
<?php include "session.php"; ?>
<?php

if($_GET['type']=='resend')
{

  $email = $_SESSION['email'];
  $validation = $_SESSION['validation_code'];
  $msg="Please Click the Link Below To Activate Your Account
  http://localhost/lavish/lavish/lavish/login-signup/activate.php?email=$email&code=$validation";
  mail($email,'LAVISH Activation Link',$msg);
  ?>
  <script type="text/javascript">
  alert("An Email Has Benn Sent to your Email Account. Please Verify Your Account");
  </script>
  <?php
  redirect("../login-4.php");
}

/////////New User Registration Mail////////////////

if($_GET['type']=='signup')
{
  $email = $_SESSION['email'];
  $validation = $_GET['code'];
  $msg="Please Click the Link Below To Activate Your Account
  http://localhost/lavish/lavish/lavish/login-signup/activate.php?email=$email&code=$validation";
  $send=mail($email,'LAVISH Activation Link',$msg);
  echo "<script type='text/javascript'>
  alert('An Email Has Benn Sent to your Email Account. Please Verify Your Account');
  </script>";
  if ($send) {
    redirect("../login-4.php");
  }
  else {
    echo "Failed";
  }
}

/////////Forgot Password Mail////////////////


if($_GET['type']=='forgot')
{
  $email=$_POST['email'];
  $validation_code=token_generator();
  $query="UPDATE user SET validation_code='$validation_code'";
  $result=mysqli_query($connection,$query);
  $msg="Please Click the Link Below To Reset Your Password
  http://localhost/lavish/lavish/lavish/login-signup/reset.php?email=$email&code=$validation_code";
  mail($email,'LAVISH Password Reset Link',$msg);
  redirect("../login-4.php");
}
?>
