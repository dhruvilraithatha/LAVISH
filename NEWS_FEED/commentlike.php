<?php include "Includes/dbconnect.php" ?>
<!DOCTYPE html>
<?php
  $news_id=$_GET['id'];
  $cid=$_GET['comment_id'];
  $query="SELECT comment_likes from comments WHERE comment_id=$cid;";
  $result=mysqli_query($connection,$query);
while ($row=mysqli_fetch_assoc($result)) {
  $likes=$row['comment_likes'];
}
$likes+=1;
$query="UPDATE comments SET comment_likes=$likes WHERE comment_id=$cid;";
$result=mysqli_query($connection,$query);
?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">
        window.location.href = "news-post.php?id=<?php echo $news_id ?>"
    </script>

  </head>
  <body>
     <a href="news-post.php?id=<?php echo $news_id ?>">Go to</a>

  </body>
</html>
