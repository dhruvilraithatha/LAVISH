<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page - Friends</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Theme Styles CSS
	<link rel="stylesheet" type="text/css" href="../css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="../css/blocks.css">-->
	<link rel="stylesheet" type="text/css" href="../css/main.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.min.css">

	<link rel="stylesheet" href="../css/icons.css">

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
	<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">


</head>
<body style="background-image: url(../img/bg-20.jpg);">
	<?php include "../includes/sidebar-right.php"; ?>
	<?php include "../includes/sidebar-left.php"; ?>
	<?php include "../includes/header.php"; ?>
<div class="header-spacer"></div>


<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<?php

					if (isset($_REQUEST['search_friend'])) {
					$search_friend=$_REQUEST['search_friend'];
					$count_for_total_search_result=0;
					$query_for_friend_search="SELECT * FROM `user` WHERE `uname` LIKE '%$search_friend%'";
					$result_for_friend_search=mysqli_query($connection,$query_for_friend_search);
					while($row=mysqli_fetch_assoc($result_for_friend_search)) {
						if ($row['user_id']==$user_id) {
							continue;
						}
						$count_for_total_search_result++;
					}}
					?>
					<div class="h6 title">Search Results(<?php if (!$count_for_total_search_result=0) {
						echo $count_for_total_search_result;
					}
					else {
						echo "0";
					}
					?>)</div>
					<form class="w-search">
						<div class="form-group with-button">
							<input class="form-control" type="text" placeholder="Search Friends...">
							<button>
								<svg class="olymp-magnifying-glass-icon"><use xlink:href="../icons/icons.svg#olymp-magnifying-glass-icon"></use></svg>
							</button>
						</div>
					</form>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Friends -->

