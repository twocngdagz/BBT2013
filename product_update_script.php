<?php
$offset_val = $_REQUEST['offset'];
$limits_val = $_REQUEST['limits'];
//echo json_encode($offset_val);
//echo json_encode($limits_val);
set_time_limit(0);
include('mchn.config.php');

$sql = "SELECT id, image_small, image_large, image_thumbnail, original_image_small, original_image_large, original_image_thumbnail FROM products_items LIMIT ".$limits_val." OFFSET ".$offset_val;

$products = products::getSQL($sql);
$no_image = MCHN_DIR_ASSETS."img/noimage.jpg";



foreach ($products as $row) {
	if(file_exists(str_replace('/usr/www/virtual/alon/','http://',$row['image_small'])) == false){
		$sqli = "UPDATE `products_items` SET `image_small` =  '".$no_image."' WHERE `id` = '".$row['id']."'";
		products::getSQL($sqli);
	}

	if(file_exists(str_replace('/usr/www/virtual/alon/','http://',$row['image_large'])) == false){
		$sqli = "UPDATE `products_items` SET `image_large` =  '".$no_image."' WHERE `id` = '".$row['id']."'";
		products::getSQL($sqli);
	}

	if(file_exists(str_replace('/usr/www/virtual/alon/','http://',$row['image_thumbnail'])) == false){
		$sqli = "UPDATE `products_items` SET `image_thumbnail` =  '".$no_image."' WHERE `id` = '".$row['id']."'";
		products::getSQL($sqli);
	}

	if(file_exists(str_replace('/usr/www/virtual/alon/','http://',$row['original_image_small'])) == false){
		$sqli = "UPDATE `products_items` SET `original_image_small` =  '".$no_image."' WHERE `id` = '".$row['id']."'";
		products::getSQL($sqli);
	}

	if(file_exists(str_replace('/usr/www/virtual/alon/','http://',$row['original_image_large'])) == false){
		$sqli = "UPDATE `products_items` SET `original_image_large` =  '".$no_image."' WHERE `id` = '".$row['id']."'";
		products::getSQL($sqli);
	}

	if(file_exists(str_replace('/usr/www/virtual/alon/','http://',$row['original_image_thumbnail'])) == false){
		$sqli = "UPDATE `products_items` SET `original_image_thumbnail` =  '".$no_image."' WHERE `id` = '".$row['id']."'";
		products::getSQL($sqli);
	}


}


function fileExists($path){
    return (@fopen($path,"r")==true);
}

?>