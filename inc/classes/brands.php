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
 * Module for Brands, see functions on
 * Public Static Functions
 */

class brands {
  
  /**
   * Gets Brands using ID.
   *
   * @params brand_id
   * @return Array set of Brands.
   */
  public static function getBrands($brand_id) 
  {
    if(!empty($brand_id))
    {
    $sql = "SELECT * FROM `brands` 
        WHERE (`id` = '{$brand_id}' )
        GROUP BY `brands`.`id`;";
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
   * Gets Brands using Status and ID.
   *
   * @params brand_id
   * @params status 1 as Active and 0 as Inactive.
   * @return Array set of Brands Inner Join Items.
   */
  public static function getBranditems($brand_id=0, $status=1) 
  {
    if(!empty($brand_id) && !empty($status))
    {
      $sql = "SELECT * FROM `brand` WHERE (`id` = '{$brand_id}' AND `active` = '".$status."')";
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
   * Gets all Brands from Database.
   *
   * @params none
   * @return Array set of All Brands.
   */
  public static function getAllBrands() 
  {
    $sql = "SELECT * FROM `brands`";
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
   * Inserts Brands into Database.
   *
   * @params Array Fields
   * @return Insert Brands from Database
   */
  public static function insertBrands($user_id, $name_short, $name_long, $description_short, $description_long, $image_thumbnail, $image_small, $image_large, $url) 
  {
    $sql = "INSERT INTO `brands` (
        `id` ,
        `name_short` ,
        `name_long` ,
        `description_short` ,
        `description_long` ,
        `image_thumbnail` ,
        `image_small` ,
        `image_large` ,
        `url` ,
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
        CURRENT_TIMESTAMP ,  '".html::cln($user_id)."',  '1'
        );
        ";
    db::execute_query($sql);
  }

  /**
   * Updates Brand from Database.
   *
   * @params Array Fields
   * @return Update Brands from Database
   */
  public static function updateBrands($brand_id, $name_short, $name_long, $description_short, $description_long, $image_thumbnail, $image_small, $image_large, $url) 
  {
    $sql = "UPDATE `brands` SET  
        `name_short` =  '".html::cln($name_short)."',
        `name_long` =  '".html::cln($name_long)."',
        `description_short` =  '".html::cln($description_short)."',
        `description_long` =  '".html::cln($description_long)."',
        `image_thumbnail` =  '".html::cln($image_thumbnail)."',
        `image_small` =  '".html::cln($image_small)."',
        `image_large` =  '".html::cln($image_large)."',
        `url` =  '".html::cln($url)."' WHERE  
        `brands`.`id` = ".html::cln($brand_id).";";
    db::execute_query($sql);
  }
  
  /**
   * Deletes Brands from Database.
   *
   * @params Array Fields
   * @return Delete Brands from Database
   */
  public static function deleteBrands($brand_id) {
    $sql = "DELETE FROM `brands` WHERE `brands`.`id` = {$brand_id};";
    db::execute_query($sql);
  }
  
  
}
?>