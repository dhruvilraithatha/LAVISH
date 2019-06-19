<?php include "dbconnect.php" ?>
<?php
        if(isset($_POST['submit']))
        {
          $thread_id=$_REQUEST['id'];
          $thread_name=strtoupper(mysqli_real_escape_string($connection,$_POST['t_name']));
          $thread_info=strtoupper(mysqli_real_escape_string($connection,$_POST['t_info']));
          $thread_image=strtoupper(mysqli_real_escape_string($connection,$_POST['t_image']));
          mysqli_real_escape_string($connection,$thread_name);
          mysqli_real_escape_string($connection,$thread_info);
          mysqli_real_escape_string($connection,$thread_image);

          $query="UPDATE thread SET thread_name='$thread_name',thread_info='$thread_info',thread_image='$thread_image' WHERE thread_id=$thread_id;";
          $result=mysqli_query($connection,$query);
        }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">
 window.location.href = "../All_Thread.php"

    </script>

  </head>
  <body>

  </body>
</html>
