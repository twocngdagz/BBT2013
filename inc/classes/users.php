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
 * Module for Users, see functions on
 * Public Static Functions
 */

class Users {
	
	# LOGIN NATIVE USERS
	public static function login($username, $password) 
	{
		$sql = "SELECT * FROM `admin_users` WHERE (`username` = '".html::cln($username)."' OR `email` = '".html::cln($username)."') AND `password` = '".html::cln($password)."' LIMIT 1";			
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d) 
			{
				$_SESSION['user_id'] = $d['id'];
				$_SESSION['first_name'] = $d['first_name'];
				$_SESSION['last_name'] = $d['last_name'];
				$_SESSION['username'] = $d['username'];
				$_SESSION['email'] = $d['email'];
				$_SESSION['permission_group_fk'] = $d['permission_group_fk'];
				html::redirect('dashboard');
			}
		return $r;	
	}
	
	public static function isLoggedIn() 
	{
		if(empty($_SESSION['user_id'])) 
		{
			session_destroy();
			html::redirect('login');
		}
	}

	# GET USERS
	public static function getUsers($user_id) 
	{
		$sql = "SELECT * FROM `admin_users` 
				WHERE (`user_id` = '{$user_id}' )
				GROUP BY `admin_users`.`id`;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d)
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# GET ALL USERS
	public static function getAllUsers() 
	{
		$sql = "SELECT * FROM `admin_users`";
		db::execute_query($sql);
		$d_arr = db::get_result();
		$r = array();
			foreach($d_arr as $d)
			{
				array_push($r,$d);
			}
		return $r;	
	}	
	
	# GET UNIQUE USERS
	public static function unique($email,$username) 
	{
		$sql = "SELECT `id` FROM `admin_users` WHERE 
				(`email` = '{$email}' OR `username` = '{$username}')
				OR (`email` = '{$email}' AND `username` = '{$username}')
				LIMIT 1;";
		if(db::count_rows($sql) == 0) {
			return true;	
		} else {
			return false;
		}
	}	
	
	# GET UNIQUE USERS
	public static function getUserId($email,$username) 
	{
		$sql = "SELECT `id` FROM `admin_users` WHERE 
				(`email` = '{$email}' OR `username` = '{$username}')
				OR (`email` = '{$email}' AND `username` = '{$username}')
				LIMIT 1;";
		db::execute_query($sql);
		$d_arr = db::get_result();
		return $d_arr[0]['user_id'];
	}
	
	# INSERT USERS
	public static function insertUser($email, $firstname, $lastname, $username, $password, $role) 
	{
		$sql = "INSERT INTO `admin_users` (`id`, `email`, `first_name`, `last_name`, `username`, `password`, `permission_group_fk`) 
				VALUES (NULL, '".html::cln($email)."', '".html::cln($firstname)."', '".html::cln($lastname)."', '".html::cln($username)."', 
				'".html::cln($password)."','".html::cln($role)."');";
		db::execute_query($sql);
	}

	# UPDATE USER
	public static function updateUser($user_id, $email, $firstname, $lastname, $username, $password, $permission) 
	{
		$sql = "UPDATE `admin_users` SET  
				`username` =  '".html::cln($username)."',
				`password` =  '".html::cln($password)."',
				`email` =  '".html::cln($email)."',
				`first_name` =  '".html::cln($firstname)."',
				`last_name` =  '".html::cln($lastname)."' ,
				`permission_group_fk` =  '".html::cln($permission)."' 
				WHERE  `admin_users`.`id` =$user_id;";
		db::execute_query($sql);
	}
	

	# DELETE USERS
	public static function deleteUser($user_id) 
	{
		$sql = "DELETE FROM `admin_users` WHERE `admin_users`.`id` = {$user_id};";
		db::execute_query($sql);
	}
	
	
}
?>