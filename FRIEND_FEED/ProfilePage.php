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
	 <!--Theme Styles CSS
	<link rel="stylesheet" type="text/css" href="../css/theme-styles.css">
	<link rel="stylesheet" type="text/css" href="../css/blocks.css">-->

	<link rel="stylesheet" type="text/css" href="../css/main.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.min.css">

	<!-- Styles for plugins -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" type="text/css" href="../css/swiper.min.css">


</head>
<body style="background-image: url(../img/bg-20.jpg);" >

	<?php
	if($bday==NULL)
	{
		?>
	<script src="../js/jquery-3.2.1.js"></script>
	<script type="text/javascript">
	$(window).on('load',function(){
        $('#edit-widget-blog-post').modal('show');
    });
</script>

<?php
}
?>


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

<div class="modal fade" id="edit-widget-blog-post">
	<div class="modal-dialog ui-block window-popup update-header-photo">
		<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
			<svg class="olymp-close-icon"><use xlink:href="../SVG-ICONS/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>
		<script src="../jquery.js"></script>

		<script type="text/javascript">
		$(document).ready(function (e) {
			$("#upload_form_new_bday").on('submit',(function(e) {
				e.preventDefault();
				$.ajax({
							url: "includes/snippets/bday_insert.php",
					type: "POST",
					data:  new FormData(this),
					contentType: false,
							cache: false,
					processData:false,
					success: function(data)
						{
					//$("#targetLayer1").html(data);
					$('#edit-widget-blog-post').modal('hide')
						},
						error: function()
						{
						}
				 });
			}));
		});
		</script>

		<form method="post" id="upload_form_new_bday">
		<div class="ui-block-title">
			<h6 class="title">Please Enter Your Birthdate</h6>
			<br>
		</div>
			<div class="form-group date-time-picker">
				<input type="text" name="datetimepicker" value="10/24/1984"/>
				<span class="input-group-addon">
					<svg class="olymp-month-calendar-icon icon"><use xlink:href="icons/icons.svg#olymp-month-calendar-icon"></use></svg>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
				<button type="submit" class="btn btn-grey-light btn-lg">Submit</button>
			</div>

		</form>



</div>
</div>









