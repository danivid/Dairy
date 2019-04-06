<?php require_once("includes/init.php"); ?>				

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("includes/helpers/head.php") ?>
<body>

	<?php include("includes/views/navbar.php") ?>

	<!-- The drop zone where the profile image is placed. -->
	<div id="drop_zone" ondrop="upload_file(event, 1)" ondragover="return false">
		<div id="drag_upload_file">
			<p>Place file in the blue area!</p>
			<input type="button" value="Select File" onclick="find_file();">
			<input type="file" id="selectfile">
		</div>
	</div>

	<div id="image"></div>

	<?php include("includes/views/footer.php") ?>
</body>
</html>


