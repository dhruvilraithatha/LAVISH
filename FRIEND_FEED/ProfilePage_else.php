<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Profile Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
    <script src="../js/webfontloader.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="../css/main.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.min.css">


</head>
<body style="background-image: url(../img/bg-20.jpg);">




<!-- Fixed Sidebar Left -->
<?php include "../includes/sidebar-left.php"; ?>
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php" ?>
<!-- ... end Fixed Sidebar Right-Responsive -->

<!-- Header -->
<?php  include "../includes/header.php" ?>
<!-- Header-BP -->
<div class="header-spacer"></div>

<?php
	$friend_id=$_REQUEST['friend_id'];
	$query_for_freind_profile_page="SELECT * FROM user WHERE user_id=$friend_id;";
	$result_for_freind_profile_page=mysqli_query($connection,$query_for_freind_profile_page);
	while ($row=mysqli_fetch_assoc($result_for_freind_profile_page)) {
		$uname_for_friend_profile=$row['uname'];
		$profile_pic_for_friend_profile=$row['profile_pic'];
		$cover_photo_for_friend_profile=$row['header_photo'];
	}
 ?>

<!-- Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="<?php echo $cover_photo_for_friend_profile; ?>" alt="nature" style="height:550px;">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-lg-5 col-md-5 ">
								<ul class="profile-menu">
									<li>
										<a href="02-ProfilePage.html" class="active">Timeline</a>
									</li>
									<li>
										<a href="05-ProfilePage-About.html">About</a>
									</li>
									<li>
										<a href="06-ProfilePage.html">Friends</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-5 ml-auto col-md-5">
								<ul class="profile-menu">
									<li>
										<a href="07-ProfilePage-Photos.html">Photos</a>
									</li>
									<li>
										<a href="09-ProfilePage-Videos.html">Videos</a>
									</li>
									<li>
										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
								<svg class="olymp-happy-face-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
							</a>


						</div>
					</div>
					<div class="top-header-author">
						<a href="02-ProfilePage.html" class="author-thumb">
							<img src="<?php echo $profile_pic_for_friend_profile ?>" alt="author" style="height:120px;width:120px">
						</a>
						<div class="author-content">
							<a href="02-ProfilePage.html" class="h4 author-name"><?php echo $uname_for_friend_profile; ?></a>
							<div class="country">Gujarat, India</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Top Header-Profile -->
