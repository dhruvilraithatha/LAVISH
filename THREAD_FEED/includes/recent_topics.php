<ul class="widget w-featured-topics">
  <?php
    $featured_post_array=array();
    $i=0;
    $query="SELECT * FROM `thread_topic` ORDER BY `thread_topic`.`topic_id` DESC;";
    $result=mysqli_query($connection,$query);

    while ($row=mysqli_fetch_assoc($result)) {
      if ($i == 5) {
        break;
      }
      else{
        $topic_name=$row['topic_name'];
        $thread_id=$row['thread_id'];
            ?>
  <li>
    <div class="content">
      <a href="#" class="h6 title"><?php echo $topic_name; ?></a>
      <div class="forums"><?php
      $query1="SELECT * FROM `thread` WHERE thread_id=$thread_id;";
      $result1=mysqli_query($connection,$query1);
        while ($row=mysqli_fetch_assoc($result1)) {
          echo $row['thread_name'];
                }
       ?></div>
    </div>
  </li>
  <?php
  $i += 1;

}
}

   ?>
</ul>
