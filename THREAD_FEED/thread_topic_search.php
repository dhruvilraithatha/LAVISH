<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Forums Category Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/dist/css/bootstrap.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="../css/fonts.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.min.css">

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
<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php"; ?>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->
<?php include "../includes/header.php"; ?>


<!-- Main Header Groups -->
<?php include "includes/header-animation.php"; ?>


<!-- ... end Main Header Groups -->
<?php include "includes/thread_searchbar.php"; ?>



<div class="container">
	<div class="row">
		<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">

			<div class="ui-block">


				<!-- Forums Table -->

				<table class="forums-table">

					<thead>

					<tr>

						<th class="forum">
							Forum
						</th>

						<th class="posts">
							Posts
						</th>


					</tr>

					</thead>

					<tbody>
						<?php
              $tags=$_REQUEST['tags'];
							$query="SELECT * FROM thread_topic WHERE topic_name LIKE '%$tags%';";
							$result=mysqli_query($connection,$query);
							while ($row=mysqli_fetch_assoc($result)) {
								$topic_id=$row['topic_id'];
								$topic_name=$row['topic_name'];
								$topic_image=$row['topic_image'];
								$topic_info=$row['topic_info'];
								$thread_id=$row['thread_id'];
								$thread_topic_type=$row['thread_topic_type'];
								if($thread_topic_type!=1)
								{
						 ?>
					<tr>
						<td class="forum">
							<div class="forum-item">
								<img src="images/<?php echo $topic_image; ?>" alt="forum" height="42" width="42">
								<div class="content">
									<?php  ?>
									<a href='<?php echo "thread_topic_post.php?thread_id=".$thread_id."&topic_id=".$topic_id ?>' class="h6 title"><?php echo $topic_name; ?></a>
									<!--<a href="thread_topic_post.php?thread_id=<?php // echo $thread_id;?>&topic_id=<?php //echo $topic_id; ?>" ></a>-->
									<p class="text"><?php echo $topic_info; ?></p>
								</div>
							</div>
						</td>

						<td class="posts">
							<a href="#" class="h6 count">36</a>
						</td>

					</tr>

					<?php
				}
						else
						{
					?>
					<tr class="bg-smoke-light">
						<td class="forum">
							<div class="forum-item">
								<i class="icon fa fa-star" aria-hidden="true"></i>
								<div class="content">
									<a href='<?php echo "thread_topic_post.php?thread_id=".$thread_id."&topic_id=".$topic_id ?>' class="h6 title"><?php echo $topic_name; ?></a>
								</div>
								<div class="author-started">
									<span>Started by:</span>
									<div class="author-thumb">
										<img src="kishan.jpg" alt="author">
									</div>
									<a href="#" class="h6 title">Kool Kishan</a>
								</div>
							</div>
						</td>

						<td class="posts">
							<a href="#" class="h6 count">24</a>
						</td>

					</tr>
				<?php } ?>
<?php } ?>


					</tbody>
				</table>

				<!-- ... end Forums Table -->

			</div>



		</div>

		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Recent Topics</h6>
				</div>
				<div class="ui-block-content">


					<!-- Widget Recent Topics -->

				<?php include "includes/recent_topics.php" ?>
					<!-- ... end Widget Recent Topics -->
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
