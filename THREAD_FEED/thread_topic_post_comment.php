<?php include "Includes/dbconnect.php" ?>
<?php
include('../LOGIN-SIGNUP/session.php');
?>
<script language="javascript">
window.location.href = "thread_topics_post.php?thread_id=<?php echo $thread_id;?>&id=<?php echo $id; ?>"
</script>

<?php
$count=0;
	if (isset($_REQUEST['submit'])) {
		$login_user_id=$user_id;
		$main_id=($_REQUEST['topic_id']);
		$thread_id=($_REQUEST['thread_id']);
		$comment=($_REQUEST['cinsert']);
		$comment_topic_id=$_REQUEST['topic_id'];
		$query12="INSERT INTO thread_topic_post (topic_id,content,topic_cat_id,user_id) VALUES ($comment_topic_id,'$comment',$thread_id,$user_id);";
		$result1=mysqli_query($connection,$query12);
		$query3="SELECT post_count FROM thread_topic WHERE topic_id=$main_id;";
		$result3=mysqli_query($connection,$query3);
		while($row=mysqli_fetch_assoc($result3)) {
			$count = $row['post_count'];

				$count++;

		}
		$query12="UPDATE thread_topic SET post_count=$count WHERE topic_id=$main_id;";
		$result1=mysqli_query($connection,$query12);

	}
	header("location:thread_topic_post.php?topic_id=$main_id&thread_id=$thread_id");
		?>