<div class="container">
	<div class="row">

		<!-- Main Content -->

		<div class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
			<div id="newsfeed-items-grid">

				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post">

							<div class="post__author author vcard inline-items">
								<img src="img/author-page.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											19 hours ago
										</time>
									</div>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>

							</div>

							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
								pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
								mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
								accusantium doloremque.
							</p>

							<div class="post-additional-info inline-items">

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<span>8</span>
								</a>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
								</ul>

								<div class="names-people-likes">
									<a href="#">Jenny</a>, <a href="#">Robert</a> and
									<br>6 more liked this
								</div>


								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
										</svg>
										<span>17</span>
									</a>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
										</svg>
										<span>24</span>
									</a>
								</div>


							</div>

							<div class="control-block-button post-control-button">

								<a href="#" class="btn btn-control featured-post">
									<svg class="olymp-trophy-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-trophy-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>

							</div>

						</article>

					<!-- .. end Post -->				</div>
				<div class="ui-block">

					<!-- Post -->

					<article class="hentry post video">

							<div class="post__author author vcard inline-items">
								<img src="img/author-page.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared a
									<a href="#">link</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											7 hours ago
										</time>
									</div>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>

							</div>

							<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

							<div class="post-video">
								<div class="video-thumb">
									<img src="img/video5.jpg" alt="photo">
									<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
										<svg class="olymp-play-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-play-icon"></use>
										</svg>
									</a>
								</div>

								<div class="video-content">
									<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
									<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
									<a href="#" class="link-site">YOUTUBE.COM</a>
								</div>
							</div>

							<div class="post-additional-info inline-items">

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<span>15</span>
								</a>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
								</ul>

								<div class="names-people-likes">
									<a href="#">Jenny</a>, <a href="#">Robert</a> and
									<br>13 more liked this
								</div>

								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
										</svg>
										<span>1</span>
									</a>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
										</svg>
										<span>16</span>
									</a>
								</div>


							</div>

							<div class="control-block-button post-control-button">

								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>

							</div>

						</article>

					<!-- .. end Post -->				</div>
				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img src="img/author-page.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										2 hours ago
									</time>
								</div>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
								</svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
						</p>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>36</span>
							</a>

							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img src="img/friend-harmonic7.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic8.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic9.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic10.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic11.jpg" alt="friend">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="#">You</a>, <a href="#">Elaine</a> and
								<br>34 more liked this
							</div>


							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
									</svg>
									<span>17</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
									<span>24</span>
								</a>
							</div>

						</div>

						<div class="control-block-button post-control-button">

							<a href="#" class="btn btn-control">
								<svg class="olymp-like-post-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
								</svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
								</svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
								</svg>
							</a>

						</div>

					</article>

					<!-- .. end Post -->
					<!-- Comments -->

					<ul class="comments-list">
						<li>
							<div class="post__author author vcard inline-items">
								<img src="img/avatar10-sm.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											5 mins ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>8</span>
							</a>
							<a href="#" class="reply">Reply</a>
						</li>
						<li class="has-children">
							<div class="post__author author vcard inline-items">
								<img src="img/avatar5-sm.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											1 hour ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
								consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
								quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
							</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>5</span>
							</a>
							<a href="#" class="reply">Reply</a>

							<ul class="children">
								<li>
									<div class="post__author author vcard inline-items">
										<img src="img/avatar8-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													39 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
											</svg>
										</a>

									</div>

									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
										</svg>
										<span>2</span>
									</a>
									<a href="#" class="reply">Reply</a>
								</li>
								<li>
									<div class="post__author author vcard inline-items">
										<img src="img/avatar2-sm.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													24 mins ago
												</time>
											</div>
										</div>

										<a href="#" class="more">
											<svg class="olymp-three-dots-icon">
												<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
											</svg>
										</a>

									</div>

									<p>Excepteur sint occaecat cupidatat non proident.</p>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-heart-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
										</svg>
										<span>0</span>
									</a>
									<a href="#" class="reply">Reply</a>

								</li>
							</ul>

						</li>

						<li>
							<div class="post__author author vcard inline-items">
								<img src="img/avatar4-sm.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											1 hour ago
										</time>
									</div>
								</div>

								<a href="#" class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</a>

							</div>

							<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon">
									<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
								</svg>
								<span>7</span>
							</a>
							<a href="#" class="reply">Reply</a>

						</li>
					</ul>

					<!-- ... end Comments -->
					<a href="#" class="more-comments">View more comments <span>+</span></a>

					<!-- Comment Form  -->

					<form class="comment-form inline-items">

						<div class="post__author author vcard inline-items">
							<img src="img/author-page.jpg" alt="author">

							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder=""></textarea>
								<div class="add-options-message">
									<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
										<svg class="olymp-camera-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
										</svg>
									</a>
								</div>
							</div>
						</div>

						<button class="btn btn-md-2 btn-primary">Post Comment</button>

						<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

					</form>

					<!-- ... end Comment Form  -->				</div>
				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post has-post-thumbnail shared-photo">

							<div class="post__author author vcard inline-items">
								<img src="img/author-page.jpg" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared
									<a href="#">Diana Jameson</a>’s <a href="#">photo</a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											7 hours ago
										</time>
									</div>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
									<ul class="more-dropdown">
										<li>
											<a href="#">Edit Post</a>
										</li>
										<li>
											<a href="#">Delete Post</a>
										</li>
										<li>
											<a href="#">Turn Off Notifications</a>
										</li>
										<li>
											<a href="#">Select as Featured</a>
										</li>
									</ul>
								</div>

							</div>

							<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

							<div class="post-thumb">
								<img src="img/post-photo6.jpg" alt="photo">
							</div>

							<ul class="children single-children">
								<li>
									<div class="post__author author vcard inline-items">
										<img src="img/avatar8-sm.jpg" alt="author">
										<div class="author-date">
											<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													16 hours ago
												</time>
											</div>
										</div>
									</div>

									<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
								</li>
							</ul>

							<div class="post-additional-info inline-items">

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
									</svg>
									<span>15</span>
								</a>

								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
								</ul>

								<div class="names-people-likes">
									<a href="#">Diana</a>, <a href="#">Nicholas</a> and
									<br>13 more liked this
								</div>

								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
										</svg>
										<span>0</span>
									</a>

									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-share-icon">
											<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
										</svg>
										<span>16</span>
									</a>
								</div>

							</div>

							<div class="control-block-button post-control-button">

								<a href="#" class="btn btn-control">
									<svg class="olymp-like-post-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</a>

								<a href="#" class="btn btn-control">
									<svg class="olymp-share-icon">
										<use xlink:href="../svg-icons/sprites/icons.svg#olymp-share-icon"></use>
									</svg>
								</a>

							</div>

						</article>

					<!-- .. end Post -->				</div>
			</div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="../svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<div class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
						</li>
						<li>
							<span class="title">Favourite TV Shows:</span>
							<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
						</li>
						<li>
							<span class="title">Favourite Music Bands / Artists:</span>
							<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
						</li>
					</ul>

					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->

					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<i class="fa fa-dribbble" aria-hidden="true"></i>
							Dribbble
						</a>
					</div>


					<!-- ... end W-Socials -->
				</div>
			</div>






		</div>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friends (86)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->

					<ul class="widget w-faved-page js-zoom-gallery">
						<li>
							<a href="#">
								<img src="img/avatar38-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar24-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar36-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar35-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar34-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar33-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar32-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar31-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar30-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar29-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar28-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar27-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar26-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/avatar25-sm.jpg" alt="user">
							</a>
						</li>
						<li class="all-users">
							<a href="#">+74</a>
						</li>
					</ul>

					<!-- .. end W-Faved-Page -->
				</div>
			</div>



		</div>

		<!-- ... end Right Sidebar -->

	</div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-cover-photo">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Cover Photo</h6>
		</div>
		<script src="../jquery.js"></script>

		<script type="text/javascript">
		$(document).ready(function (e) {
			$("#uploadForm1").on('submit',(function(e) {
				e.preventDefault();
				$.ajax({
		        	url: "upload_cover_photo.php",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
		    	    cache: false,
					processData:false,
					success: function(data)
				    {
					$("#targetLayer1").html(data);
				    },
				  	error: function()
			    	{
			    	}
			   });
			}));
		});
		</script>

		<form id="uploadForm1" action="upload_cover_photo.php" method="post">
		<div id="targetLayer1">No Image</div>
