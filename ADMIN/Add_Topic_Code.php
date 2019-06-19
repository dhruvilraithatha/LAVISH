<?php include "includes/dbconnect.php" ?>
<?php
        if(isset($_POST['submit']))
        {
          $Topicname=strtoupper(mysqli_real_escape_string($connection,$_POST['t_name']));
          $Topicinfo=$_POST['t_content'];
          $Thread_id=$_POST['catselect'];
          $Topicimage=$_POST['t_image'];
          $Topictype=0;

          mysqli_real_escape_string($connection,$Topicname);
          mysqli_real_escape_string($connection,$Topicimage);
          mysqli_real_escape_string($connection,$Topicinfo);

          $query="INSERT INTO Thread_Topic (Topic_name,Topic_info,Topic_image,thread_id,thread_topic_type)
           VALUES ('$Topicname','$Topicinfo','$Topicimage',$Thread_id,$Topictype);";
          $result=mysqli_query($connection,$query);
          if ($result) {
            echo "Success";
          }
          else {
            echo "Error".mysqli_error($connection);
          }


        }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <script language="javascript">
      window.location.href = "All_Topic.php"
     </script>
   </head>
   <body>

   </body>
 </html>
