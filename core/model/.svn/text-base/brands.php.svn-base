<?php
if(isset($gp["button"])) {
	# RESTRICT USERNAME
	if(!html::restrictText($gp['d']['name_short'])) {
		html::alert("error", "Brand should not contain special characters.", "Wrong Brand Input");
	} else {				
			switch($gp['d']['axn']):
				case 'create':
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'brands/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'brands/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'brands/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}	
					
					brands::insertBrands(	$s['user_id'], 
											$gp['d']['name_short'],
											$gp['d']['name_long'],  
											$gp['d']['description_short'], 
											$gp['d']['description_long'], 
											$thumbnail,
											$small,
											$large,
											html::dashTextNaming($gp['d']['url']));
											
						html::alert("success", "Successfully Added new Brand", "Brand Created");	
				break;
				
				case 'update':
				
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'brands/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'brands/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'brands/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}		
					
					brands::updateBrands(  $gp['d']['brand_id'], 
											$gp['d']['name_short'],
											$gp['d']['name_long'],  
											$gp['d']['description_short'], 
											$gp['d']['description_long'], 
											$thumbnail,
											$small,
											$large,
											html::dashTextNaming($gp['d']['url']));
					html::alert("success", "Successfully Updated Brand", "Brand Updated");	
				break;
			endswitch;
		
	}
} else if(isset($gp["delete"])) {
	if(strtolower($gp['delete']) == "delete") {
		brands::deleteBrands($gp['d']['brand_id']);
	}
}
?>