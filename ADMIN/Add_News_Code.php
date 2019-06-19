<?php include "includes/dbconnect.php" ?>
<?php
        if(isset($_POST['submit']))
        {
          $newsname=mysqli_real_escape_string($connection,$_POST['n_name']);
          $newsauthor=$_POST['n_author'];
          $newsimage=$_POST['n_image'];
          $newscontent=$_POST['n_content'];
          $newstags=$_POST['n_tags'];
          $catselect=$_POST['catselect'];
          $date=date('d-m-Y');
          //$date_str=substr($date,0,11);

          mysqli_real_escape_string($connection,$newsname);
          mysqli_real_escape_string($connection,$newsauthor);
          mysqli_real_escape_string($connection,$newsimage);
          mysqli_real_escape_string($connection,$newscontent);
          mysqli_real_escape_string($connection,$catselect);

          $query="INSERT INTO news (news_name,news_author,news_post_date,category_id,news_image,news_content,news_tags)
           VALUES ('$newsname','$newsauthor','$date',$catselect,'$newsimage','$newscontent','$newstags');";
          $result=mysqli_query($connection,$query);


        }
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

   </body>
 </html>
