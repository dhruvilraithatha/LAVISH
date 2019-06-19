<?php include "includes/dbconnect.php" ?>
<?php
      $newsid=$_REQUEST['id'];
      $newsreaction=$_REQUEST['reaction'];

      switch ($newsreaction) {
        case 'joy':
        $query="SELECT reaction_joy from news WHERE news_id=$newsid;";
        $result=mysqli_query($connection,$query);
        while ($row=mysqli_fetch_assoc($result)) {
        $count=$row['reaction_joy'];
        }
        $count+=1;
        $query="UPDATE news SET reaction_joy=$count WHERE news_id=$newsid;";
        $result=mysqli_query($connection,$query);

          break;

          case 'bad':
          $query="SELECT reaction_bad from news WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          while ($row=mysqli_fetch_assoc($result)) {
          $count=$row['reaction_bad'];
          }
          $count+=1;
          $query="UPDATE news SET reaction_bad=$count WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          break;
          case 'amazed':
          $query="SELECT reaction_amazed from news WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          while ($row=mysqli_fetch_assoc($result)) {
          $count=$row['reaction_amazed'];
          }
          $count+=1;
          $query="UPDATE news SET reaction_amazed=$count WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          break;

          case 'cool':
          $query="SELECT reaction_cool from news WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          while ($row=mysqli_fetch_assoc($result)) {
          $count=$row['reaction_cool'];
          }
          $count+=1;
          $query="UPDATE news SET reaction_cool=$count WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          break;

          case 'likee':
          $query="SELECT reaction_likee from news WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
          while ($row=mysqli_fetch_assoc($result)) {
          $count=$row['reaction_likee'];
          break;

          }
          $count+=1;
          $query="UPDATE news SET reaction_likee=$count WHERE news_id=$newsid;";
          $result=mysqli_query($connection,$query);
        }
?>
          <html>
            <head>
              <meta charset="utf-8">
              <title></title>
              <script language="javascript">
                  window.location.href = "news-post.php?id=<?php echo $newsid ?>"
              </script>

            </head>
            <body>

            </body>
          </html>




        default:
          # code...
          break;
      }

?>
