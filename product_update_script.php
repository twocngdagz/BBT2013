
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
	$path = str_replace('http://216.130.182.4',"http://www.babybeddingtown.com",$row['image_small']);
	$sqli = "UPDATE `products_items` SET `image_small` =  '".$path."' WHERE `id` = '".$row['id']."'";
	products::getSQL($sqli);

	$path = str_replace('http://216.130.182.4',"http://www.babybeddingtown.com",$row['image_large']);
	$sqli = "UPDATE `products_items` SET `image_large` =  '".$path."' WHERE `id` = '".$row['id']."'";
	products::getSQL($sqli);

	$path = str_replace('http://216.130.182.4',"http://www.babybeddingtown.com",$row['image_thumbnail']);
	$sqli = "UPDATE `products_items` SET `image_thumbnail` =  '".$path."' WHERE `id` = '".$row['id']."'";
	products::getSQL($sqli);

	$path = str_replace('http://216.130.182.4',"http://www.babybeddingtown.com",$row['original_image_small']);
	$sqli = "UPDATE `products_items` SET `original_image_small` =  '".$path."' WHERE `id` = '".$row['id']."'";
	products::getSQL($sqli);

	$path = str_replace('http://216.130.182.4',"http://www.babybeddingtown.com",$row['original_image_large']);
	$sqli = "UPDATE `products_items` SET `original_image_large` =  '".$path."' WHERE `id` = '".$row['id']."'";
	products::getSQL($sqli);

	$path = str_replace('http://216.130.182.4',"http://www.babybeddingtown.com",$row['original_image_large']);
	$sqli = "UPDATE `products_items` SET `original_image_large` =  '".$path."' WHERE `id` = '".$row['id']."'";
	products::getSQL($sqli);
}


function fileExists($path){
	return (@fopen($path,"r")==true);
}

?>