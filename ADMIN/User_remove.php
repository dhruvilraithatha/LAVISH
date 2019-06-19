<?php include "includes/dbconnect.php"; ?>

<?php
if (isset($_REQUEST['id'])) {
  echo "HELLo";
}
$user_id=$_REQUEST['id'];
$query="DELETE FROM user WHERE user_id = {$user_id};";
$result=mysqli_query($connection,$query)

 ?>
     <script language="javascript">
         window.location.href = "All_USERS.php"
     </script>
