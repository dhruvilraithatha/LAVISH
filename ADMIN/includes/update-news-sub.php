<?php include "dbconnect.php" ?>
<?php
        if(isset($_POST['submitu']))
        {
          $newsid=$_REQUEST['id'];
          $newsname=mysqli_real_escape_string($connection,$_POST['n_name']);
          $newsauthor=$_POST['n_author'];
          $newsimage=$_POST['n_image'];
          $newscontent=$_POST['n_content'];
          $newstags=$_POST['n_tags'];
          $catselect=$_POST['catselect'];
          $newstags=$_POST['n_tags'];
          $date=date('d-m-Y');



          mysqli_real_escape_string($connection,$newsname);
          mysqli_real_escape_string($connection,$newsauthor);
          mysqli_real_escape_string($connection,$newsimage);
          mysqli_real_escape_string($connection,$newscontent);
          mysqli_real_escape_string($connection,$catselect);
          mysqli_real_escape_string($connection,$newstags);


          $query="UPDATE news SET news_name='$newsname',news_author='$newsauthor',news_post_date='$date',category_id=$catselect,news_image='$newsimage',news_content='$newscontent',news_tags='$newstags'
           WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);


        }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">
        window.location.href = "../All News.php"
    </script>

  </head>
  <body>

  </body>
</html>
