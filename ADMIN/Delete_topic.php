<?php include "includes/dbconnect.php"; ?>

<?php
$id=$_REQUEST['topicid'];
$query="DELETE FROM thread_topic WHERE topic_id = $id;";
$result=mysqli_query($connection,$query);
 ?>
     <script language="javascript">
         window.location.href = "All_Topic.php"
     </script>
