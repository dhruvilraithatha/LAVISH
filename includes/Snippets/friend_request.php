<?php
include "../dbconnect.php";
include('../../../LOGIN-SIGNUP/session.php');

?>
<?php
    $user_to=$_REQUEST['search_user_id'];
    $user_from=$user_id;
    $query_for_sending_friend_request="INSERT INTO friend_request (user_id,friend_id) VALUES ($user_from,$user_to);";
    $result_for_sending_friend_request=mysqli_query($connection,$query_for_sending_friend_request);

?>
<script language="javascript">
window.location.href = "../../friend-search.php"

</script>