<div class="container">
	<div class="row">
		<?php
		$count_for_total_search_result=0;
		if (isset($_REQUEST['search_friend'])) {
				$search_friend=$_REQUEST['search_friend'];
				$count=0;
				$query_for_friend_search="SELECT * FROM `user` WHERE `uname` LIKE '%$search_friend%'";
				$result_for_friend_search=mysqli_query($connection,$query_for_friend_search);
				while($row=mysqli_fetch_assoc($result_for_friend_search)) {
					$friend_id_for_sent_request=$row['user_id'];
					$query_for_checking_if_already_sent_request="SELECT * FROM `friend_request` WHERE `user_id` = $user_id AND `friend_id` = $friend_id_for_sent_request;";
					$result_for_checking_if_already_sent_request=mysqli_query($connection,$query_for_checking_if_already_sent_request);
					$rows_for_sent_request=mysqli_num_rows($result_for_checking_if_already_sent_request);
					$query_for_checking_if_already_recieved_request="SELECT request_id FROM `friend_request` WHERE `user_id` = $friend_id_for_sent_request AND `friend_id` = $user_id;";
					$result_for_checking_if_already_recieved_request=mysqli_query($connection,$query_for_checking_if_already_recieved_request);
					$rows_for_recieved_request=mysqli_num_rows($result_for_checking_if_already_recieved_request);
					$search_user_id=$row['user_id'];
					$user_name=$row['uname'];
					$user_profile_image=$row['profile_pic'];
					$user_cover_image_for_search=$row['header_photo'];
					$count += 1;
					$count_for_total_search_result++;
					if (in_array($row['user_id'],$array_for_storing_my_friend)) {
		 ?>
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="ui-block">
				<div class="friend-item">
					<div class="friend-header-thumb">
						<img src="<?php echo $user_cover_image_for_search;?>" alt="friend" height="318" width="122" style="height:150px;width:318px;">
					</div>

					<div class="friend-item-content">

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img src="<?php echo $user_profile_image;?>" alt="author" style="height:98px;width:98px;">
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name"><?php echo $user_name; ?></a>
								<!--<a href="ProfilePage_else.php?friend_id=<?php //echo $search_user_id;?>" class="h5 author-name"><?php// echo $user_name; ?></a>-->
								<div class="country">Gujarat, India</div>
							</div>
						</div>

						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">52</div>
											<div class="title">Friends</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">240</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">

										<a href="#" class="btn btn-control bg-purple">
											<svg class="olymp-chat---messages-icon"><use xlink:href="../icons/icons.svg#olymp-chat---messages-icon"></use></svg>
										</a>

									</div>
								</div>

								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
									</p>

									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>

							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}
		elseif ($rows_for_recieved_request==1) {
			while($rows_for_recieved_request_for_fetching_request_id=mysqli_fetch_assoc($result_for_checking_if_already_recieved_request))
			{
				$request_id_for_request_accept=$rows_for_recieved_request_for_fetching_request_id['request_id'];
			}
		?>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="ui-block">
					<div class="friend-item">
						<div class="friend-header-thumb">
							<img src="<?php echo $user_cover_image_for_search;?>" alt="friend" height="318" width="122" style="height:150px;width:318px;">
						</div>

						<div class="friend-item-content">

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Report Profile</a>
									</li>
									<li>
										<a href="#">Block Profile</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
								</ul>
							</div>
							<div class="friend-avatar">
								<div class="author-thumb">
									<img src="<?php echo $user_profile_image;?>" alt="author" style="height:98px;width:98px;">
								</div>
								<div class="author-content">
									<a href="ProfilePage_else.php?friend_id=<?php echo $search_user_id;?>" class="h5 author-name"><?php echo $user_name; ?></a>
									<div class="country">Gujarat, India</div>
								</div>
							</div>

							<div class="swiper-container" data-slide="fade">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="friend-count" data-swiper-parallax="-500">
											<a href="#" class="friend-count-item">
												<div class="h6">52</div>
												<div class="title">Friends</div>
											</a>
											<a href="#" class="friend-count-item">
												<div class="h6">240</div>
												<div class="title">Photos</div>
											</a>
											<a href="#" class="friend-count-item">
												<div class="h6">16</div>
												<div class="title">Videos</div>
											</a>
										</div>
										<div class="control-block-button" data-swiper-parallax="-100">

											<a href="includes/snippets/request_accept.php?request_id=<?php echo $request_id_for_request_accept;?>" class="btn btn-control bg-green">
												<i class="dripicons-checkmark"></i>
											</a>

										</div>
									</div>

									<div class="swiper-slide">
										<p class="friend-about" data-swiper-parallax="-500">
											Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
										</p>

										<div class="friend-since" data-swiper-parallax="-100">
											<span>Friends Since:</span>
											<div class="h6">December 2014</div>
										</div>
									</div>
								</div>

								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php
		}
		elseif ($rows_for_sent_request==1) {
			?>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="ui-block">
					<div class="friend-item">
						<div class="friend-header-thumb">
							<img src="<?php echo $user_cover_image_for_search;?>" alt="friend" height="318" width="122" style="height:150px;width:318px;">
						</div>

						<div class="friend-item-content">

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Report Profile</a>
									</li>
									<li>
										<a href="#">Block Profile</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
								</ul>
							</div>
							<div class="friend-avatar">
								<div class="author-thumb">
									<img src="<?php echo $user_profile_image;?>" alt="author" style="height:98px;width:98px;">
								</div>
								<div class="author-content">
									<a href="ProfilePage_else.php?friend_id=<?php echo $search_user_id;?>" class="h5 author-name"><?php echo $user_name; ?></a>
									<div class="country">Gujarat, India</div>
								</div>
							</div>

							<div class="swiper-container" data-slide="fade">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="friend-count" data-swiper-parallax="-500">
											<a href="#" class="friend-count-item">
												<div class="h6">52</div>
												<div class="title">Friends</div>
											</a>
											<a href="#" class="friend-count-item">
												<div class="h6">240</div>
												<div class="title">Photos</div>
											</a>
											<a href="#" class="friend-count-item">
												<div class="h6">16</div>
												<div class="title">Videos</div>
											</a>
										</div>
										<div class="control-block-button" data-swiper-parallax="-100">

											<label class="btn btn-control bg-orange">
												<i class="dripicons-checkmark"></i>
											</label>

										</div>
									</div>

									<div class="swiper-slide">
										<p class="friend-about" data-swiper-parallax="-500">
											Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
										</p>

										<div class="friend-since" data-swiper-parallax="-100">
											<span>Friends Since:</span>
											<div class="h6">December 2014</div>
										</div>
									</div>
								</div>

								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
		}

	else {
		# code...
			if ($search_user_id==$user_id) {
				continue;
			}

		 ?>

		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="ui-block">
				<div class="friend-item">
					<div class="friend-header-thumb">
						<img src="<?php echo $user_cover_image_for_search;?>" alt="friend" height="318" width="122" style="height:150px;width:318px;">
					</div>

					<div class="friend-item-content">

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<ul class="more-dropdown">
								<li>
									<a href="#">Report Profile</a>
								</li>
								<li>
									<a href="#">Block Profile</a>
								</li>
								<li>
									<a href="#">Turn Off Notifications</a>
								</li>
							</ul>
						</div>
						<div class="friend-avatar">
							<div class="author-thumb">
								<img src="<?php echo $user_profile_image;?>" alt="author" style="height:98px;width:98px;">
							</div>
							<div class="author-content">
								<!--<a href="ProfilePage_else.php?friend_id=<?php //echo $search_user_id;?>" class="h5 author-name"><?php// echo $user_name; ?></a>-->
								<a href="#" class="h5 author-name"><?php echo $user_name; ?></a>
								<div class="country">Gujarat, India</div>
							</div>
						</div>

						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="friend-count" data-swiper-parallax="-500">
										<a href="#" class="friend-count-item">
											<div class="h6">52</div>
											<div class="title">Friends</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">240</div>
											<div class="title">Photos</div>
										</a>
										<a href="#" class="friend-count-item">
											<div class="h6">16</div>
											<div class="title">Videos</div>
										</a>
									</div>
									<div class="control-block-button" data-swiper-parallax="-100">
										<a href="includes/snippets/friend_request.php?search_user_id=<?php echo $search_user_id;?>" class="btn btn-control bg-blue">
											<svg class="olymp-happy-face-icon"><use xlink:href="../icons/icons.svg#olymp-happy-face-icon"></use></svg>
										</a>


									</div>
								</div>

								<div class="swiper-slide">
									<p class="friend-about" data-swiper-parallax="-500">
										Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
									</p>

									<div class="friend-since" data-swiper-parallax="-100">
										<span>Friends Since:</span>
										<div class="h6">December 2014</div>
									</div>
								</div>
							</div>

							<!-- If we need pagination -->
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<?php
	}

		}
		}
		?>







	</div>
</div>

<!-- ... end Friends -->

<?php include "../includes/footer.php"; ?>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/jquery.appear.js"></script>
<script src="../js/jquery.mousewheel.js"></script>
<script src="../js/perfect-scrollbar.js"></script>
<script src="../js/jquery.matchHeight.js"></script>
<script src="../js/svgxuse.js"></script>
<script src="../js/Headroom.js"></script>
<script src="../js/velocity.js"></script>
<script src="../js/ScrollMagic.js"></script>
<script src="../js/jquery.waypoints.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/bootstrap-select.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/swiper.jquery.js"></script>
<script src="../js/moment.js"></script>
<script src="../js/isotope.pkgd.js"></script>
<script src="../js/ajax-pagination.js"></script>
<script src="../js/loader.js"></script>
<script src="../js/jquery.magnific-popup.js"></script>

<script src="../js/base-init.js"></script>

<script src="../Bootstrap/dist/js/bootstrap.bundle.js"></script>



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

<!-- Swiper / Sliders -->
<script src="../js/swiper.jquery.min.js"></script>


</body>
</html>
