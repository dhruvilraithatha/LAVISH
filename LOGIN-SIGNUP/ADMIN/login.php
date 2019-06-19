<?php
  //include "../includes/dbconnect.php";
  //$connection=mysqli_connect('localhost','root','','lavish');

  session_start(); // Starting Session
  $error=''; // Variable To Store Error Message
  if (isset($_POST['submit']))
  {
    if (empty($_POST['email']) || empty($_POST['password']))
    {
      $error = "Username or Password is invalid";
      echo $error;
    }
    {
      $username=$_POST['email'];
      $password=$_POST['password'];
      $connection = mysqli_connect("localhost", "root", "",'lavish');
      $username = stripslashes($username);
      $password = stripslashes($password);
      $query = mysqli_query($connection,"select * from admin where admin_password='$password' AND admin_email='$username'");
      while ($row=mysqli_fetch_assoc($query))
      {
        $_SESSION['admin_id']=$row['admin_id'];
        $_SESSION['admin_email']=$row['admin_email'];
        $_SESSION['admin_name']=$row['admin_name'];
        $_SESSION['admin_pic']=$row['admin_pic'];
      }
    $query = mysqli_query($connection,"select * from admin where admin_password='$password' AND admin_email='$username'");
    $rows = mysqli_num_rows($query);
    if ($rows == 1)
      {
        $_SESSION['login_user']=$username; // Initializing Session
        header("location: ../../ADMIN/index.php"); // Redirecting To Other Page
      }
    else
      {
        $error = "Username or Password is invalid";
      }
    mysqli_close($connection); // Closing Connection
    }
  }


?>
