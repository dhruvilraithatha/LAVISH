
<header class="header" id="site-header">
<?php
	$name=null;
	$page=$_SERVER['REQUEST_URI'];
	switch ($page) {
		case '/LAVISH/LAVISH/LAVISH/NEWS_FEED/index.php':
			$name="NEWS FEED";
			break;
		case '/LAVISH/LAVISH/LAVISH/NEWS_FEED/news-search.php':
			$name="NEWS FEED";
			break;
		case '/LAVISH/LAVISH/LAVISH/NEWS_FEED/news-post.php':
			$name="NEWS FEED";
			break;
		case '/LAVISH/LAVISH/LAVISH/THREAD_FEED/index.php' :
			$name="T H R E A D &nbsp;&nbsp; F E E D";
			break;
			case '/LAVISH/LAVISH/LAVISH/THREAD_FEED/CreateTopic.php' :
				$name="T H R E A D &nbsp;&nbsp; F E E D";
				break;
			case '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topic_post.php' :
					$name="T H R E A D &nbsp;&nbsp; F E E D";
					break;
			case '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topic_search.php' :
						$name="T H R E A D &nbsp;&nbsp; F E E D";
						break;
			case '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topics.php' :
							$name="T H R E A D &nbsp;&nbsp; F E E D";
							break;

		case '/LAVISH/LAVISH/LAVISH/FRIEND_FEED/ProfilePage.php':
				$name="FRIEND FEED";
				break;

		 /*OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/CreateTopic.php'
		 OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topic_post.php'
		 OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topic_search.php'
		 OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/Thread_topics.php':
					$name="THREAD FEED";
					break;*/


	}

/*
	switch ($page) {
		case '/LAVISH/LAVISH/LAVISH/THREAD_FEED/index.php'
		OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/CreateTopic.php'
		 OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topic_post.php' OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/thread_topic_search.php'
		 OR '/LAVISH/LAVISH/LAVISH/THREAD_FEED/Thread_topics.php':
			$name="T H R E A D &nbsp;&nbsp; F E E D";
			break;

		case 	'/LAVISH/LAVISH/LAVISH/NEWS_FEED/index.php'
			OR  '/LAVISH/LAVISH/LAVISH/NEWS_FEED/news-post.php'
		  OR  '/LAVISH/LAVISH/LAVISH/NEWS_FEED/news-search.php' :
			$name="N E W S &nbsp;&nbsp; F E E D";
			break;

			case '/LAVISH/LAVISH/LAVISH/FRIEND_FEED/ProfilePage.php' :
			$name="F R I E N D &nbsp;&nbsp; F E E D";
			break;

	}
*/
?>
	<div class="page-title">
		<h6><?php echo $name;?></h6>
	</div>

	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests" method="post" action="../FRIEND_FEED/friend-search.php">
			<div class="form-group with-button">
				<input class="form-control " placeholder="Search here people or pages..." type="text" name="search_friend">
				<button name="friend-search" type="submit">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
				</button>
			</div>
		</form>

		<!--<a href="#" class="link-find-friend">Find Friends</a>-->

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
				<?php
				$count=0;
				$times=0;
				abc:
				if($times!=0)
				{
					echo "<div class='label-avatar bg-blue'>".$count." </div>";
					//echo $count;
					goto abcd;
				}
				?>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<?php
						//	if ($times==0) {
							$query_for_viewing_friend_request="SELECT * FROM friend_request WHERE friend_id=$user_id;";
							$result_for_viewing_friend_request=mysqli_query($connection,$query_for_viewing_friend_request);
							while ($row=mysqli_fetch_assoc($result_for_viewing_friend_request)) {
								$count++;
								$request_id=$row['request_id'];
								$request_from=$row['user_id'];
								$query_for_info_of_requestor="SELECT * FROM user WHERE user_id=$request_from;";
								$result_for_info_of_requestor=mysqli_query($connection,$query_for_info_of_requestor);
								while($row1=mysqli_fetch_assoc($result_for_info_of_requestor))
								{
									$uname_of_requestor=$row1['uname'];
									$profile_pic_of_requestor=$row1['profile_pic'];
								?>
							<li>
								<div class="author-thumb">
									<img src="<?php echo $profile_pic_of_requestor?>" alt="author" style="width:34px;height:34px;">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend"><?php echo $uname_of_requestor; ?></a>
									<!--<span class="chat-message-item">Mutual Friend: Jimisha</span>-->
								</div>
								<span class="notification-icon">
									<a href="includes/snippets/request_accept.php?request_id=<?php echo $request_id;?>" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="includes/snippets/request_deny.php?request_id_for_deny=<?php echo $request_id;?>" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>
<?php }
}
$times++;
goto abc;
abcd:


