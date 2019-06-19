<?php include "dbconnect.php"; ?>
<?php include "../functions.php"; ?>
<?php //include "../session.php"; ?>
<?php
$errors=[];
if(isset($_REQUEST['sign-up']))
{
  session_start();
  $uname=$_REQUEST['fullname'];
  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];
  $password2=$_REQUEST['password2'];
  if($password != $password2)
  {
    $errors[]="Password Doesn't Match";
    echo "Password Doesn't Match";
    //redirect("../../login-4.php")
  }
  else {
    if(email_exists($email))
    {
      $errors[]="Email Already Exists";
      echo "Email Already Exists";
    }
    else {
      echo "Not used";
      echo $email;

      mysqli_real_escape_string($connection,$uname);
      mysqli_real_escape_string($connection,$email);
      mysqli_real_escape_string($connection,$password);
      $validation_code = token_generator();
      $query="INSERT INTO user (uname,password,email,validation_code) VALUES ('$uname','$password','$email','$validation_code');";
      $result=mysqli_query($connection,$query);
      if ($result) {
      $_SESSION['email']=$email;
      $_SESSION['password']=$password;
      redirect("../mail.php?type=signup&code=".$validation_code);
      }
    }
  }
  }

?>
