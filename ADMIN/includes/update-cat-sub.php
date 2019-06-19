<?php include "dbconnect.php" ?>
<?php
        if(isset($_POST['submit']))
        {
          $catid=$_REQUEST['id'];
          $catname=strtoupper(mysqli_real_escape_string($connection,$_POST['c_name']));



          mysqli_real_escape_string($connection,$catname);

          $query="UPDATE category SET category_name='$catname' WHERE category_id=$catid;";
          $result=mysqli_query($connection,$query);


        }


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script language="javascript">
    window.location.href = "../All_Category.php"
    
    </script>

  </head>
  <body>

  </body>
</html>
