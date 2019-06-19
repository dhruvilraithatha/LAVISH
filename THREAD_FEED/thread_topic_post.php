<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Thread Topic Discussion</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="../css/main.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.min.css">

	<!-- Main Font -->
	<script src="../js/webfontloader.min.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

</head>

<body style="background-image: url(../img/bg-20.jpg);">



<!-- Fixed Sidebar Left -->

<?php include "../includes/sidebar-left.php"; ?>
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php"; ?>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->
<?php include "../includes/header.php"; ?>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->
<!-- ... end Responsive Header-BP -->


<!-- Main Header Groups -->
<?php include "includes/header-animation.php"; ?>

<!-- ... end Main Header Groups -->
<?php include "includes/thread_searchbar.php"; ?>

<div class="container">
	<div class="row">
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">

			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<i class="icon fa fa-star c-yellow" aria-hidden="true"></i>
					<div class="h6 title">	<?php
						$topic_id=$_REQUEST['topic_id'];
						$thread_id=$_REQUEST['thread_id'];
						$query="SELECT * FROM thread_topic WHERE topic_id=$topic_id;";
						$result=mysqli_query($connection,$query);
						while ($row=mysqli_fetch_assoc($result)) {
							$topic_name=$row['topic_name'];
							echo $topic_name;
						}
						 ?>
					</div>
				</div>


				<!-- Open Topic Table -->

				<table class="open-topic-table">

					<thead>

					<tr>
						<th class="author">
							Author
						</th>

						<th class="posts">
							Post
						</th>
					</tr>

					</thead>

					<tbody>
<?php
		$topic_id=$_REQUEST['topic_id'];
		$query="SELECT * FROM thread_topic_post WHERE topic_id=$topic_id;";
		$result=mysqli_query($connection,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			$thread_topic_post_id=$row['thread_topic_post_id'];
			$thread_topic_post_content=$row['content'];
			$thread_topic_post_date=$row['date'];
			$thread_topic_post_topic_id=$row['topic_id'];
			$thread_topic_post_user_id=$row['user_id'];
			$query_for_selecting_user_details="SELECT * FROM user WHERE user_id=$thread_topic_post_user_id;";
			$result_for_selecting_user_details=mysqli_query($connection,$query_for_selecting_user_details);
			while ($row_for_user_details=mysqli_fetch_assoc($result_for_selecting_user_details)) {
				$thread_topic_post_user_name=$row_for_user_details['uname'];
				$thread_topic_post_user_image=$row_for_user_details['profile_pic'];
			}
?>
					<tr>
						<td class="topic-date" colspan="2">
							<?php echo $thread_topic_post_date; ?>
							<a href="#" class="reply-topic">Reply</a>
						</td>
					</tr>

					<tr>
						<td class="author">
							<div class="author-thumb">
								<img src="../FRIEND_FEED/<?php echo $thread_topic_post_user_image;?>" alt="author">
							</div>
							<div class="author-content">
								<a href="../FRIEND_FEED/ProfilePage.php" class="h6 author-name"><?php echo $thread_topic_post_user_name; ?></a>
								<div class="country">India</div>
							</div>
						</td>
						<td class="posts">
						<?php
						$thread_topic_post_content = wordwrap( $thread_topic_post_content, 130, "<br>", 1);

						 echo $thread_topic_post_content; ?>
						</td>
					</tr>

<?php  } ?>
					<tr>
						<td colspan="2">
							<form class="comment-form inline-items" action="thread_topic_post_comment.php?thread_id=<?php echo $thread_id;?>&topic_id=<?php echo $topic_id; ?>" method="post">

								<div class="post__author author vcard inline-items">
									<img src="../FRIEND_FEED/<?php echo $profile_pic?>" alt="author">

									<div class="form-group with-icon-right ">
										<textarea class="form-control" placeholder="" name="cinsert"></textarea>

									</div>
								</div>

 								<button type="submit" class="btn btn-md-2 btn-primary" name="submit">Post Comment</button>


							</form>
						</td>
					</tr>

					</tbody>
				</table>

				<!-- ... end Open Topic Table -->
			</div>


			<!-- Pagination -->


			<!-- ... end Pagination -->

		</div>

		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Recent Topics</h6>
				</div>
				<div class="ui-block-content">


					<!-- Widget Recent Topics -->

					<?php include "includes/recent_topics.php" ?>

				</div>
			</div>

		</div>

	</div>
</div>




<!-- Window-popup-CHAT for responsive min-width: 768px -->
<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



<a class="back-to-top" href="#">
	<img src="../svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>

<?php include "../includes/footer.php" ?>


<!-- JS Scripts -->
<script src="../js/jquery-3.2.1.js"></script>
<script src="../js/jquery.appear.js"></script>
<script src="../js/jquery.mousewheel.js"></script>
<script src="../js/jquery.matchHeight.js"></script>
<script src="../js/perfect-scrollbar.js"></script>
<script src="../js/imagesloaded.pkgd.js"></script>
<script src="../js/svgxuse.js"></script>
<script src="../js/Headroom.js"></script>
<script src="../js/velocity.js"></script>
<script src="../js/ScrollMagic.js"></script>
<script src="../js/jquery.waypoints.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/bootstrap-select.js"></script>
<script src="../js/selectize.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/swiper.jquery.js"></script>
<script src="../js/moment.js"></script>
<script src="../js/daterangepicker.js"></script>
<script src="../js/simplecalendar.js"></script>
<script src="../js/isotope.pkgd.js"></script>
<script src="../js/fullcalendar.js"></script>
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
