<?php
/**
 * 
 * February 23, 2013
 * @author abz dmachinist
 * BBT Image Class
 * 
 * Please review properties when using.
 * Direct ROOT LOADERS are found in
 * /mchn.config.php DEFINE LOADERS
 *
 * Module for Products Options, see functions on
 * Public Static Functions
 */

class product_options {
	
	# GET PRODUCTS OPTIONS
	public static function getProductOptions($user_id) 
	{
		$sql = "SELECT * FROM `products_item_options` 
				WHERE (`id` = '{$user_id}' )
				GROUP BY `products_item_options`.`id`;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d)
			{
				array_push($r,$d);
			} 
		return $r;	
	}	
	
	# GET ALL PRODUCTS OPTIONS
	public static function getAllProductOptions() 
	{
		$sql = "SELECT * FROM `products_item_options` order by `option_name`";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# INSERT PRODUCTS OPTIONS
	public static function insertProductOptions($user_id, $option_name, $option_description, $image_thumbnail, $image_small, $image_large, $product_id=NULL, $price=0, $weight=0) 
	{
		$sql = "INSERT INTO `products_item_options` (
				`id` ,
				`option_name` ,
				`option_description` ,
				`image_thumbnail` ,
				`image_small` ,
				`image_large` ,
				`product_id`,
				`price`,
				`weight_ozs`
				)
				VALUES (
				NULL ,
				'".html::cln($option_name)."',
				'".html::cln($option_description)."',
				'".html::cln($image_thumbnail)."',
				'".html::cln($image_small)."',
				'".html::cln($image_large)."',
				'".html::cln($product_id)."', 
				'".html::cln($price)."', 
				'".html::cln($weight)."'
				);
				";
		//echo $sql;
		db::execute_query($sql);
	}

	# UPDATE PRODUCTS OPTIONS
	public static function updateProductOptions($product_option_id, $option_name, $option_description, $image_thumbnail, $image_small, $image_large, $product_id=NULL, $price=0, $weight=0) 
	{
		$sql = "UPDATE `products_item_options` SET  
				`option_name` =  '".html::cln($option_name)."',
				`option_description` =  '".html::cln($option_description)."',
				`image_thumbnail` =  '".html::cln($image_thumbnail)."',
				`image_small` =  '".html::cln($image_small)."',
				`image_large` =  '".html::cln($image_large)."',
				`product_id` =  '".html::cln($product_id)."',
				`price` =  '".html::cln($price)."',
				`weight_ozs` =  '".html::cln($weight)."'
				WHERE   
				`products_item_options`.`id` = ".html::cln($product_option_id).";";
		//echo $sql;
		db::execute_query($sql);
	}
	
	# DELETE PRODUCTS OPTIONS
	public static function deleteProductOptions($product_option_id) 
	{
		$sql = "DELETE FROM `products_item_options` WHERE `products_item_options`.`id` = {$product_option_id};";
		db::execute_query($sql);
	}
	
	
}
?>