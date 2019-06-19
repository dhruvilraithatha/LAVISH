<?php include "includes/dbconnect.php"; ?>
<?php
include('../LOGIN-SIGNUP/session.php'); ?>


<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['profileImage']['tmp_name'])) {
$sourcePath = $_FILES['profileImage']['tmp_name'];
$targetPath = "images/profile_photo/".$_FILES['profileImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
?>
<img class="image-preview" src="<?php echo $targetPath; ?>" class="upload-preview" />
<?php
$query1="UPDATE user SET profile_pic='$targetPath' WHERE user_id=".$_SESSION['user_id'];
$result=mysqli_query($connection,$query1);
if ($result) {
  echo "Success";
}
else {
  echo "Failed".mysqli_error($connection);
}

}}
}

?>
