<?php
	/*
	 * Rewritten By Abz Kanda
	 * CodeReliable Programmer
	 * January 24, 2013
	 */
	class User
	{

		public $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		/**
		 * checks if user is logged in
		 * @return Boolean True if logged in
		 *
		 */
		public static function loginCheck()
		{
			if ($_COOKIE['isLoggedIn']==TRUE)
			{
				$oneWeek = 7 * 24 * 60 * 60;
				$lastActivity = $_COOKIE['lastActivity'] + $oneWeek;

				//checks if user's last activity was a week ago
				if($lastActivity > time()){
					$_COOKIE['lastActivity'] = time();
				}
				else
				{
					header('Location:login.php?session=expired');
				}

				return TRUE;
			}
			else
			{
				header('Location:login.php');
			}
		}

		/**
		 * checks if user login credentials are valid
		 * @param Array $data contains all fields posted from login form
		 * @return Array user details
		 *
		 */
		public function verifyCredentials($data=array())
		{
			$table = 'admin_users';
			$columns = '*';
			$where = array(
				'username' => array(
					'cond' => '=',
					'value' => $data['username']
					),
				'andOr' => 'AND',
				'password' => array(
					'cond' => '=',
					'value' => $data['password']
					)
			);
			$orderby = array();
			$limit = 1;

			$result = $this->db->get($table, $columns, $where, $orderby, $limit);
			return $result[0];
		}

		/**
		 * set login cookies
		 * @param Array $data contains user data
		 *
		 */
		public function setCookies($data=array())
		{
			$table = 'admin_users';
			$columns = 'id, permission_group_fk';
			$where = array(
				'id' => array(
					'cond' => '=',
					'value' => $data['id']
					)
			);
			$result = $this->db->get($table, $columns, $where);

			setcookie('isLoggedIn', TRUE, time()+(7*24*60*60));
			setcookie('info', $result[0]['permission_group_fk'] . ':' . $result[0]['id'], time()+(7*24*60*60));
			setcookie('lastActivity', time());
		}

		/**
		 * unset login cookies
		 *
		 */
		public function unSetCookies()
		{
			setcookie('isLoggedIn', 0, time()-3600);
			setcookie('info', 0, time()-3600);
			setcookie('lastActivity', 0, time()-3600);
			unset($_COOKIE['isLoggedIn']);
			unset($_COOKIE['info']);
			unset($_COOKIE['lastActivity']);
		}

		/**
		 * Will return all users
		 * @return Array all users
		 *
		 */
		public function getAllUsers()
		{
			$table = 'admin_users';
			$columns = '*';

			return $this->db->get($table, $columns);
		}

		/**
		 * Will return all filtered users
		 * @param Array $userDetails contains first and last names
		 * @return Array all users
		 *
		 */
		public function searchUser($userDetails)
		{
			$table = 'admin_users';
			$columns = '*';

			if(!empty($userDetails['first_name']))
			{
				$where['first_name'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $userDetails['first_name'] . '%'
				);
				$where['andOr'] = 'OR';
			}

			if(!empty($userDetails['last_name']))
			{
				$where['last_name'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $userDetails['last_name'] . '%'
				);
				$where['andOr'] = 'OR';
			}

			if(!empty($userDetails['status']))
			{
				$where['status'] = array(
					'cond' => '=',
					'value' => '1'
				);
			}
			else
			{
				$where['status'] = array(
					'cond' => '=',
					'value' => '0'
				);
			}

			return $this->db->get($table, $columns, $where);
		}

		/**
		 * Will return all filtered users
		 * @param Array $userDetails contains first and last names
		 * @return Array all users
		 *
		 */
		public function getDetailsById($id)
		{
			$table = 'admin_users';
			$columns = '*';
			$where = array(
				'id' => array(
					'cond' => '=',
					'value' => $id
				)
			);

			return $this->db->get($table, $columns, $where);
		}

		/**
		 * Will remove selected user from the database
		 * @param Int $id contains user ID
		 *
		 */
		public function deleteUser($id)
		{
			$table = 'admin_users';
			return $this->db->delete($table, $id);
		}

		/**
		 * Will insert/update user to the database
		 * @param Array $userDetails contains user details
		 * @return Boolean True if successfully updated/inserted
		 *
		 */
		public function updateUser($userDetails)
		{
			$role = new UserPermissions();
			$table = 'admin_users';
			$data = array();
			$statusFlag = 0;
			foreach ($userDetails as $field => $value)
			{
				if(!empty($value))
				{
					if($field!='confirmpassword' && $field!='Submit')
					{
						$data[$field] = $value;
					}
					if($field=='status')
					{
						$statusFlag++;
					}

				}
			}
			if($statusFlag==0)
			{
				$data['status'] = 0;
			}
			else
			{
				$data['status'] = 1;
			}
			if(empty($userDetails['id']))
			{
				$data['status'] = 1;
				$data['added_date'] = date("Y-m-d H:i:s");
				$data['added_by_adin_user_fk'] = $role->getCurrentUserId();
			}

			return $this->db->update($table, $data);
		}

	}
?>
