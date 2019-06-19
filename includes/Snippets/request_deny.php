<?php include "../dbconnect.php"; ?>
<?php
$request_id_for_deny=$_REQUEST['request_id_for_deny'];
$query_for_denying_friend_request="DELETE FROM `friend_request` WHERE `friend_request`.`request_id` = $request_id_for_deny;";
$result_for_denying_friend_request=mysqli_query($connection,$query_for_denying_friend_request);

?>
<script language="javascript">
window.location.href = "../../myfriends.php"

</script>
