<?php include "includes/dbconnect.php"; ?>
<?php
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from user where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$user_id=$row['user_id'];
$_SESSION['id']=$user_id;
$login_session=$row['uname'];
$_SESSION['username']=$login_session;
$profile_pic="../FRIEND_FEED/".$row['profile_pic'];
$header_photo=$row['header_photo'];
$array_for_storing_my_friends=array();
$temp=$row['friend_array'];
$array_for_storing_my_friend=explode(',',$temp);
$bday=$row['bday'];
$login_status=$row['login_status'];
$query_for_changing_status_of_the_user_to_online="UPDATE user SET login_status2=1 WHERE user_id=$user_id;";
$result_for_changing_status_of_the_user_to_online=mysqli_query($connection,$query_for_changing_status_of_the_user_to_online);
//foreach ($array_for_storing_my_friend as $key ) {
//  echo $key ."<br>";
//}



if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
//header('Location: ../login-4.php'); // Redirecting To Home Page
}
?>
