<?php
if(isset($gp["button"])) {

	# RESTRICT USERNAME
	if(!html::restrictText($gp['d']['name_short'])) {
		html::alert("error", "Products should not contain special characters.", "Wrong products Input");
	} if( !is_numeric($gp['d']['price']) ) {
		html::alert("error", "Price should be numeric", "Wrong price Input");
	} else {				
			switch($gp['d']['axn']):
				case 'create':
					
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'products/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"], 5);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'products/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'products/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}	
					
					products::insertProducts(	$s['user_id'], 
												$gp['d']['name_short'],
												$gp['d']['name_long'],  
												$gp['d']['description_long'], 
												$thumbnail,
												$small,
												$large,
												$gp['d']['comments'],
												$gp['d']['brand_id'],
												$gp['d']['vendor_id'],
												$gp['d']['category_id'],
												$gp['d']['price'],
												$gp['d']['cost']);
											
						html::alert("success", "Successfully Added new products", "Products Created");	
				break;
				
				case 'update':		
									
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'products/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'products/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'products/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}		
					
					
					products::updateProducts(	$gp['d']['product_id'], 
												$gp['d']['name_short'],
												$gp['d']['name_long'],  
												$gp['d']['description_long'], 
												$thumbnail,
												$small,
												$large,
												$gp['d']['comments'],
												$gp['d']['brand_id'],
												$gp['d']['vendor_id'],
												$gp['d']['category_id'],
												$gp['d']['status'],
												$gp['d']['price'],
												$gp['d']['cost']);
					html::alert("success", "Successfully Updated products", "Products Updated");	
				break;
			endswitch;
		
	}
} else if(isset($gp["delete"])) {
	if(strtolower($gp['delete']) == "delete") {
		products::deleteProducts($gp['d']['product_id']);
	}
}

if(isset($gp["button-product-option"])) {
	# RESTRICT USERNAME
	if(!html::restrictText($gp['d']['option_name'])) {
		html::alert("error", "Products should not contain special characters.", "Wrong products Input");
	} if( !is_numeric($gp['d']['price']) ) {
		html::alert("error", "Price should be numeric", "Wrong price Input");
	} else {				
			switch($gp['d']['axn']):
				case 'create':
					
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'products-options/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'products-options/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'products-options/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}	
					
					productOptions::insertProductOptions(	$s['user_id'], 
												$gp['d']['option_name'],
												$gp['d']['option_description'],  
												$thumbnail,
												$small,
												$large,
												$gp['d']['product_id'],
												$gp['d']['price'],
												$gp['d']['weight']);
											
						html::alert("success", "Successfully Added new product options", "Product Options Created");	
				break;
				
				case 'update':		
									
					if( empty($_FILES['thumbnail']["name"]) ) {
						$thumbnail = $gp['thumbnail_current'];
					} else {
						$image = $_FILES['thumbnail']["name"];
						$thumbnail_directory = image::imageDirectory($image,'products-options/thumbnails');
						image::imageUpload($thumbnail_directory,$image,'thumbnail');
						$thumbnail = $thumbnail_directory.image::imageRestrictChars($_FILES['thumbnail']["name"]);
					}
					
					if( empty($_FILES['small']["name"]) ) {
						$small = $gp['small_current'];
					} else {
						$image = $_FILES['small']["name"];
						$small_directory = image::imageDirectory($image,'products-options/small');
						image::imageUpload($small_directory,$image,'small');
						$small = $small_directory.image::imageRestrictChars($_FILES['small']["name"]);
					}
					
					if( empty($_FILES['large']["name"]) ) {
						$large =  $gp['large_current'];
					} else {
						$image = $_FILES['large']["name"];
						$large_directory = image::imageDirectory($image,'products-options/large');
						image::imageUpload($large_directory,$image,'large');
						$large = $large_directory.image::imageRestrictChars($_FILES['large']["name"]);
					}		
					
					productOptions::updateProductOptions(	$gp['d']['product_option_id'], 
															$gp['d']['option_name'],
															$gp['d']['option_description'],  
															$thumbnail,
															$small,
															$large,
															$gp['d']['product_id'],
															$gp['d']['price'],
															$gp['d']['weight']);
					html::alert("success", "Successfully Updated product options", "Product Options Updated");	
				break;
			endswitch;
		
	}
} else if(isset($gp["delete"])) {
	if(strtolower($gp['delete']) == "delete") {
		productOptions::deleteProductOptions($gp['d']['product_option_id']);
	}
}
?>