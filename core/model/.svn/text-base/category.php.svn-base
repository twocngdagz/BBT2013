<?php
if(isset($gp["button"])) {
	# RESTRICT USERNAME
	if(!html::restrictText($gp['d']['name_short'])) {
		html::alert("error", "Category should not contain special characters.", "Wrong Category Input");
	} else {				
			switch($gp['d']['axn']):
				case 'create':
					
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'categories/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'categories/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'categories/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}	
					
					category::insertCategory(	$s['user_id'], 
												$gp['d']['name_short'],
												$gp['d']['name_long'],  
												$gp['d']['description_short'], 
												$gp['d']['description_long'], 
												$thumbnail,
												$small,
												$large,
												html::dashTextNaming($gp['d']['url']),
												$gp['d']['parent_id']);
											
						html::alert("success", "Successfully Added new Category", "Category Created");	
				break;
				
				case 'update':		
									
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'categories/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'categories/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'categories/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}		
					
					
					category::updateCategory(	$gp['d']['category_id'], 
												$gp['d']['name_short'],
												$gp['d']['name_long'],  
												$gp['d']['description_short'], 
												$gp['d']['description_long'], 
												$thumbnail,
												$small,
												$large,
												html::dashTextNaming($gp['d']['url']),
												$gp['d']['parent_id']);
					html::alert("success", "Successfully Updated Category", "Category Updated");	
				break;
			endswitch;
		
	}
} else if(isset($gp["delete"])) {
	if(strtolower($gp['delete']) == "delete") {
		category::deleteCategory($gp['d']['category_id']);
	}
}
?>