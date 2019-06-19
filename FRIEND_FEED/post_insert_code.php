<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>

<?php

  $post_content=$_REQUEST['content'];
  $post_by=$user_id;
  //$newtext = wordwrap($post_content, 70, "<br />\n");
  //$newtext = wordwrap( $post_content, 80, "<br>", 1);
  $newtext=$post_content;

  mysqli_real_escape_string($connection,$newtext);
  $query_for_inserting_post_status="INSERT INTO post (post_by,post_content) VALUES ($post_by,'$newtext');";
  $result_for_inserting_post_status=mysqli_query($connection,$query_for_inserting_post_status);

 ?>
