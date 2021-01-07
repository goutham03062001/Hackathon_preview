<!DOCTYPE html>
<html>
<head>
	<title>
		form upload
	</title>
</head>
<body>
	<form method="POST" action="?" enctype="multipart/form-data">
		<input type="file" name="item">
		<input type="submit" name="submit" value="submit">
		submit
	</form>
</body>

<?php

include 'connection.php';

if(isset($_POST['submit']))
	{
		$file_name = $_FILES['item']['name'];
		$file_type = $_FILES['item']['type'];
		$file_size = $_FILES['item']['size'];
		$file_loc = $_FILES['item']['tmp_name'];
		$file_store = "uploaded_images/".$file_name;
		move_uploaded_file($file_loc,$file_store);
		

	}

?>
</html>