?>

						</ul>
					</div>

					<a href="FriendsRequest.php" class="view-all bg-blue">Check all Your Requests</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
				<!--<div class="label-avatar bg-purple"></div>-->

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message">
							<?php
							$array_for_messgae=array();
							$seen=0;
								$query_for_selecting_messages="SELECT * FROM messages WHERE seen='$seen'AND to_id=$user_id;";
								$result_for_selecting_messages=mysqli_query($connection,$query_for_selecting_messages);
								while ($row_for_messgaes=mysqli_fetch_assoc($result_for_selecting_messages)) {
									$from_id=$row_for_messgaes['from_id'];
									if(in_array($from_id,$array_for_messgae))
									{
										continue;
									}
									else {

									array_push($array_for_messgae,$from_id	);
								 $query_for_slecting_message_sender_image="SELECT profile_pic FROM user WHERE user_id=$from_id;";
									$result_for_slecting_message_sender_image=mysqli_query($connection,$query_for_slecting_message_sender_image);
									while($row_for_image=mysqli_fetch_assoc($result_for_slecting_message_sender_image))
								$image_for_sender=$row_for_image['profile_pic'];

								?>

							<li class="message-unread">
								<div class="author-thumb">
									<img src="../FRIEND_FEED/<?Php echo $image_for_sender;?>" alt="author" style="height:32px;width:32px;">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend"><?php echo $row_for_messgaes['from_uname'] ?></a>
									<span class="chat-message-item">Sent you a Message!!</span>
									<!--<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>-->
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								</div>
							</li>


							<?php
						}
					}
							?>


						</ul>
					</div>

					<a href="../chat/index.php" class="view-all bg-purple">View All Messages</a>
				</div>
			</div>