<input type="file" value="" class="upload-photo-item" name="coverImage">
<input type="submit" value="Submit" class="btnSubmit" name="btnSubmitforcover" />

		</form>



</div>
</div>



<!-- ... end Window-popup Update Header Photo -->










<div class="modal fade" id="update-profile-photo">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Profile Photo</h6>
		</div>
		<script src="../jquery.js"></script>

		<script type="text/javascript">
		$(document).ready(function (e) {
			$("#uploadForm").on('submit',(function(e) {
				e.preventDefault();
				$.ajax({
		        	url: "upload_profile_photo.php",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
		    	    cache: false,
					processData:false,
					success: function(data)
				    {
					$("#targetLayer").html(data);
				    },
				  	error: function()
			    	{
			    	}
			   });
			}));
		});
		</script>

		<form id="uploadForm" action="upload_profile_photo.php" method="post">
		<div id="targetLayer">No Image</div>
		<div id="uploadFormLayer">
<input type="file" value="" class="upload-photo-item" name="profileImage">
<input type="submit" value="Submit" class="btnSubmit" name="btnSubmitforprofile" />

		</form>



	</div>
</div>
</div>
















<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo">
	<div class="modal-dialog ui-block window-popup choose-from-my-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Choose from My Photos</h6>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
						<svg class="olymp-photos-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
						<svg class="olymp-albums-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
					</a>
				</li>
			</ul>
		</div>


		<div class="ui-block-content">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo1.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo2.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo3.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo4.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo5.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo6.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo7.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo8.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<div class="radio">
							<label class="custom-radio">
								<img src="img/choose-photo9.jpg" alt="photo">
								<input type="radio" name="optionsRadios">
							</label>
						</div>
					</div>


					<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
					<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

				</div>
				<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="img/choose-photo10.jpg" alt="photo">
							<figcaption>
								<a href="#">South America Vacations</a>
								<span>Last Added: 2 hours ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="img/choose-photo11.jpg" alt="photo">
							<figcaption>
								<a href="#">Photoshoot Summer 2016</a>
								<span>Last Added: 5 weeks ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="img/choose-photo12.jpg" alt="photo">
							<figcaption>
								<a href="#">Amazing Street Food</a>
								<span>Last Added: 6 mins ago</span>
							</figcaption>
						</figure>
					</div>

					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="img/choose-photo13.jpg" alt="photo">
							<figcaption>
								<a href="#">Graffity & Street Art</a>
								<span>Last Added: 16 hours ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="img/choose-photo14.jpg" alt="photo">
							<figcaption>
								<a href="#">Amazing Landscapes</a>
								<span>Last Added: 13 mins ago</span>
							</figcaption>
						</figure>
					</div>
					<div class="choose-photo-item" data-mh="choose-item">
						<figure>
							<img src="img/choose-photo15.jpg" alt="photo">
							<figcaption>
								<a href="#">The Majestic Canyon</a>
								<span>Last Added: 57 mins ago</span>
							</figcaption>
						</figure>
					</div>


					<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
					<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->

