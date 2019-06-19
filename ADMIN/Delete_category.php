<?php include "includes/dbconnect.php"; ?>

<?php
$cat_id=$_REQUEST['category_id'];
$query="DELETE FROM category WHERE category_id = {$cat_id};";
$result=mysqli_query($connection,$query);
 ?>
     <script language="javascript">
         window.location.href = "All_Category.php"
     </script>
