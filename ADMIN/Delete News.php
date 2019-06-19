<?php include "includes/dbconnect.php"; ?>

<?php
if (isset($_REQUEST['archive'])) {
  echo "HELLo";
}
$news_id=$_REQUEST['newsid'];
$query="DELETE FROM news WHERE news_id = {$news_id};";
$result=mysqli_query($connection,$query)

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <script language="javascript">
         window.location.href = "All News.php"
     </script>

   </head>
   <body>
     <a href="All News.php">Go to</a>
   </body>
 </html>