<!-- Playlist Popup -->

<div class="window-popup playlist-popup">

	<a href="#" class="icon-close js-close-popup">
		<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
	</a>

	<table class="playlist-popup-table">

		<thead>

		<tr>

			<th class="play">
				PLAY
			</th>

			<th class="cover">
				COVER
			</th>

			<th class="song-artist">
				SONG AND ARTIST
			</th>

			<th class="album">
				ALBUM
			</th>

			<th class="released">
				RELEASED
			</th>

			<th class="duration">
				DURATION
			</th>

			<th class="spotify">
				GET IT ON SPOTIFY
			</th>

			<th class="remove">
				REMOVE
			</th>
		</tr>

		</thead>

		<tbody>
		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="../svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist19.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">We Can Be Heroes</a>
					<a href="#" class="composition-author">Jason Bowie</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Ziggy Firedust</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="../svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist6.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
					<a href="#" class="composition-author">System of a Revenge</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Wonderize</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="../svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist7.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Pretender</a>
					<a href="#" class="composition-author">Kung Fighters</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Warping Lights</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="../svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist8.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Seven Nation Army</a>
					<a href="#" class="composition-author">The Black Stripes</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="../svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist9.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Leap of Faith</a>
					<a href="#" class="composition-author">Eden Artifact</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="../svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="img/playlist10.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Killer Queen</a>
					<a href="#" class="composition-author">Archiduke</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">News of the Universe</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fa fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="../svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>
		</tbody>
	</table>

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.png" type="audio/mpeg">
	</audio>

</div>

<!-- ... end Playlist Popup -->


<a class="back-to-top" href="#">
	<img src="../svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>


<?php include "../includes/footer.php"; ?>

<!-- JS Scripts -->
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/jquery.appear.js"></script>
<script src="../js/jquery.mousewheel.js"></script>
<script src="../js/perfect-scrollbar.js"></script>
<script src="../js/jquery.matchHeight.js"></script>
<script src="../js/svgxuse.js"></script>
<script src="../js/imagesloaded.pkgd.js"></script>
<script src="../js/Headroom.js"></script>
<script src="../js/velocity.js"></script>
<script src="../js/ScrollMagic.js"></script>
<script src="../js/jquery.waypoints.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/bootstrap-select.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/selectize.js"></script>
<script src="../js/swiper.jquery.js"></script>
<script src="../js/moment.js"></script>
<script src="../js/daterangepicker.js"></script>
<script src="../js/simplecalendar.js"></script>
<script src="../js/fullcalendar.js"></script>
<script src="../js/isotope.pkgd.js"></script>
<script src="../js/ajax-pagination.js"></script>
<script src="../js/Chart.js"></script>
<script src="../js/chartjs-plugin-deferred.js"></script>
<script src="../js/circle-progress.js"></script>
<script src="../js/loader.js"></script>
<script src="../js/run-chart.js"></script>
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/jquery.gifplayer.js"></script>
<script src="../js/mediaelement-and-player.js"></script>
<script src="../js/mediaelement-playlist-plugin.min.js"></script>

<script src="../js/base-init.js"></script>

<script src="../Bootstrap/dist/js/bootstrap.bundle.js"></script>


</body>

</html>
