<?php include "includes/dbconnect.php";
include('../LOGIN-SIGNUP/session.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Blog V3 Post</title>

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
	<!-- Lightbox popup script-->
	<link rel="stylesheet" type="text/css" href="../css/magnific-popup.css">

</head>
<body style=" background-image: url(../img/bg-20.jpg);">


<!-- Fixed Sidebar Left -->

<?php  include "../includes/sidebar-left.php"; ?>
<!-- ... end Fixed  Sidebar Left -->

<!-- Fixed Sidebar Left -->
<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->
<?php include "../includes/sidebar-right.php";  ?>
<!-- Header -->
<!-- ... end Header -->

<!-- Responsive Header -->
<?php include "../includes/header.php"; ?>
<!-- ... end Responsi../ve Header -->

<?php
	$newsid=$_GET['id'];
	{
	$query="Select * FROM news where news_id=$newsid";
	$select_news_query=mysqli_query($connection,$query);
	//if ($select_news_query) {
	//	echo "Success";
	//}
	//else {
	//	echo "Failed" . mysqli_error($connection);
	//}
	while($row=mysqli_fetch_assoc($select_news_query))
	{
		$news_title=$row['news_name'];
		$news_author=$row['news_author'];
		$news_date=$row['news_post_date'];
		$news_category=$row['category_id'];
		$news_image=$row['news_image'];
		$news_content=$row['news_content'];
		$news_tags=$row['news_tags'];
		$news_comment_id=$row['comment_id'];
	}
	}
 ?>
<div class="header-spacer header-spacer-small"></div>


<div class="container">
	<div class="row m-t-50">

		<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<article class="hentry blog-post single-post single-post-v3">

					<a href="#" class="post-category bg-primary"><?php
											$query="SELECT category_name FROM category WHERE category_id=$news_category; ";
											$result=mysqli_query($connection,$query);
											while ($row=mysqli_fetch_assoc($result)) {
												echo $row['category_name'];
											}
					?></a>
<?php
	$query="SELECT * FROM news WHERE news_id=$newsid;";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		$joy=$row['reaction_joy'];
		$bad=$row['reaction_bad'];
		$like=$row['reaction_likee'];
		$amazed=$row['reaction_amazed'];
		$cool=$row['reaction_cool'];
	}
 ?>
					<ul class="filter-icons">
						<li>
							<a href="#" class="post-add-icon inline-items">
								<img src="img/icon-chat1.png" alt="icon">
								<span><?php echo $joy; ?></span>
							</a>
						</li>

						<li>
							<a href="#" class="post-add-icon inline-items">
								<img src="img/icon-chat6.png" alt="icon">
								<span><?php echo $bad; ?></span>
							</a>
						</li>

						<li>
							<a href="#" class="post-add-icon inline-items">
								<img src="img/icon-chat26.png" alt="icon">
								<span><?php echo $like; ?></span>
							</a>
						</li>


						<li>
							<a href="#" class="post-add-icon inline-items">
								<img src="img/icon-chat15.png" alt="icon">
								<span><?php echo $amazed; ?></span>
							</a>
						</li>
						<li>
							<a href="#" class="post-add-icon inline-items">
								<img src="img/icon-chat27.png" alt="icon">
								<span><?php echo $cool; ?></span>
							</a>
						</li>


					</ul>

					<h1 class="post-title"><?php echo $news_title; ?></h1>

					<div class="author-date">
						<div class="author-thumb">
							<img alt="author" src="Author/<?php echo $news_author; ?>.jpg" class="avatar" height="28" width="28">
						</div>
						by
						<a class="h6 post__author-name fn" href="#"><?php echo $news_author; ?></a>
						<div class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								<?php echo  $news_date; ?>
							</time>
						</div>
					</div>

					<div class="post-thumb">
						<img src="images/<?php echo $news_image; ?>" alt="image">
					</div>

					<div class="post-content-wrap">



						<div class="post-content">
							<?php echo $news_content;  ?>
						</div>
					</div>


					<div class="choose-reaction reaction-colored">
						<div class="title">Choose your <span>Reaction!</span></div>

						<ul>
							<li>
								<a href="news_reaction_insert.php?id=<?php echo $newsid; ?>&reaction=joy">
									<img src="img/icon-chat1.png" alt="icon" data-toggle="tooltip" data-placement="top" data-original-title="JOY">
								</a>
							</li>

							<li>
								<a href="news_reaction_insert.php?id=<?php echo $newsid; ?>&reaction=bad">
									<img src="img/icon-chat6.png" alt="icon" data-toggle="tooltip" data-placement="top" data-original-title="BAD">
								</a>
							</li>
							<li>
								<a href="news_reaction_insert.php?id=<?php echo $newsid; ?>&reaction=amazed">
									<img src="img/icon-chat15.png" alt="icon" data-toggle="tooltip" data-placement="top" data-original-title="Amazed">
								</a>
							</li>


							<li>
								<a href="news_reaction_insert.php?id=<?php echo $newsid; ?>&reaction=cool">
									<img src="img/icon-chat27.png" alt="icon" data-toggle="tooltip" data-placement="top" data-original-title="COOL">
								</a>
							</li>
							<li>
								<a href="news_reaction_insert.php?id=<?php echo $newsid; ?>&reaction=likee">
									<img src="img/icon-chat26.png" alt="icon" data-toggle="tooltip" data-placement="top" data-original-title="LIKE">
								</a>
							</li>

						</ul>

					</div>
				</article>
				<?php
					$query="SELECT * FROM comments where comment_news_id=$newsid;";
					$result=mysqli_query($connection,$query);
					while ($row=mysqli_fetch_assoc($result)) {
						$c_id=$row['comment_id'];
						$c_likes=$row['comment_likes'];
            $comment_user_id=$row['user_id'];
						$c_content=$row['comment_content'];
            $query_for_selecting_user_info="SELECT * FROM user WHERE user_id=$comment_user_id;";
            $result_for_selecting_user_info=mysqli_query($connection,$query_for_selecting_user_info);
            while($row2=mysqli_fetch_assoc($result_for_selecting_user_info))
            {
              $comment_user_name=$row2['uname'];
              $comment_user_profile_pic=$row2['profile_pic'];
            }


				 ?>
				<ul class="comments-list">
					<li>
						<div class="post__author author vcard inline-items">
							<img src="../FRIEND_FEED/<?php echo $comment_user_profile_pic; ?>" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#"><?php echo $comment_user_name;?></a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										38 mins ago
									</time>
								</div>
							</div>


						</div>

						<p><?php


            $c_content = wordwrap( $c_content, 110, "<br>", 1);

            echo $c_content;
             ?></p>

						<a href="commentlike.php?id=<?php echo $newsid?> & comment_id=<?php echo $c_id ?>" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="../icons/icons.svg#olymp-heart-icon"></use></svg>
							<span><?php echo $c_likes; ?></span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>

				</ul>
			<?php } ?>






        <form class="comment-form inline-items" action="comment_insert.php?user_id=<?php echo $user_id;?>&id=<?php echo $newsid;?>" method="post">

          <div class="post__author author vcard inline-items">
            <img src="../FRIEND_FEED/<?php echo $profile_pic ?>" alt="author">

            <div class="form-group with-icon-right ">
              <textarea class="form-control" placeholder="" name="cinsert"></textarea>

            </div>
          </div>

          <button type="submit" class="btn btn-md-2 btn-primary" name="submit">Submit</button>


        </form>







			</div>
		</div>

		<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
			<aside>
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Featured Posts</h6>
					</div>
				</div>
				<?php
				  $count=NULL;
				  $i=0;
				  $all_news_id=array();
				  $query= "SELECT news_id FROM news;";
				  $result=mysqli_query($connection,$query);
				  while ($row=mysqli_fetch_assoc($result)) {
				    $all_news_id[$i]=$row['news_id'];
				    $i=$i+1;
				  }
				  $random=array_rand($all_news_id,3);
				  ?>
				<?php
				$count1=0;
				$count_id=0;
				$n_id=$all_news_id[$random[$count_id]];
				$query="select * from News";
			$result=mysqli_query($connection,$query);
			while($row=mysqli_fetch_assoc($result))
			{

				if ($count1 == 3) {
				break;
				}
				else
				{
				if ($row['news_id'] != $all_news_id[$random[$count_id]]) {

					continue;}

					else {


				$n_id=$all_news_id[$random[$count_id]];
				$comment_count=0;
				$query1="SELECT * FROM comments WHERE comment_news_id=$n_id;";
				$result1=mysqli_query($connection,$query1);
				while($row1=mysqli_fetch_assoc($result1))
				{
					$comment_count += 1;
				}
				$count_id=$count_id+1;
				$news_image=$row['news_image'];
				$news_name=$row['news_name'];
				$news_author=$row['news_author'];
				$news_date=$row['news_post_date'];
				$news_cat_id=$row['category_id'];
				$reaction_joy=$row['reaction_joy'];
				$reaction_bad=$row['reaction_bad'];
				$reaction_cool=$row['reaction_cool'];
				$reaction_likee=$row['reaction_likee'];
				$reaction_amazed=$row['reaction_amazed'];
				$total=$reaction_joy+$reaction_bad+$reaction_cool+$reaction_likee+$reaction_amazed;
				 ?>
				<div class="ui-block">

					<article class="hentry blog-post blog-post-v3 featured-post-item">

						<div class="post-thumb">
							<img src="images/<?php echo $news_image ?>" alt="photo">
							<a href="#" class="post-category bg-purple"><?php
													$query1="SELECT category_name FROM category WHERE category_id=$news_cat_id; ";
													$result1=mysqli_query($connection,$query1);
													while ($row1=mysqli_fetch_assoc($result1)	) {
														echo $row1['category_name'];
													}
							?></a>
						</div>

						<div class="post-content">

							<div class="author-date">
								by
								<a class="h6 post__author-name fn" href="#"><?php echo $news_author; ?></a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										<?php echo $news_date; ?>
									</time>
								</div>
							</div>

							<a href="news-post.php?id=<?php echo $n_id; ?>" class="h4 post-title"><?php echo $news_name; ?></a>

							<div class="post-additional-info inline-items">

								<ul class="friends-harmonic">

									<li>
										<a href="#">
											<img src="img/icon-chat27.png" alt="icon">
										</a>
									</li>
								</ul>
								<div class="names-people-likes">
									<?php echo $total; ?>
								</div>

								<div class="comments-shared">
									<a href="#" class="post-add-icon inline-items">
										<svg class="olymp-speech-balloon-icon"><use xlink:href="../icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
										<span> <?php
										echo $comment_count;
										?>
										</span>
									</a>
								</div>

							</div>
						</div>

					</article>
				</div>
			<?php
			}}
			$count1=$count1+1;
		}
		 ?>
			</aside>
		</div>

	</div>

</div>


<!-- Window-popup-CHAT for responsive min-width: 768px -->
<?php// include "includes/popup-chat.php"; ?>
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

<!-- Lightbox plugin script-->
<script src="../js/jquery.magnific-popup.min.js"></script>

<!-- Select / Sorting script -->
<script src="../js/selectize.min.js"></script>

<!-- Swiper / Sliders -->
<script src="../js/swiper.jquery.min.js"></script>

<script src="../js/mediaelement-and-player.min.js"></script>
<script src="../js/mediaelement-playlist-plugin.min.js"></script>

</body>
</html>
