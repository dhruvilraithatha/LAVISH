<?php include "includes/dbconnect.php"; ?>

<?php
$thread_id=$_REQUEST['threadid'];
$query="DELETE FROM thread WHERE thread_id = {$thread_id};";
$result=mysqli_query($connection,$query);
 ?>
     <script language="javascript">
         window.location.href = "All_thread.php"
     </script>
