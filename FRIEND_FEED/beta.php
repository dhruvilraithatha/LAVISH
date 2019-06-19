<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Bootstrap CSS -->
  	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-reboot.css">
  	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-grid.css">

  	<!-- Theme Styles CSS -->
  	<link rel="stylesheet" type="text/css" href="../css/theme-styles.css">
  	<link rel="stylesheet" type="text/css" href="../css/blocks.css">
    <!-- Main Font -->
  	<script src="../js/webfontloader.min.js"></script>
  	<script>
  		WebFont.load({
  			google: {
  				families: ['Roboto:300,400,500,700:latin']
  			}
  		});
  	</script>

  	<link rel="stylesheet" type="text/css" href="../css/fonts.css">

  	<!-- Styles for plugins -->
  	<link rel="stylesheet" type="text/css" href="../css/daterangepicker.css">
  	<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="jquery-1.10.2.min.js" ></script>


  </head>
  <body>
    <form method="post" onsubmit="return submitchat();">

    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 padding-l-0">
      <div class="chat-field">
        <div class="ui-block-title">
          <h6 class="title"><?php echo $login_session; ?></h6>
          <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
        </div>
        <div class="mCustomScrollbar" data-mcs-theme="dark">
          <ul class="notification-list chat-message chat-message-field">
            <p id='result'>
          </ul>
        </div>
      </form>

        <form onsubmit="return submitchat();" method="post">

          <div class="form-group label-floating is-empty">
            <label class="control-label">Write your reply here...</label>
            <textarea class="form-control" placeholder="" name="chat" id=chatbox autocomplete="0ff"></textarea>
          </div>

          <div class="add-options-message">

            <button class="btn btn-primary btn-sm" name='send' id='send' value='Send'>Post Reply</button>
          </div>

        </form>
        <script>
        // Javascript function to submit new chat entered by user
        function submitchat(){
        		if($('#chat').val()=='' || $('#chatbox').val()==' ') return false;
        		$.ajax({
        			url:'chat.php',
        			data:{chat:$('#chatbox').val(),ajaxsend:true},
        			method:'post',
        			success:function(data){
        				$('#result').html(data); // Get the chat records and add it to result div
        				$('#chatbox').val(''); //Clear chat box after successful submition
        				document.getElementById('result').scrollTop=document.getElementById('result').scrollHeight; // Bring the scrollbar to bottom of the chat resultbox in case of long chatbox
        			}
        		})
        		return false;
        };

        // Function to continously check the some has submitted any new chat
        setInterval(function(){
        	$.ajax({
        			url:'chat.php',
        			data:{ajaxget:true},
        			method:'post',
        			success:function(data){
        				$('#result').html(data);
        			}
        	})
        },1000);


        </script>


      </div>
    </div>

    <!-- jQuery first, then Other JS. -->
    <script src="../js/jquery-3.2.0.min.js"></script>
    <!-- Js effects for material design. + Tooltips -->
    <script src="../js/material.min.js"></script>
    <!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
    <script src="../js/theme-plugins.js"></script>
    <!-- Init functions -->
    <script src="../js/main.js"></script>

    <!-- Select / Sorting script -->
    <script src="../js/selectize.min.js"></script>

    <!-- Datepicker input field script-->
    <script src="../js/moment.min.js"></script>
    <script src="../js/daterangepicker.min.js"></script>

    <script src="../js/mediaelement-and-player.min.js"></script>
    <script src="../js/mediaelement-playlist-plugin.min.js"></script>
  </body>

</html>
