<?php include "includes/dbconnect.php" ?>
<?php
  if(isset($_REQUEST['submit']))
  {
    $topic_name=$_REQUEST['topic_name'];
    $thread_id=$_REQUEST['cat'];
    $thread_topic_type=1;
    $query="INSERT INTO thread_topic (topic_name,thread_id,thread_topic_type) VALUES ('$topic_name',$thread_id,$thread_topic_type);";
    $result=mysqli_query($connection,$query);
    
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">
        window.location.href = "thread_topics.php?id=<?php echo $thread_id; ?>"
    </script>
  </head>
  <body>

  </body>
</html>
