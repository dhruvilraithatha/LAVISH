<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Forums - Create Topic</title>

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
	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.css">

</head>

<body style="background-image: url(../img/bg-20.jpg);">




<!-- Fixed Sidebar Left -->
<?php include "../includes/sidebar-left.php" ?>
<!-- ... end Fixed Sidebar Left -->


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
				<div class="ui-block-title bg-blue">
					<h6 class="title c-white">Create a New Topic</h6>
				</div>
				<div class="ui-block-content">

					<form method="post" action="createtopiccode.php">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Topic Title</label>
									<input class="form-control" type="text"  name=topic_name required>
								</div>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Category</label>
									<select class="selectpicker form-control" name="cat">
										<?php
											$query="SELECT * FROM thread;";
											$result=mysqli_query($connection,$query);
											while ($row=mysqli_fetch_assoc($result)) {
												$thread_id=$row['thread_id'];
												$thread_name=$row['thread_name'];

										 ?>
										<option value="<?php echo $thread_id; ?>"><?php echo $thread_name; ?></option>
									<?php } ?>
									</select>
								</div>
							</div>


							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group label-floating">
									<label class="control-label">Topic Info</label>
									<textarea class="form-control" style="height: 240px" name="topic_info"></textarea>
								</div>


							</div>

							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<a href="index.php" class="btn btn-secondary btn-lg full-width">Cancel</a>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<button class="btn btn-blue btn-lg full-width" name="submit">Post Topic</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

		<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Recent Topics</h6>
				</div>
				<div class="ui-block-content">


					<!-- Widget Recent Topics -->
<?php include "includes/recent_topics.php " ?>
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

<!-- Load more news AJAX script -->
<script src="../js/ajax-pagination.js"></script>

<!-- Swiper / Sliders -->
<script src="../js/swiper.jquery.min.js"></script>

<script src="../js/isotope.pkgd.min.js"></script>

<script src="../js/mediaelement-and-player.min.js"></script>
<script src="../js/mediaelement-playlist-plugin.min.js"></script>



</body>

</html>
