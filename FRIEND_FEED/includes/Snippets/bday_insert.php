<?php
include "../dbconnect.php";
include('../../../LOGIN-SIGNUP/session.php');
?>
<?php
  $bday=$_POST['datetimepicker'];
  $bday_year=substr($bday,6,4);
  $bday_month=substr($bday,3,2);
  $bday_day=substr($bday,0,2);
  $bday=$bday_year."-".$bday_month."-".$bday_day;
  $query_for_inserting_bday="UPDATE user SET bday='$bday' WHERE user_id=$user_id;";
  $result_for_inserting_bday=mysqli_query($connection,$query_for_inserting_bday);
?>
