<?php include "includes/dbconnect.php"; ?>

<?php
$id=$_REQUEST['id'];
$dis_id=$_REQUEST['dis_id'];
$query="DELETE FROM thread_topic_post WHERE thread_topic_post_id = $id;";
$result=mysqli_query($connection,$query);
 ?>
     <script language="javascript">
         window.location.href = "discussion.php?id=<?php echo $dis_id; ?>"
     </script>
