<?php
	class Brand
	{

		public $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		/**
		 * Will return all brands
		 * @return Array all brands
		 *
		 */
		public function getAllBrands()
		{
			$table = 'brands';
			$columns = '*';

			return $this->db->get($table, $columns);
		}

		/**
		 * Will return all filtered brands
		 * @param Array $brandDetails contains first and last names
		 * @return Array all brands
		 *
		 */
		public function searchBrand($brandDetails)
		{
			$table = 'brands';
			$columns = '*';

			if(!empty($brandDetails['name']))
			{
				$where['name_short'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $brandDetails['name'] . '%'
				);

				$where['andOr'] = 'OR';

				$where['name_long'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $brandDetails['name'] . '%'
				);
			}

			return $this->db->get($table, $columns, $where);
		}

		/**
		 * Will return all filtered brands
		 * @param Array $brandDetails contains first and last names
		 * @return Array all brands
		 *
		 */
		public function getDetailsById($id)
		{
			$table = 'brands';
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
		public function deleteBrand($id)
		{
			$table = 'brands';
			return $this->db->delete($table, $id);
		}

		/**
		 * Will insert/update user to the database
		 * @param Array $brandDetails contains user details
		 * @return Boolean True if successfully updated/inserted
		 *
		 */
		public function updateBrand($brandDetails)
		{
			$role = new UserPermissions();
			$table = 'brands';
			$data = array();
			foreach ($brandDetails as $field => $value)
			{
				if(!empty($value))
				{
					if($field!='Submit' && $field!='old_image_thumbnail' && $field!='old_image_small' && $field!='old_image_large')
					{
						$data[$field] = $value;
					}
				}
			}

			if(empty($brandDetails['id']))
			{
				$data['added_date'] = date("Y-m-d H:i:s");
				$data['added_by_adin_user_fk'] = $role->getCurrentUserId();
			}

			return $this->db->update($table, $data);
		}

	}
?>
