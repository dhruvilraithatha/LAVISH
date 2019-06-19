<?php include "../dbconnect.php" ?>
<?php include('../../../LOGIN-SIGNUP/session.php'); ?>
<?php
      $request_id=$_REQUEST['request_id'];
      $query_for_selecting_data_from_request_id="SELECT * FROM friend_request WHERE request_id=$request_id;";
      $result_for_selecting_data_from_request_id=mysqli_query($connection,$query_for_selecting_data_from_request_id);
      while ($row=mysqli_fetch_assoc($result_for_selecting_data_from_request_id)) {
        $user_id_of_the_current_user=$row['friend_id'];
        $friend_id=$row['user_id'];
      }
        array_push($array_for_storing_my_friend,$friend_id);
        $friends_array=implode(",",$array_for_storing_my_friend);
      mysqli_real_escape_string($connection,$friends_array);
      $str1=trim($friends_array,',');
      //echo $str1 ."<br>";
      $query_for_updating_freinds_array="UPDATE user SET friend_array='$str1' WHERE user_id=$user_id_of_the_current_user;";
      $result_for_updating_freinds_array=mysqli_query($connection,$query_for_updating_freinds_array);
      $query_for_selecting_friends_array_of_requestor="SELECT friend_array FROM user WHERE user_id=$friend_id;";
      $result_for_selecting_friends_array_of_requestor=mysqli_query($connection,$query_for_selecting_friends_array_of_requestor);
      while($row2=mysqli_fetch_assoc($result_for_selecting_friends_array_of_requestor))
      {
        $temp_for_friend_array_of_requestor=$row2['friend_array'];
      }
      $array_for_storing_friend_of_requestor=array();
      $array_for_storing_friend_of_requestor=explode(',',$temp_for_friend_array_of_requestor);
      array_push($array_for_storing_friend_of_requestor,$user_id_of_the_current_user);
      $requestor_friends_array=implode(",",$array_for_storing_friend_of_requestor);
      mysqli_real_escape_string($connection,$requestor_friends_array);
      $str2=trim($requestor_friends_array,',');
      //echo $str2;
      $query_for_updating_freinds_array_of_requestor="UPDATE user SET friend_array='$str2' WHERE user_id=$friend_id;";
      $result_for_updating_freinds_array_of_requestor=mysqli_query($connection,$query_for_updating_freinds_array_of_requestor);
      $query_for_deleting_request="DELETE FROM `friend_request` WHERE `friend_request`.`request_id` = $request_id;";
      $result_for_deleting_request=mysqli_query($connection,$query_for_deleting_request);

?>
<script language="javascript">
window.location.href = "../../myfriends.php"

</script>