<!-- Top Header-Profile -->

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header">
					<div class="top-header-thumb">
						<img src="<?php echo $header_photo; ?>" alt="nature" style="height:550px;">
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-lg-5 col-md-5 ">
								<ul class="profile-menu">
									<li>
										<a href="#" class="active">Timeline</a>
									</li>
									<!--<li>
										<a href="05-ProfilePage-About.html">About</a>
									</li>-->
									<li>
										<a href="myfriends.php">Friends</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-5 ml-auto col-md-5">
								<ul class="profile-menu">
									<li>
										<a href="#">Photos</a>
									</li>
									<li>
										<a href="#">Videos</a>
									</li>
									<!--<li>
										<div class="more">
											<svg class="olymp-three-dots-icon"><use xlink:href="../SVG-ICONS/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
											<ul class="more-dropdown more-with-triangle">
												<li>
													<a href="#">Report Profile</a>
												</li>
												<li>
													<a href="#">Block Profile</a>
												</li>
											</ul>
										</div>
									</li>-->
								</ul>
							</div>
						</div>

						<div class="control-block-button">


							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="../SVG-ICONS/sprites/icons.svg#olymp-settings-icon"></use></svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#" data-toggle="modal" data-target="#update-profile-photo">Update Profile Photo</a>
									</li>
									<li>
										<a href="#" data-toggle="modal" data-target="#update-cover-photo">Update Cover Photo</a>
									</li>
									<!--<li>
										<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
									</li>-->
								</ul>
							</div>
						</div>
					</div>
					<div class="top-header-author">
						<a href="#" class="author-thumb">
							<img src="<?php echo $profile_pic ?>" alt="author" style="height:120px;width:120px">
						</a>
						<div class="author-content">
							<a href="#" class="h4 author-name"><?php echo $login_session; ?></a>
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
				<?php
				$query_for_viewing_posts="SELECT * FROM post WHERE post_by=$user_id;";
				$result_for_viewing_posts=mysqli_query($connection,$query_for_viewing_posts);
				while ($row=mysqli_fetch_assoc($result_for_viewing_posts)) {
					$post_id=$row['post_id'];
					$post_content=$row['post_content'];
				 ?>
				<div class="ui-block">
					<!-- Post -->

					<article class="hentry post">

							<div class="post__author author vcard inline-items">
								<img src="<?php echo $profile_pic; ?>" alt="author">

								<div class="author-date">
									<a class="h6 post__author-name fn" href="#"><?php echo $login_session;?></a>
									<div class="post__date">
										<time class="published" datetime="2017-03-24T18:18">
											19 hours ago
										</time>
									</div>
								</div>


							</div>

							<p><?php echo
							$post_content = wordwrap( $post_content, 90, "<br>", 1);

							$post_content; ?></p>



						</article>
					<!-- .. end Post -->				</div>
				<?php }?>



			</div>

			<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
				<svg class="olymp-three-dots-icon">
					<use xlink:href="../SVG-ICONS/sprites/icons.svg#olymp-three-dots-icon"></use>
				</svg>
			</a>
		</div>

		<!-- ... end Main Content -->


		<!-- Left Sidebar -->

		<div class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="widget w-action">
					<div class="content">
						<h4 class="title">L A V I S H</h4>
						<a href="newsfeed.php" class="btn btn-bg-secondary btn-md">GOTO STATUS FEED</a>
					</div>
				</div>
			</div>
	<!--		<div class="ui-block">

				<div class="ui-block-content">

					<!-- W-Personal-Info -->

				<!--	<ul class="widget w-personal-info item-block">
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
					</ul>-->

					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->

					<!--<div class="widget w-socials">
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
-->

					<!-- ... end W-Socials -->
		<!--		</div>
			</div>-->






		</div>

		<!-- ... end Left Sidebar -->


		<!-- Right Sidebar -->

		<div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friends (<?php
					if ($temp!=0) {
					echo count($array_for_storing_my_friend);
				}
				else {
					echo 0;
				}
				?>)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->

					<ul class="widget w-faved-page js-zoom-gallery">
						<?php
						if ($temp!=0) {
						foreach ($array_for_storing_my_friend as $key )
						{
							$query_for_fetching_images_of_my_friends="SELECT profile_pic FROM user WHERE user_id=$key;";
							$result_for_fetching_images_of_my_friends=mysqli_query($connection,$query_for_fetching_images_of_my_friends);
							while ($row_of_images=mysqli_fetch_assoc($result_for_fetching_images_of_my_friends)) {
								$image_of_friend=$row_of_images['profile_pic'];
							}
							?>


						<li>
							<a href="#">
								<img src="<?php echo $image_of_friend; ?>" alt="author" style="height:34px;width:34px;">
							</a>
						</li>
						<?php
					}}
						?>

						<!--<li class="all-users">
							<a href="#">+74</a>
						</li>-->
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
			<svg class="olymp-close-icon"><use xlink:href="../SVG-ICONS/sprites/icons.svg#olymp-close-icon"></use></svg>
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
			<svg class="olymp-close-icon"><use xlink:href="../SVG-ICONS/sprites/icons.svg#olymp-close-icon"></use></svg>
		</a>

		<div class="ui-block-title">
			<h6 class="title">Update Profile Photo</h6>
		</div>
		<script src="jquery.js"></script>

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



















<a class="back-to-top" href="#">
	<img src="../SVG-ICONS/back-to-top.svg" alt="arrow" class="back-icon">
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

<!-- jQuery first, then Other JS. -->
<script src="../js/jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="../js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="../js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="../js/main.js"></script>

<script src="../js/daterangepicker.min.js"></script>
<!-- Select / Sorting script -->
<script src="../js/selectize.min.js"></script>

<!-- Swiper / Sliders -->
<script src="../js/swiper.jquery.min.js"></script>



</body>

</html>
