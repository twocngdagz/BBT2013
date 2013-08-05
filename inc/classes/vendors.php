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
 * Module for Vendors, see functions on
 * Public Static Functions
 */

class Vendors {
	
	# GET VENDORS
	public static function getVendors($user_id) 
	{
		$sql = "SELECT * FROM `vendors` 
				WHERE (`id` = '{$user_id}' )
				GROUP BY `vendors`.`id`;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# GET ALL VENDORS
	public static function getAllVendors() 
	{
		$sql = "SELECT * FROM `vendors`";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# GET UNIQUE VENDORS
	public static function unique($email,$username) 
	{
		$sql = "SELECT `id` FROM `vendors` WHERE 
				(`email` = '{$email}' OR `username` = '{$username}')
				OR (`email` = '{$email}' AND `username` = '{$username}')
				LIMIT 1;";
		if(db::count_rows($sql) == 0) {
			return true;	
		} else {
			return false;
		}
	}	
	
	# GET UNIQUE VENDORS
	public static function getUserId($email,$username) 
	{
		$sql = "SELECT `id` FROM `vendors` WHERE 
				(`email` = '{$email}' OR `username` = '{$username}')
				OR (`email` = '{$email}' AND `username` = '{$username}')
				LIMIT 1;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		return $d_arr[0]['user_id'];
	}
	
	# INSERT VENDORS
	public static function insertVendors($user_id, $vendor_id, $name, $email, $street, $city, $state, $zip, $country, $phone, $phone_mobile, $phone_fax, $notes, $first_name, $last_name, $url,$email_personal) 
	{
		$sql = "INSERT INTO `vendors` (
				`id` ,
				`name` ,
				`email` ,
				`street` ,
				`city` ,
				`state` ,
				`zip` ,
				`country` ,
				`phone` ,
				`phone_mobile` ,
				`phone_fax` ,
				`notes` ,
				`status` ,
				`added_date` ,
				`added_by_adin_user_fk`,
				`first_name`,
				`last_name`,
				`url`,
				`email_personal`
				)
				VALUES (
				NULL ,
				'".html::cln($name)."',  
				'".html::cln($email)."',  
				'".html::cln($street)."',  
				'".html::cln($city)."',  
				'".html::cln($state)."',  
				'".html::cln($zip)."',  
				'".html::cln($country)."',  
				'".html::cln($phone)."',  
				'".html::cln($phone_mobile)."',  
				'".html::cln($phone_fax)."',  
				'".html::cln($notes)."',
				'1',
				CURRENT_TIMESTAMP,  
				'".html::cln($user_id)."',  
				'".html::cln($first_name)."',  
				'".html::cln($last_name)."',  
				'".html::cln($url)."',  
				'".html::cln($email_personal)."'  
				);";
		db::execute_query($sql);
	}

	# UPDATE VENDORS
	public static function updateVendors($vendor_id, $name, $email, $street, $city, $state, $zip, $country, $phone, $phone_mobile, $phone_fax, $notes, $status, $first_name, $last_name, $url,$email_personal) 
	{
		$sql = "UPDATE `vendors` SET  
				`name` =  '".html::cln($name)."',
				`email` =  '".html::cln($email)."',
				`street` =  '".html::cln($street)."',
				`city` =  '".html::cln($city)."',
				`state` =  '".html::cln($state)."',
				`zip` =  '".html::cln($zip)."',
				`country` =  '".html::cln($country)."',
				`phone` =  '".html::cln($phone)."',
				`phone_mobile` =  '".html::cln($phone_mobile)."',
				`phone_fax` =  '".html::cln($phone_fax)."',
				`notes` =  '".html::cln($notes)."',
				`status` =  '".html::cln($status)."',
				`first_name` =  '".html::cln($first_name)."',
				`last_name` =  '".html::cln($last_name)."',
				`url` =  '".html::cln($url)."',
				`email_personal` =  '".html::cln($email_personal)."'
				WHERE  
				`vendors`.`id` = $vendor_id;";
		db::execute_query($sql);
	}
	
	# DELETE VENDORS
	public static function deleteVendors($brand_id) 
	{
		$sql = "DELETE FROM `vendors` WHERE `vendors`.`id` = {$brand_id};";
		db::execute_query($sql);
	}
	
	
}
?>