<?php
	class UserPermissions
	{

		public $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		/**
		 * Will return the current user role
		 * @return int 1=admin, 2=manager, 3=customer support level 2, 4=customer support, 5=user
		 */
		public function getRole()
		{
			if(isset($_COOKIE['info']))
			{
				$info = explode(':',$_COOKIE['info']);
				return $info[0];
			}
		}

		/**
		 * Will return the current user id
		 * @return int user ID
		 */
		public function getCurrentUserId()
		{
			if(isset($_COOKIE['info']))
			{
				$info = explode(':',$_COOKIE['info']);
				return $info[1];
			}
		}

		/**
		 * Will return the user role name
		 * @param Int $id permision type id
		 * @return String group name
		 */
		public function getRoleName($id)
		{
			$table = 'admin_groups';
			$columns = 'name';
			$where = array(
				'id' => array(
					'cond' => '=',
					'value' => $id
					)
			);

			$result = $this->db->get($table, $columns, $where);

			return $result[0];
		}

		/**
		 * Will return all user roles
		 * @return Array all user roles
		 */
		public function getAllRoles()
		{
			$table = 'admin_groups';
			$columns = '*';

			return $this->db->get($table, $columns);
		}

		/**
		 * Check if user is admin
		 * @return Boolean true if admin
		 */
		public function isAdmin()
		{
			if($this->getRole()==1)
			{
				return TRUE;
			}

			return FALSE;
		}
	}
?>
