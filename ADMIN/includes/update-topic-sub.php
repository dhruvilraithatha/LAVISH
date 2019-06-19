<?php include "dbconnect.php" ?>
<?php
        if(isset($_POST['submit']))
        {
          $topic_id=$_REQUEST['id'];
          $topic_name=strtoupper(mysqli_real_escape_string($connection,$_POST['t_name']));
          $topic_info=strtoupper(mysqli_real_escape_string($connection,$_POST['t_info']));
          $topic_image=strtoupper(mysqli_real_escape_string($connection,$_POST['t_image']));
          mysqli_real_escape_string($connection,$topic_name);
          mysqli_real_escape_string($connection,$topic_info);
          mysqli_real_escape_string($connection,$topic_image);

          $query="UPDATE thread_topic SET topic_name='$topic_name',topic_info='$topic_info',topic_image='$topic_image' WHERE topic_id=$topic_id;";
          $result=mysqli_query($connection,$query);
        }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">
 window.location.href = "../All_Topic.php"

    </script>

  </head>
  <body>

  </body>
</html>
