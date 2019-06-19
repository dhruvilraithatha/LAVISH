<?php include "includes/dbconnect.php"; ?>
<?php //include "post_actions.php"; ?>

<?php
include('../LOGIN-SIGNUP/session.php'); ?>
<?php

	$query_for_viewing_posts="SELECT * FROM post ORDER BY post_id DESC;";
	$result_for_viewing_posts=mysqli_query($connection,$query_for_viewing_posts);

	while ($row=mysqli_fetch_assoc($result_for_viewing_posts)) {
		$content=$row['post_content'];
		$postby=$row['post_by'];
		$post_id=$row['post_id'];
		
		$post_like_count=$row['post_likes_count'];
		$query_for_selecting_post_user_details="SELECT * FROM user WHERE user_id=$postby;";
		$result_for_selecting_post_user_details=mysqli_query($connection,$query_for_selecting_post_user_details);
		while ($row1=mysqli_fetch_assoc($result_for_selecting_post_user_details)) {
			$user_image=$row1['profile_pic'];
		}

?>


				<div class="ui-block">
					<article class="hentry post has-post-thumbnail">

						<div class="post__author author vcard inline-items">
							<img src="<?php echo $user_image;?>" alt="author">
							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Koolkishan</a>
								<div class="post__date">
									<time class="published" datetime="2004-07-24T18:18">
										January 25 at 9:06am
									</time>
								</div>
							</div>
							<!--<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="../icons/icons.svg#olymp-three-dots-icon"></use></svg>
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
							</div>-->
						</div>
						<p><?php
						$content = wordwrap( $content, 90, "<br>", 1);
						echo $content."<br>";
							?>
						</p>

<!--						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="../icons/icons.svg#olymp-heart-icon"></use></svg>
								<span><?php //echo $post_like_count;?></span>
							</a>

							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="../icons/icons.svg#olymp-speech-balloon-icon"></use></svg>
									<span>0 Comments</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon"><use xlink:href="../icons/icons.svg#olymp-share-icon"></use></svg>
									<span>2 Shares</span>
								</a>
							</div>
-->

						</div>


						<script type="text/javascript">
						function like_in()
						{
							alert("HEllo");
							$.ajax({
								type: "POST",
								url: "post_actions.php",
								data: "id=<?php echo $post_id?>&like_count=<?php echo $post_like_count;?>",
								success: function(msg){
									alert( "Data Saved: "+msg );
								}
							});
						}

						</script>
						<!--<div class="control-block-button post-control-button">

							<button type="button" class="btn btn-control"  onclick="like_in()">
								<svg class="olymp-like-post-icon"><use xlink:href="../icons/icons.svg#olymp-like-post-icon"></use></svg>
							</button>

							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon"><use xlink:href="../icons/icons.svg#olymp-comments-post-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon"><use xlink:href="../icons/icons.svg#olymp-share-icon"></use></svg>
							</a>

						</div>-->

					</article>
				</div>
				<?php
			}
			?>
