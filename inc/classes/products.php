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
 * Module for Products, see functions on
 * Public Static Functions
 */
include_once 'pagination.php';

class Products
{

	public $pagination;
	#GET TOTAL PRODUCTS BY CATEGORY ID
	public static function getProductTotalCategory($category_id)
	{
		$sql = "SELECT COUNT(*) FROM `products_items`
				WHERE (`category_id` = '{$category_id}');";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
		foreach($d_arr as $d)
		{
			array_push($r, $d);
		}
		return $r;
	}
	
	#GET TOP 3 PRODUCTS BY CATEGORY ID
	public static function getTopProductByCategoryID($category_id)
	{
		$sql = "SELECT * FROM `products_items`
				WHERE (`category_id` = '{$category_id}') limit 0,3;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
		foreach($d_arr as $d)
		{
			array_push($r, $d);
		}
		return $r;
	}

	#GET PRODUCTS BY CATEGORY ID
	
	public static function getSQL($sql)
	{	
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
		foreach($d_arr as $d)
		{
			array_push($r, $d);
		}
		return $r;
	}
	
	# GET PRODUCTS
	public static function getProducts($product_id) 
	{
		$sql = "SELECT * FROM `products_items` 
				WHERE (`id` = '{$product_id}' )
				GROUP BY `products_items`.`id`;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				array_push($r,$d);
			}
		return $r;	
	}

	# GET ALL PRODUCTS
	public static function getProductsTop() 
	{
		$sql = "SELECT * FROM `products_items` limit 0, 10";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# GET ALL PRODUCTS
	public static function getAllProducts() 
	{
		$sql = "SELECT * FROM `products_items` order by `name_short`";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# INSERT PRODUCTS
	public static function insertProducts($user_id, $name_short, $name_long, $description_long, $image_thumbnail, $image_small, $image_large, $comments, $brand_id=NULL, $vendor_id=NULL, $category_id=NULL, $price=0, $cost=0) 
	{
		$sql = "INSERT INTO `products_items` (
				`id` ,
				`name_short` ,
				`name_long` ,
				`description_long` ,
				`image_thumbnail` ,
				`image_small` ,
				`image_large` ,
				`comments` ,
				`brand_id`,
				`category_id`,
				`vendor_id`,
				`price`,
				`cost`,
				`added_date` ,
				`user_id` ,
				`status`
				)
				VALUES (
				NULL ,
				'".html::cln($name_short)."',
				'".html::cln($name_long)."',
				'".html::cln($description_long)."',
				'".html::cln($image_thumbnail)."',
				'".html::cln($image_small)."',
				'".html::cln($image_large)."',
				'".html::cln($comments)."', 
				'".html::cln($brand_id)."', 
				'".html::cln($category_id)."', 
				'".html::cln($vendor_id)."', 
				'".html::cln($price)."',
				'".html::cln($cost)."', 
				CURRENT_TIMESTAMP ,  '".html::cln($user_id)."',  '1'
				);
				";
		db::execute_query($sql);
	}

	# UPDATE PRODUCTS
	public static function updateProducts($Products_id, $name_short, $name_long, $description_long, $image_thumbnail, $image_small, $image_large, $comments, $brand_id=NULL, $vendor_id=NULL, $category_id=NULL, $status=NULL, $price=0, $cost=0) 
	{
		$sql = "UPDATE `products_items` SET  
				`name_short` =  '".html::cln($name_short)."',
				`name_long` =  '".html::cln($name_long)."',
				`description_long` =  '".html::cln($description_long)."',
				`image_thumbnail` =  '".html::cln($image_thumbnail)."',
				`image_small` =  '".html::cln($image_small)."',
				`image_large` =  '".html::cln($image_large)."',
				`brand_id` =  '".html::cln($brand_id)."',
				`category_id` =  '".html::cln($category_id)."',
				`vendor_id` =  '".html::cln($vendor_id)."',
				`status` =  '".html::cln($status)."',
				`price` =  '".html::cln($price)."',
				`cost` =  '".html::cln($cost)."',
				`comments` =  '".html::cln($comments)."' WHERE  
				`products_items`.`id` = ".html::cln($Products_id).";";
		db::execute_query($sql);
	}
	
	# DELETE PRODUCTS
	public static function deleteProducts($Products_id) 
	{
		$sql = "DELETE FROM `products_items` WHERE `products_items`.`id` = {$Products_id};";
		db::execute_query($sql);
	}

	public static function searchAllProducts($search, $page = 1)
	{

		$searchSql = self::searchProductsSQL($search, $page);
		db::execute_query($searchSql);
		$d_arr = db::get_result();
		$r = array();
		foreach($d_arr as $d)
		{
			array_push($r, $d);
		}
		return $r;
	}

	public static function countSearchAllProducts($search)
	{

		$sqlCount = self::searchProductsSQL($search, NULL, TRUE);
		db::execute_query($sqlCount);
		$d_arr = db::get_result();
		$r = array();
		foreach($d_arr as $d)
		{
			array_push($r, $d);
		}

		return $r;
	}

	private function searchProductsSQL($search, $page = NULL, $count = FALSE)
	{

		$limit = '';
		if($page != NULL)
		{
			$itemsPerPage = 30;
			$startingPosition = ($page - 1) * $itemsPerPage;
			$limit = "LIMIT $startingPosition, $itemsPerPage";
		}
		$select = 'SELECT * FROM `products_items`';
		if($count !== FALSE)
		{
			$select = 'SELECT count(id) FROM `products_items`';
		}
		$sql = "$select
                        WHERE `status` > 0
                        AND 
                        (
                                `name_short` LIKE '%$search%'
                                OR `name_long` LIKE '%$search%'
                                OR `description_long` LIKE '%$search%'
                        )
			$limit
                ";
		return $sql;
	}

}
?>