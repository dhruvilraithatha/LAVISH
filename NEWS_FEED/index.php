<?php include "Includes/dbconnect.php";
include('../LOGIN-SIGNUP/session.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>L A V I S H</title>

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
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.css">

</head>
<body style=" background-image: url(../img/bg-20.jpg);">


<!-- Fixed Sidebar Left -->
<?php include "../Includes/sidebar-left.php" ?>
<!-- ... end Fixed Sidebar Left -->

<!-- Fixed Sidebar Left -->

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../Includes/sidebar-right.php"; ?>
<!-- ... end Fixed Sidebar Right -->


<!-- Header -->
<?php include "../Includes/header.php" ?>
<!-- ... end Header -->


<div class="header-spacer header-spacer-LARGE"></div>

<!-- News Search Bar -->
<?php include "Includes/news-search.php" ?>
<!-- End of News Search Bar -->


<div class="container">
	<div class="row sorting-container" id="posts-grid-1" data-layout="masonry">
		<?php
		 	$query="select * from News";
			$result=mysqli_query($connection,$query);
			while($row=mysqli_fetch_assoc($result))
			{
				$news_id=$row['news_id'];
				$news_image=$row['news_image'];
				$news_name=$row['news_name'];
				$news_author=$row['news_author'];
				$news_category=$row['category_id'];
				$news_date=$row['news_post_date'];
					?>
		<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 sorting-item">
			<div class="ui-block">
				<article class="hentry blog-post blog-post-v2">

					<div class="post-thumb">
						<img src="images/<?php echo $news_image ?>" alt="photo">
					</div>

						<div class="post-content">
							<a href="#" class="post-category bg-transparent"><strong><?php
													$query1="SELECT category_name FROM category WHERE category_id=$news_category; ";
													$result1=mysqli_query($connection,$query1);
													while ($row1=mysqli_fetch_assoc($result1)) {
														echo $row1['category_name'];
													}
							?></strong></a>
							<a href="news-post.php?id=<?php echo $news_id; ?>" class="h4 post-title"><?php echo $news_name ?></a>


							<div class="post__author author vcard inline-items">
								<img src="Author/<?php echo $news_author; ?>.jpg" alt="author">

								<div class="author-date not-uppercase">
									<a class="h6 post__author-name fn" href="#"><?php echo $news_author; ?></a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											<?php echo $news_date; ?>

										</time>
									</div>
								</div>

							</div>
						</div>




				</article>
			</div>
		</div>


		<?php
					}

				 ?>
			 </div>







</div></div>


<!-- Window-popup-CHAT for responsive min-width: 768px -->

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
<?php include "../includes/footer.php";?>
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

<!-- Load more news AJAX script -->
<script src="../js/ajax-pagination.js"></script>

<!-- Swiper / Sliders -->
<script src="../js/swiper.jquery.min.js"></script>

<script src="../js/isotope.pkgd.min.js"></script>

<script src="../js/mediaelement-and-player.min.js"></script>
<script src="../js/mediaelement-playlist-plugin.min.js"></script>

</body>
</html>
