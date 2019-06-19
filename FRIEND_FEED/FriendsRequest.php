<?php include "includes/dbconnect.php" ?>

<?php include('../LOGIN-SIGNUP/session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Your Account - Friends Requests</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Theme Styles CSS -->
	<link rel="stylesheet" type="text/css" href="../css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="../css/blocks.css">
	<link rel="stylesheet" href="css/icons.css">
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


</head>
<body style="background-image: url(../img/bg-20.jpg);">

<!-- Profile Settings Responsive -->

<div class="profile-settings-responsive">

	<a href="#" class="js-profile-settings-open profile-settings-open">
		<i class="fa fa-angle-right" aria-hidden="true"></i>
		<i class="fa fa-angle-left" aria-hidden="true"></i>
	</a>
	<div class="mCustomScrollbar" data-mcs-theme="dark">
		<div class="ui-block">
			<div class="your-profile">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Your PROFILE</h6>
				</div>

				<div id="accordion1" role="tablist" aria-multiselectable="true">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne-1">
							<h6 class="mb-0">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne">
									Profile Settings
									<svg class="olymp-dropdown-arrow-icon"><use xlink:href="../icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
								</a>
							</h6>
						</div>

						<div id="collapseOne-1" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
							<ul class="your-profile-menu">
								<li>
									<a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
								</li>
								<li>
									<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
								</li>
								<li>
									<a href="30-YourAccount-ChangePassword.html">Change Password</a>
								</li>
								<li>
									<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
								</li>
								<li>
									<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
								</li>
							</ul>
						</div>
					</div>
				</div>


				<div class="ui-block-title">
					<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
					<a href="#" class="items-round-little bg-primary">8</a>
				</div>
				<div class="ui-block-title">
					<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
				</div>
				<div class="ui-block-title">
					<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
					<a href="#" class="items-round-little bg-blue">4</a>
				</div>
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FAVOURITE PAGE</h6>
				</div>
				<div class="ui-block-title">
					<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
				</div>
				<div class="ui-block-title">
					<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Profile Settings Responsive -->


<!-- Fixed Sidebar Left -->
<?php include "../includes/sidebar-left.php" ?>
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php"?>
<!-- Header -->
<?php include "../includes/header.php"?>

<!-- ... end Responsive Header -->


<div class="header-spacer header-spacer-small"></div>


<!-- Main Header Your Account -->

<div class="main-header">
	<div class="content-bg-wrap">
		<div class="content-bg bg-account"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
				<div class="main-header-content">
					<h1>Your Account Dashboard</h1>
					<p>Welcome to your account dashboard! Here you’ll find everything you need to change your
						profile information, settings, read notifications and requests, view your latest messages,
						change your pasword and much more! Also you can create or manage your own favourite page, have fun!
					</p>
				</div>
			</div>
		</div>
	</div>

	<img class="img-bottom" src="img/account-bottom.png" alt="friends">
</div>

<!-- ... end Main Header Your Account -->


<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friend Requests</h6>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>

				<ul class="notification-list friend-requests">
					<?php
					$query_for_fetching_friend_requests="SELECT * FROM friend_request WHERE friend_id=$user_id;";
					$result_for_fetching_friend_requests=mysqli_query($connection,$query_for_fetching_friend_requests);
					while($row=mysqli_fetch_assoc($result_for_fetching_friend_requests)) {
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
							<img src="<?php echo $profile_pic_of_requestor?>" alt="author" style="height:42px;width:42px;">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend"><?php echo $uname_of_requestor; ?></a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
						<span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add">
									<svg class="olymp-happy-face-icon"><use xlink:href="../icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
								Accept Friend Request
							</a>

							<a href="#" class="accept-request request-del">
								<span class="icon-minus">
									<svg class="olymp-happy-face-icon"><use xlink:href="../icons/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>

						</span>

						<div class="more">
							<svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="../icons/icons.svg#olymp-little-delete"></use></svg>
						</div>
					</li>

<?php
}
} ?>
				</ul>

			</div>

		</div>

		<div class="col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-xs-12 responsive-display-none">
			<div class="ui-block">
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>

					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon"><use xlink:href="../icons/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
									</a>
								</h6>
							</div>

							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
									</li>
									<li>
										<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
									</li>
									<li>
										<a href="30-YourAccount-ChangePassword.html">Change Password</a>
									</li>
									<li>
										<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
									</li>
									<li>
										<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
									</li>
								</ul>
							</div>
						</div>
					</div>


					<div class="ui-block-title">
						<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
						<a href="#" class="items-round-little bg-primary">8</a>
					</div>
					<div class="ui-block-title">
						<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
					</div>
					<div class="ui-block-title">
						<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
						<a href="#" class="items-round-little bg-blue">4</a>
					</div>
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FAVOURITE PAGE</h6>
					</div>
					<div class="ui-block-title">
						<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
					</div>
					<div class="ui-block-title">
						<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->



<?php include "../includes/footer.php"; ?>

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
