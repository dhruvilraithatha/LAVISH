<?php include "includes/dbconnect.php"; ?>

<?php
// echo "<script type='text/javascript'>alert('blah');</script>";
// if(isset($_REQUEST['like']))
// {
// echo "<script type='text/javascript'>alert(\"$error\");</script>";
//function add_like($id,$like_count)
//{
$post_id=$_REQUEST['id'];
$post_like_count=$_REQUEST['like_count'];
$post_like_count++;
$query_for_incrementing_like="UPDATE post SET post_likes_count=$post_like_count WHERE post_id=$post_id;";
$result_for_incrementing_like=mysqli_query($connection,$query_for_incrementing_like);

if ($query_for_incrementing_like) {
  $a=mysqli_error($connection);
$a=$post_id;
}

else {
}

?>
<script type="text/javascript">
var msg ="<?php echo $a?>";
return msg;
</script>
