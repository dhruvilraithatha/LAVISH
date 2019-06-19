<?php
  session_start();
  if(session_destroy()) // Destroying All Sessions
  {
      header("Location: ../../ADMIN.php"); // Redirecting To Home Page
  }
?>
