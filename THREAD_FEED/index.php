<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>LAVISH THREAD</title>

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

	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">

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
<?php include "../includes/sidebar-left.php" ?>
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php" ?>
<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->
<?php include "../includes/header.php"; ?>
<!-- ... end Responsive Header-BP -->


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
							Category
						</th>

						<th class="topics">
							Topics
						</th>

						<th class="posts">
							Posts
						</th>

					</tr>

					</thead>

					<tbody>
						<?php
						//for topic and post count


						?>
						<?php
							$query="SELECT * FROM thread;";
							$result=mysqli_query($connection,$query);
							while ($row=mysqli_fetch_assoc($result)) {
								$thread_id=$row['thread_id'];
								$thread_name=$row['thread_name'];
								$thread_image=$row['thread_image'];
								$thread_info=$row['thread_info'];



								$count_topic=0;
								$total_post=0;
								$query1="SELECT * FROM thread_topic WHERE thread_id=$thread_id;";
								$result1=mysqli_query($connection,$query1);
								while ($row=mysqli_fetch_assoc($result1)) {
									$count_topic += 1;
								}
								$post_array=array();
								$a=0;
								$query2="SELECT post_count FROM thread_topic WHERE thread_id=$thread_id;";
								$result2=mysqli_query($connection,$query2);
								while($row=mysqli_fetch_assoc($result2)) {
									$total_post += $row['post_count'];
								}

						 ?>
					<tr>
						<td class="forum">
							<div class="forum-item">
								<img src="images/<?php echo $thread_image; ?>" alt="forum" height="46" width="42">
								<div class="content">
									<a href="thread_topics.php?id=<?php echo $thread_id; ?>" class="h6 title"><?php echo $thread_name; ?></a>
									<p class="text"><?php echo $thread_info; ?></p>
								</div>
							</div>
						</td>
						<td class="topics">
							<a class="h6 count"><?php echo $count_topic ?></a>
						</td>
						<td class="posts">
							<a class="h6 count"><?php echo $total_post ?></a>
						</td>
					</tr>

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
