<?php
	if(!empty($_FILES)) {
		$image = $_FILES['thumbnail']["name"];
		$directory = image::imageDirectory($image,'categories/thumbnails');
		image::imageUpload($directory,$image);
	} else {
		
	}
	
?>

<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="thumbnail" accept="image/png, image/gif, image/jpeg" >
	<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
</form>
