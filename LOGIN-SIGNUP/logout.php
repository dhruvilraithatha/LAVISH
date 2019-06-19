<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>

<?php
$query_for_changing_status_of_the_user_to_ofline="UPDATE user SET login_status2=0 WHERE user_id=$user_id;";
$result_for_changing_status_of_the_user_to_ofline=mysqli_query($connection,$query_for_changing_status_of_the_user_to_ofline);
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../login-4.php"); // Redirecting To Home Page
}
?>
