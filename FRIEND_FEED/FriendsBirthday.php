<?php include "includes/dbconnect.php" ?>

<?php include('../LOGIN-SIGNUP/session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Friends Birthday</title>

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
<body>


<!-- Fixed Sidebar Left -->
<?php include "../includes/sidebar-left.php" ?>
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php"?>
<!-- Header -->
<?php include "../includes/header.php"?>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<div class="header-spacer header-spacer-small"></div>


<!-- Main Header Birthday -->

<div class="main-header">
	<div class="content-bg-wrap">
		<div class="content-bg bg-birthday"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 m-auto col-md-8 col-sm-12 col-xs-12">
				<div class="main-header-content">
					<h1>Never Miss a Birthday!</h1>
					<p>Welcome to your friends birthdays page! Here you’ll find all your friends birthdays so you’ll never
						mis one again! In addition, the dates are automatically saved to your calendar to let you know,
						but you also have a “Create Event” button in case you wanna organize a party or event on that especific date.
					</p>
				</div>
			</div>
		</div>
	</div>

	<img class="img-bottom" src="img/birthdays-bottom.png" alt="friends">
</div>

<!-- ... end Main Header Birthday -->

<!-- Main Content Birthday -->


	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">January</h6>
					</div>
				</div>
			</div>
		<?php
		$friend_count=count($array_for_storing_my_friend);

		if ($temp!=0) {
			for ($i=0; $i <$friend_count ; $i++) {
			$query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 01;";
			$result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
				while($row=mysqli_fetch_assoc($result_for_select_friend))
				{
					$bday=$row['bday'];
					$year=substr($bday,0,4);
					$day=substr($bday,8,2);
			?>


					<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="ui-block">
							<div class="birthday-item inline-items">
								<div class="author-thumb">
									<img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
								</div>
								<div class="birthday-author-name">
									<a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
									<div class="birthday-date">
										<?php
										if ($day=='01' OR $day=='21')
										{
											echo "January " .$day."st,&nbsp; ". $year;
										}
										if ($day=='02' || $day=='22') {
											echo "January " .$day."nd,&nbsp; ". $year;
										}
										else {
											echo "January " .$day."th,&nbsp; ". $year;

										}

									?>
								</div>
								</div>
								<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-grey">Create Event</a>
							</div>
						</div>
					</div>




					<?php
	}
	}
}
			?>


		 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <div class="ui-block">
				 <div class="ui-block-title">
					 <h6 class="title">February</h6>
				 </div>
			 </div>
		 </div>
		 <?php
		 if ($temp!=0) {
 		for ($i=0; $i <$friend_count ; $i++) {
 		$query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 02;";
 		$result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
 			while($row=mysqli_fetch_assoc($result_for_select_friend))
 			{
				$bday=$row['bday'];
				$year=substr($bday,0,4);
				$day=substr($bday,8,2);
 				?>

				<div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
 					<div class="ui-block">
 						<div class="birthday-item inline-items">
 							<div class="author-thumb">
 								<img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
 							</div>
 							<div class="birthday-author-name">
 								<a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
 								<div class="birthday-date">
									<?php
									if ($day=='01' OR $day=='21')
									{
										echo "February " .$day."st,&nbsp; ". $year;
									}
									if ($day=='02' || $day=='22') {
										echo "February " .$day."nd,&nbsp; ". $year;
									}
									else {
										echo "February " .$day."th,&nbsp; ". $year;

									}

								?>
 							</div>
 							<a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-yellow">Create Event</a>
 						</div>
 					</div>
 				</div>
			</div>
 				<?php
 }}
 }
 		?>



		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">March</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 03;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
							 									if ($day=='01' OR $day=='21')
							 									{
							 										echo "March " .$day."st,&nbsp; ". $year;
							 									}
							 									if ($day=='02' || $day=='22') {
							 										echo "March " .$day."nd,&nbsp; ". $year;
							 									}
							 									else {
							 										echo "March " .$day."th,&nbsp; ". $year;

							 									}

							 								?>
</div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">April</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 04;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
															if ($day=='01' OR $day=='21')
															{
																echo "April " .$day."st,&nbsp; ". $year;
															}
															else if ($day=='02' || $day=='22') {
																echo "April " .$day."nd,&nbsp; ". $year;
															}
															else {
																echo "April " .$day."th,&nbsp; ". $year;

															}

														?></div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-orange">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">May</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 05;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
														if ($day=='01' OR $day=='21')
														{
															echo "May " .$day."st,&nbsp; ". $year;
														}
														if ($day=='02' || $day=='22') {
															echo "May " .$day."nd,&nbsp; ". $year;
														}
														else {
															echo "May " .$day."th,&nbsp; ". $year;

														}

													?>
												</div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-green">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">June</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 06;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
													 if ($day=='01' OR $day=='21')
													 {
														 echo "June " .$day."st,&nbsp; ". $year;
													 }
													 if ($day=='02' || $day=='22') {
														 echo "June " .$day."nd,&nbsp; ". $year;
													 }
													 else {
														 echo "June " .$day."th,&nbsp; ". $year;

													 }

												 ?>
							 </div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm" style="background-color: #FF1493;">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">July</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 07;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
												 if ($day=='01' OR $day=='21')
												 {
													 echo "July " .$day."st,&nbsp; ". $year;
												 }
												 if ($day=='02' || $day=='22') {
													 echo "July " .$day."nd,&nbsp; ". $year;
												 }
												 else {
													 echo "July " .$day."th,&nbsp; ". $year;

												 }

											 ?>
										 </div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-grey">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">August</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 08;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
											 if ($day=='01' OR $day=='21')
											 {
												 echo "August " .$day."st,&nbsp; ". $year;
											 }
											 if ($day=='02' || $day=='22') {
												 echo "August " .$day."nd,&nbsp; ". $year;
											 }
											 else {
												 echo "August " .$day."th,&nbsp; ". $year;

											 }

										 ?>
								</div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-yellow">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">September</h6>
				</div>
			</div>
		</div>

		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 09;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date"><?php
										 if ($day=='01' OR $day=='21')
										 {
											 echo"September " .$day."st,&nbsp; ". $year;
										 }
										 if ($day=='02' || $day=='22') {
											 echo"September " .$day."nd,&nbsp; ". $year;
										 }
										 else {
											 echo"September " .$day."th,&nbsp; ". $year;

										 }

									 ?></div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-blue">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>




		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">October</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 10;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
										 if ($day=='01' OR $day=='21')
										 {
											 echo "October " .$day."st,&nbsp; ". $year;
										 }
										 if ($day=='02' || $day=='22') {
											 echo "October " .$day."nd,&nbsp; ". $year;
										 }
										 else {
											 echo "October " .$day."th,&nbsp; ". $year;

										 }

									 ?>
								 </div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-orange">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">November</h6>
				</div>
			</div>
		</div>
		<?php
		if ($temp!=0) {
	 for ($i=0; $i <$friend_count ; $i++) {
	 $query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 11;";
	 $result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);

			 ?>
			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date">
								 <?php
									 if ($day=='01' OR $day=='21')
									 {
										 echo "November " .$day."st,&nbsp; ". $year;
									 }
									 if ($day=='02' || $day=='22') {
										 echo "November " .$day."nd,&nbsp; ". $year;
									 }
									 else {
										 echo "November " .$day."th,&nbsp; ". $year;

									 }

								 ?>
							 </div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm bg-green">Create Event</a>
					 </div>
				 </div>
			 </div>
			 <?php
}
}
}
	 ?>


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">December</h6>
				</div>
			</div>
		</div>
		<?php
		//	echo "HEllo";
		if ($temp!=0) {
		for ($i=0; $i <$friend_count ; $i++) {
		 # code...
		$query_for_select_friend="SELECT * FROM user WHERE user_id=$array_for_storing_my_friend[$i] AND MONTH(bday)= 12;";
		$result_for_select_friend=mysqli_query($connection,$query_for_select_friend);
		 while($row=mysqli_fetch_assoc($result_for_select_friend))
		 {
			 $bday=$row['bday'];
			 $year=substr($bday,0,4);
			 $day=substr($bday,8,2);
		 ?>


			 <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
				 <div class="ui-block">
					 <div class="birthday-item inline-items">
						 <div class="author-thumb">
							 <img src="<?php echo $row['profile_pic']; ?>" alt="author" style="height:42px;width:42px;">
						 </div>
						 <div class="birthday-author-name">
							 <a href="#" class="h6 author-name"><?php echo $row['uname'];?></a>
							 <div class="birthday-date"><?php
								 if ($day=='01' OR $day=='21')
								 {
									 echo "December " .$day."st,&nbsp; ". $year;
								 }
								 if ($day=='02' || $day=='22') {
									 echo "December " .$day."nd,&nbsp; ". $year;
								 }
								 else {
									 echo "December " .$day."th,&nbsp; ". $year;

								 }

							 ?></div>
						 </div>
						 <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-sm" style="background-color: #FF1493;">Create Event</a>
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

<!-- ... end Main Content Birthday -->



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive">
	<div class="ui-block-title">
		<span class="icon-status online"></span>
		<h6 class="title" >Chat</h6>
		<div class="more">
			<svg class="olymp-three-dots-icon"><use xlink:href="icons/icons.svg#olymp-three-dots-icon"></use></svg>
			<svg class="olymp-little-delete js-chat-open"><use xlink:href="icons/icons.svg#olymp-little-delete"></use></svg>
		</div>
	</div>
	<div class="mCustomScrollbar">
		<ul class="notification-list chat-message chat-message-field">
			<li>
				<div class="author-thumb">
					<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="img/author-page.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Don’t worry Mathilda!</span>
					<span class="chat-message-item">I already bought everything</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
				</div>
			</li>

			<li>
				<div class="author-thumb">
					<img src="img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
				</div>
				<div class="notification-event">
					<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
					<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
				</div>
			</li>
		</ul>
	</div>

	<form>

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="icons/icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="img/icon-chat1.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat2.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat3.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat4.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat5.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat6.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat7.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat8.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat9.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat10.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat11.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat12.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat13.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat14.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat15.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat16.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat17.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat18.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat19.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat20.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat21.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat22.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat23.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat24.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat25.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat26.png" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/icon-chat27.png" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
			 </div>

	</form>


</div>
<div class="header-spacer header-spacer-small"></div>

<?php include "../includes/footer.php"; ?>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


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

<script src="../js/mediaelement-and-player.min.js"></script>
<script src="../js/mediaelement-playlist-plugin.min.js"></script>


</body>
</html>
