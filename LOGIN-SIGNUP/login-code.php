<?php include "includes/dbconnect.php" ?>
<?php include "functions.php" ?>
<?php
  if (isset($_POST['submit']))
  {
      session_start(); // Starting Session
      $error=''; // Variable To Store Error Message
      if (isset($_POST['submit']))
      {
        if (empty($_POST['email']) || empty($_POST['password']))
        {
          $error = "Username or Password is invalid";
        }
        else
        {

          $username=$_REQUEST['email'];
          $password=$_REQUEST['password'];
          $connection = mysqli_connect("localhost", "root", "",'lavish');
          $username = stripslashes($username);
          $password = stripslashes($password);
          $query = mysqli_query($connection,"select * from user where password='$password' AND email='$username'");
          while ($row=mysqli_fetch_assoc($query)) {
          $_SESSION['user_id']=$row['user_id'];
          $_SESSION['validation_code']=$row['validation_code'];
          $active=$row['active'];
          echo "Kishan";

        }
      $query = mysqli_query($connection,"select * from user where password='$password' AND email='$username'");
      $rows = mysqli_num_rows($query);
      if ($rows == 1)
      {
        if($active == 1)
        {
        $_SESSION['login_user']=$username; // Initializing Session
        header("location: ../FRIEND_FEED/ProfilePage.php"); // Redirecting To Other Page
        }
        else {
          $_SESSION['login_user']=$username;
          $_SESSION['email']=$username;
          redirect("../activateresend.php");
        }
      }
      else
      {
        $error = "Username or Password is invalid";
        echo $error;
      }
      mysqli_close($connection); // Closing Connection
    }
  }
}
else
{
  echo "IN ELSE";
  session_start(); // Starting Session
  $error=''; // Variable To Store Error Message
  echo "IN ELSE 2";
  $username=$_GET['email'];
  $password=$_GET['password'];
  $connection = mysqli_connect("localhost", "root", "",'lavish');
  $username = stripslashes($username);
  $password = stripslashes($password);
  $query = mysqli_query($connection,"select * from user where password='$password' AND email='$username'");
  while ($row=mysqli_fetch_assoc($query)) {
  $_SESSION['user_id']=$row['user_id'];
  echo $_SESSION['user_id'];
}
$query = mysqli_query($connection,"select * from user where password='$password' AND email='$username'");
$rows = mysqli_num_rows($query);

if ($rows == 1)
{
  $_SESSION['login_user']=$username; // Initializing Session
  header("location: ../FRIEND_FEED/ProfilePage.php"); // Redirecting To Other Page
}
else
{
  $error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}

?>
