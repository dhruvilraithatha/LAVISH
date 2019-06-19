<?php include "Includes/dbconnect.php" ?>

<?php
	if (isset($_REQUEST['submit'])) {
		$cinsert=($_REQUEST['cinsert']);
		$comment_post_id=$_REQUEST['id'];
		$comment_user_id=$_REQUEST['user_id'];

		$query12="INSERT INTO comments (comment_news_id,comment_content,user_id) VALUES ($comment_post_id,'$cinsert',$comment_user_id);";
		$result1=mysqli_query($connection,$query12);

	}

		?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
        <script language="javascript">
            window.location.href = "news-post.php?id=<?php echo $comment_post_id ?>"
        </script>

      </head>
      <body>
      	<a href="news-post.php?id=<?php echo $comment_post_id ?>">Go to</a>
      </body>
    </html>
