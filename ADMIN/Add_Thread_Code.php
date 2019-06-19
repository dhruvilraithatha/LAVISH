<?php include "includes/dbconnect.php" ?>
<?php
        if(isset($_POST['submit']))
        {
          $threadname=strtoupper(mysqli_real_escape_string($connection,$_POST['t_name']));
          $threadinfo=$_POST['t_content'];
          $threadimage=$_POST['t_image'];

          mysqli_real_escape_string($connection,$threadname);
          mysqli_real_escape_string($connection,$threadimage);
          mysqli_real_escape_string($connection,$threadinfo);

          $query="INSERT INTO thread (thread_name,thread_info,thread_image)
           VALUES ('$threadname','$threadinfo','$threadimage');";
          $result=mysqli_query($connection,$query);


        }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <script language="javascript">
     window.location.href = "All_Thread.php"
     </script>
   </head>
   <body>

   </body>
 </html>