<!--			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>

				<div class="label-avatar bg-primary">8</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
				<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img src="img/avatar62-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="img/avatar63-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="img/avatar64-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

								<div class="comment-photo">
									<img src="img/comment-photo1.jpg" alt="photo">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar65-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="img/avatar66-sm.jpg" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
									<span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-primary">View All Notifications</a>
				</div>
			</div>-->

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<img alt="author" src="../FRIEND_FEED/<?php echo $profile_pic ?>" class="avatar" style="height:34px;width:34px;">
					<span class="icon-status online"></span>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Your Account</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="#">

										<svg class="olymp-menu-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

										<span>Profile Settings</span>
									</a>
								</li>

								<li>
									<a href="../LOGIN-SIGNUP/logout.php">
										<svg class="olymp-logout-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

										<span>Log Out</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Custom Status</h6>
							</div>

							<form class="form-group with-button custom-status" method="post">
								<input class="form-control" placeholder="" type="text" value="Space Cowboy" name="status">
								<button class="bg-purple" name="submit_status">
									<svg class="olymp-check-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-check-icon"></use></svg>
								</button>
							</form>
							<?php
								if (isset($_REQUEST['submit_status'])) {
									$status=$_REQUEST['status'];
									$query_for_updating_status="UPDATE `user` SET `status` = '$status'  WHERE `user`.`user_id` = $user_id;";
									$result_for_updating_status=mysqli_query($connection,$query_for_updating_status);

								}
							?>
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">About L A V I S H</h6>
							</div>

							<ul>
								<li>
									<a href="#">
										<span>Terms and Conditions</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>FAQs</span>
									</a>
								</li>

								<li>
									<a href="#">
										<span>Contact</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<a href="ProfilePage.php" class="author-name fn">
					<div class="author-title">
						<?php echo $login_session; ?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
					</div>
					<span class="author-subtitle"><?php
					$query_for_fetching_status="SELECT status from user WHERE user_id=$user_id";
					$result_for_fetching_status=mysqli_query($connection,$query_for_fetching_status);
					while ($row=mysqli_fetch_assoc($result_for_fetching_status)) {
						$status=$row['status'];
						echo $status;
					}
					 ?></span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>


			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane " id="request" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FRIEND REQUESTS</h6>
					<a href="#">Find Friends</a>
					<a href="#">Settings</a>
				</div>
				<ul class="notification-list friend-requests">
					<?php
				//	if ($times==0) {
					$query_for_viewing_friend_request="SELECT * FROM friend_request WHERE friend_id=$user_id;";
					$result_for_viewing_friend_request=mysqli_query($connection,$query_for_viewing_friend_request);
					while ($row=mysqli_fetch_assoc($result_for_viewing_friend_request)) {
						$count++;
						$request_id=$row['request_id'];
						$request_from=$row['user_id'];
						$query_for_info_of_requestor="SELECT * FROM user WHERE user_id=$request_from;";
						$result_for_info_of_requestor=mysqli_query($connection,$query_for_info_of_requestor);
						while($row1=mysqli_fetch_assoc($result_for_info_of_requestor))
						{
							$uname_of_requestor=$row1['uname'];
							$profile_pic_of_requestor=$row1['profile_pic'];
						?>
					<li>
						<div class="author-thumb">
							<img src="<?php echo $profile_pic_of_requestor?>" alt="author" style="width:34px;height:34px;">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend"><?php echo $uname_of_requestor; ?></a>
							<!--<span class="chat-message-item">Mutual Friend: Jimisha</span>-->
						</div>
						<span class="notification-icon">
							<a href="includes/snippets/request_accept.php?request_id=<?php echo $request_id;?>" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

							<a href="includes/snippets/request_deny.php?request_id_for_deny=<?php echo $request_id;?>" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>
<?php }
}?>
				</ul>
				<a href="#" class="view-all bg-blue">Check all your Events</a>
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list chat-message">

					<?php
					$array_for_messgae=array();
					$seen=0;
						$query_for_selecting_messages="SELECT * FROM messages WHERE seen='$seen'AND to_id=$user_id;";
						$result_for_selecting_messages=mysqli_query($connection,$query_for_selecting_messages);
						while ($row_for_messgaes=mysqli_fetch_assoc($result_for_selecting_messages)) {
							$from_id=$row_for_messgaes['from_id'];
							if(in_array($from_id,$array_for_messgae))
							{
								continue;
							}
							else {

							array_push($array_for_messgae,$from_id	);
						 $query_for_slecting_message_sender_image="SELECT profile_pic FROM user WHERE user_id=$from_id;";
							$result_for_slecting_message_sender_image=mysqli_query($connection,$query_for_slecting_message_sender_image);
							while($row_for_image=mysqli_fetch_assoc($result_for_slecting_message_sender_image))
						$image_for_sender=$row_for_image['profile_pic'];

						?>

					<li class="message-unread">
						<div class="author-thumb">
							<img src="../FRIEND_FEED/<?Php echo $image_for_sender;?>" alt="author" style="height:32px;width:32px;">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend"><?php echo $row_for_messgaes['from_uname'] ?></a>
							<span class="chat-message-item">Sent you a Message!!</span>
							<!--<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>-->
						</div>
						<span class="notification-icon">
							<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
						</span>
						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						</div>
					</li>


					<?php
					}
					}
					?>
				<a href="#" class="view-all bg-purple">View All Messages</a>
			</div>

		</div>



		<div class="tab-pane" role="tabpanel" id="search">


				<form class="search-bar w-search notification-list friend-requests" method="post" action="../FRIEND_FEED/friend-search.php">
					<div class="form-group with-button">
						<input class="form-control" placeholder="Search here people or pages..." type="text" name="search_friend">
					</div>
				</form>



		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
