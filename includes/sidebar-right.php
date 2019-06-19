<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="chat-users">
				<?php
				$temp123;
				$temp213=count($array_for_storing_my_friend);
				if ($temp !=0) {
					foreach ($array_for_storing_my_friend as $temp123 ) {
						$query_for_fetching_user_info_of_friends_for_online_or_offline="SELECT * FROM user WHERE user_id=$temp123;";
						$result_for_fetching_user_info_of_friends_for_online_or_offline=mysqli_query($connection,$query_for_fetching_user_info_of_friends_for_online_or_offline);
						while ($row_for_fetching_user_info_of_friends_for_online_or_offline=mysqli_fetch_assoc($result_for_fetching_user_info_of_friends_for_online_or_offline)) {
							$user_name_of_offline_online=$row_for_fetching_user_info_of_friends_for_online_or_offline['uname'];
							$profile_pic_of_offline_online=$row_for_fetching_user_info_of_friends_for_online_or_offline['profile_pic'];
							$login_status_of_offline_online=$row_for_fetching_user_info_of_friends_for_online_or_offline['login_status2'];
							if ($login_status_of_offline_online==0) {
								?>
								<li class="inline-items js-chat-open">
									<div class="author-thumb">
										<img alt="author" src="<?php echo '../FRIEND_FEED/'. $profile_pic_of_offline_online?>" class="avatar" style="height:38px;width:38px;">
										<span class="icon-status disconected"></span>
									</div>
								</li>
								<?php
							}
							else {?>
								<li class="inline-items js-chat-open">
									<div class="author-thumb">
										<img alt="author" src="<?php echo '../FRIEND_FEED/'. $profile_pic_of_offline_online?>" class="avatar" style="height:38px;width:38px;">
										<span class="icon-status online"></span>
									</div>
								</li>
	<?php						}
						}
					}
				}
					?>





			</ul>
		</div>

		<div class="search-friend inline-items">
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-menu-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>
		</div>

		<a href="../chat/index.php" class="olympus-chat inline-items">
			<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>

	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

		<div class="mCustomScrollbar" data-mcs-theme="dark">



			<ul class="chat-users">
				<?php
				$temp123;
				$temp213=count($array_for_storing_my_friend);
				if ($temp !=0) {
					foreach ($array_for_storing_my_friend as $temp123 ) {
						$query_for_fetching_user_info_of_friends_for_online_or_offline="SELECT * FROM user WHERE user_id=$temp123;";
						$result_for_fetching_user_info_of_friends_for_online_or_offline=mysqli_query($connection,$query_for_fetching_user_info_of_friends_for_online_or_offline);
						while ($row_for_fetching_user_info_of_friends_for_online_or_offline=mysqli_fetch_assoc($result_for_fetching_user_info_of_friends_for_online_or_offline)) {
							$user_name_of_offline_online=$row_for_fetching_user_info_of_friends_for_online_or_offline['uname'];
							$profile_pic_of_offline_online=$row_for_fetching_user_info_of_friends_for_online_or_offline['profile_pic'];
							$login_status_of_offline_online=$row_for_fetching_user_info_of_friends_for_online_or_offline['login_status2'];
							if ($login_status_of_offline_online==0) {
								?>
								<li class="inline-items js-chat-open">
									<div class="author-thumb">
										<img alt="author" src="<?php echo '../FRIEND_FEED/'. $profile_pic_of_offline_online?>" class="avatar" style="height:38px;width:38px;">

										<span class="icon-status disconected"></span>
									</div>
									<div class="author-status">
										<a href="#" class="h6 author-name"><?php echo $row_for_fetching_user_info_of_friends_for_online_or_offline['uname'];?></a>
										<span class="status">OFFLINE</span>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

										<ul class="more-icons">
											<li>
												<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
											</li>

											<li>
												<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
											</li>

											<li>
												<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
											</li>
										</ul>

									</div>


								</li>

								<?php
							}
							else {?>


								<li class="inline-items js-chat-open">

									<div class="author-thumb">
										<img alt="author" src="<?php echo '../FRIEND_FEED/'. $profile_pic_of_offline_online?>" class="avatar" style="height:38px;width:38px;">

										<span class="icon-status online"></span>
									</div>

									<div class="author-status">
										<a href="#" class="h6 author-name"><?php echo $user_name_of_offline_online ?></a>
										<span class="status">ONLINE</span>
									</div>

									<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>

										<ul class="more-icons">
											<li>
												<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
											</li>

											<li>
												<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use></svg>
											</li>

											<li>
												<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-block-from-chat-icon"></use></svg>
											</li>
										</ul>

									</div>

								</li>




							<?php						}
												}
											}
										}
											?>


			</ul>






		</div>

		<div class="search-friend inline-items">
			<form class="form-group" >
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="#" class="settings">
				<svg class="olymp-settings-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-settings-icon"></use></svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
		</div>

		<a href="../chat/index.php" class="olympus-chat inline-items">

			<h6 class="olympus-chat-title">L A V I S H &nbsp;C H A T</h6>
			<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>
</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<div class="fixed-sidebar right fixed-sidebar-responsive">

	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right-responsive">

		<a href="../chat/index.php" class="olympus-chat inline-items ">
			<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
		</a>

	</div>

</div>
