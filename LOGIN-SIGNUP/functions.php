<?php include "includes/dbconnect.php"; ?>
<?php
function redirect($location)
{
  return header("Location: {$location}");
}

function query($query)
{
  global $connection;
  return mysqli_query($connection,$query);

}

function row_count($result)
{
return mysqli_num_rows($result);

}



function token_generator()
{
  $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
  return $token;
}

function email_exists($email)
{
  global $connection;
  $query = "SELECT * FROM `user` WHERE `email` LIKE '$email'";
  $result = mysqli_query($connection,$query);
  $rows=mysqli_num_rows($result);
  if($rows==1)
  {
    return true;
  }
  else
  {
    return false;
  }
}


?>
