<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>

<?php
//session_start();

if(isset($_POST['ajaxsend']) && $_POST['ajaxsend']==true){
	// Code to save and send chat
	$chat = fopen("chatdata.txt", "a");
	//$data="<b>".$_POST['chat']."<br>";
	//$data="<span class='chat-message-item'>".$_POST['chat']."</span>";





	$data="<li>
						<div class='author-thumb'>
							<img src='".$profile_pic."' alt='author' style='height:32px;width:32px;'>
						</div>
						<div class='notification-event'>
							<a href='#' class='h6 notification-friend'>".$login_session."</a>
							<span class='notification-date'><time class='entry-date updated' datetime='2004-07-24T18:18'>Yesterday at 8:10pm</time></span>
							<span class='chat-message-item'>".$_POST['chat']."</span>
						</div>
					</li>";



	//$data="<b>".$_SESSION['username'].':</b> '.$_POST['chat']."<br>";
	fwrite($chat,$data);
	fclose($chat);

	$chat = fopen("chatdata.txt", "r");
	echo fread($chat,filesize("chatdata.txt"));
	fclose($chat);
} else if(isset($_POST['ajaxget']) && $_POST['ajaxget']==true){
	// Code to send chat history to the user
	$chat = fopen("chatdata.txt", "r");
	echo fread($chat,filesize("chatdata.txt"));
	fclose($chat);
} else if(isset($_POST['ajaxclear']) && $_POST['ajaxclear']==true){
	// Code to clear chat history
	$chat = fopen("chatdata.txt", "w");
	$data="<b>".$_SESSION['username'].'</b> cleared chat<br>';
	fwrite($chat,$data);
	fclose($chat);
}
