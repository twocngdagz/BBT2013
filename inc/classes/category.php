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
 * Module for Category, see functions on
 * Public Static Functions
 */
error_reporting(E_ALL ^ E_NOTICE);
class category {

  public static function getCategoryURL($category_id)
  {
  	$sql = "SELECT * FROM `category` 
        WHERE (`id` = '{$category_id}' )
        GROUP BY `category`.`id`;";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d) 
      {
        array_push($r,$d);
      }
    return $r; 
  } 
  
  public static function getParentCategory($category_id)
  {
  	$sql = "SELECT parent_id FROM `category` 
        WHERE (`id` = '{$category_id}' )
        GROUP BY `category`.`id`;";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d) 
      {
        array_push($r,$d);
      }
    return $r; 
  }
	
	
  
  /**
   * Gets the Categories by id.
   *
   * @params category_id
   * @return Array set of Categories.
   */
  public static function getCategory($url) 
  {
    $sql = "SELECT * FROM `category` 
        WHERE (`url` = '{$url}' )
        GROUP BY `category`.`url`;";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d) 
      {
        array_push($r,$d);
      }
    return $r;  
  } 

  /**
   * Gets the Category Item of each category.
   *
   * @params category_id
   * @params status 1 for active and 0 for inactive
   * @return Array set of Categories join from Items.
   */
  public static function getCategoryitems($category_id=0, $status=1, $parent_id=0) 
  {

    if(!empty($category_id)) {
      $category_q = "AND `id` = '{$category_id}'";
    }
    else {
      $category_q = "";
    }

    if(!empty($parent_id)) 
    {
      $parent_q = "AND `parent_id` = '{$parent_id}'";
    }


    $sql = "SELECT * FROM `category` WHERE ( `active` = '".$status."' {$category_q}  {$parent_q} )";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
    foreach($d_arr as $d)
    {
      array_push($r,$d);
    }
    return $r;   
  } 

  /**
   * Gets Categories by Brand ID FK.
   *
   * @params brand_id
   * @return Array set of Categories join from Brands.
   */
  public static function getCategoriesInBrand($brand_id=0) 
  {
    if(!empty($brand_id) && !empty($status))
    {
      $sql = "SELECT * FROM `products_items` `pi`
              INNER JOIN `brands` ON (`brands`.id = `pi`.`brand_id`)
              INNER JOIN `category` ON (`category`.id = `pi`.`category_id`)
              WHERE (`id` = '{$brand_id}')
              GROUP BY `category_id`";
      db::execute_query($sql);
      $d_arr = db::get_result();
      $r = array();
      foreach($d_arr as $d)
      {
        array_push($r,$d);
      }
      return $r;   
    }
  } 

  /**
   * Gets all Categories for View.
   *
   * @params none
   * @return Set of Array of All Categories
   */
  public static function getAllCategory() 
  {
    $sql = "SELECT * FROM `category` order by `name_short`";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d) 
      {
        array_push($r,$d);
      }
    return $r;  
  } 
  
  /**
   * Inserts Category details into database.
   *
   * @params Array Fields
   * @return Insert Category into Database
   */
  public static function insertCategory($user_id, $name_short, $name_long, $description_short, $description_long, $image_thumbnail, $image_small, $image_large, $url, $parent_id=NULL) 
  {
    $sql = "INSERT INTO `category` (
        `id` ,
        `name_short` ,
        `name_long` ,
        `description_short` ,
        `description_long` ,
        `image_thumbnail` ,
        `image_small` ,
        `image_large` ,
        `url` ,
        `parent_id`,
        `added_date` ,
        `added_by_adin_user_fk` ,
        `active`
        )
        VALUES (
        NULL ,
        '".html::cln($name_short)."',
        '".html::cln($name_long)."',
        '".html::cln($description_short)."',
        '".html::cln($description_long)."',
        '".html::cln($image_thumbnail)."',
        '".html::cln($image_small)."',
        '".html::cln($image_large)."',
        '".html::cln($url)."', 
        '".html::cln($parent_id)."', 
        CURRENT_TIMESTAMP ,  '".html::cln($user_id)."',  '1'
        );
        ";
    db::execute_query($sql);
  }

  /**
   * Updates Category into Database.
   *
   * @params Array Fields
   * @return Update Category into Database
   */
  public static function updateCategory($category_id, $name_short, $name_long, $description_short, $description_long, $image_thumbnail, $image_small, $image_large, $url, $parent_id=NULL) 
  {
    $sql = "UPDATE `category` SET  
        `name_short` =  '".html::cln($name_short)."',
        `name_long` =  '".html::cln($name_long)."',
        `description_short` =  '".html::cln($description_short)."',
        `description_long` =  '".html::cln($description_long)."',
        `image_thumbnail` =  '".html::cln($image_thumbnail)."',
        `image_small` =  '".html::cln($image_small)."',
        `image_large` =  '".html::cln($image_large)."',
        `parent_id` =  '".html::cln($parent_id)."',
        `url` =  '".html::cln($url)."' WHERE  
        `category`.`id` = ".html::cln($category_id).";";
    db::execute_query($sql);
  }
  
  /**
   * Delete Category from Database.
   *
   * @params Array Fields
   * @return Delete Category from Database
   */
  public static function deletecategory($category_id) 
  {
    $sql = "DELETE FROM `category` WHERE `category`.`id` = {$category_id};";
    db::execute_query($sql);
  }
  
  
}
?>