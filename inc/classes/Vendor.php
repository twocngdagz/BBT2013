<?php
	class Vendor
	{

		public $db;

		public function __construct()
		{
			$this->db = new Database;
		}

		/**
		 * Will return all vendors
		 * @return Array all vendors
		 *
		 */
		public function getAllVendors()
		{
			$table = 'vendors';
			$columns = '*';

			return $this->db->get($table, $columns);
		}

		/**
		 * Will return all contact person
		 * @return Array all vendor contacts
		 *
		 */
		public function getAllContacts()
		{
			$table = 'vendor_contacts';
			$columns = '*';

			return $this->db->get($table, $columns);
		}

		/**
		 * Will return all contact person of a vendor
		 * @param Int vendor id
		 * @return Array all contactss
		 *
		 */
		public function getAllVendorContacts($id)
		{
			$table = 'vendor_contacts';
			$columns = '*';
			$where = array(
				'vendor_fk' => array(
					'cond' => '=',
					'value' => $id
				)
			);

			return $this->db->get($table, $columns, $where);
		}

		/**
		 * Will return all filtered vendors
		 * @param Array $vendorDetails contains first and last names
		 * @return Array all vendors
		 *
		 */
		public function searchVendor($vendorDetails)
		{
			$table = 'vendors';
			$columns = '*';

			if(!empty($vendorDetails['name']))
			{
				$where['name'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $vendorDetails['name'] . '%'
				);
				$where['andOr'] = 'OR';
			}

			if(!empty($vendorDetails['country']))
			{
				$where['country'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $vendorDetails['country'] . '%'
				);

				$where['andOr'] = 'OR';
			}

			if(!empty($vendorDetails['status']))
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
		 * Will return all filtered vendor contacts
		 * @param Array $vendorContactDetails contains first and last names of contacts
		 * @return Array all contacts
		 *
		 */
		public function searchVendorContacts($vendorContactDetails)
		{
			$table = 'vendor_contacts';
			$columns = '*';

			if(!empty($vendorContactDetails['first_name']))
			{
				$where['name'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $vendorContactDetails['first_name'] . '%'
				);
			}

			if(!empty($vendorContactDetails['last_name']))
			{
				if(!empty($where))
				{
					$where['andOr'] = 'OR';
				}

				$where['country'] = array(
					'cond' => 'LIKE',
					'value' => '%' . $vendorContactDetails['last_name'] . '%'
				);
			}

			return $this->db->get($table, $columns, $where);
		}

		/**
		 * Will return all filtered vendors
		 * @param Int $id contains vendor id
		 * @return Array all vendors having the id
		 *
		 */
		public function getVendorDetailsById($id)
		{
			$table = 'vendors';
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
		 * Will return all filtered vendor contacts
		 * @param Int $id contains contact id
		 * @return Array all vendors having the id
		 *
		 */
		public function getContactDetailsById($id)
		{
			$table = 'vendor_contacts';
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
		 * Will remove selected vendor from the database
		 * @param Int $id contains vendor ID
		 *
		 */
		public function deleteVendor($id)
		{
			$table = 'vendors';
			return $this->db->delete($table, $id);
		}

		/**
		 * Will remove aLL contacts under a vendor from the database
		 * @param Int $id vendors ID
		 *
		 */
		public function deleteVendorContacts($id)
		{
			$allContacts = $this->getAllVendorContacts($id);
			$result = '';
			foreach ($allContacts as $value) {
				$result .= $this->deleteContact($value['id']);
			}

			if(!empty($result))
			{
				return FALSE;
			}

			return TRUE;
		}

		/**
		 * Will remove selected contact from the database
		 * @param Int $id contains contact ID
		 *
		 */
		public function deleteContact($id)
		{
			$table = 'vendor_contacts';
			return $this->db->delete($table, $id);
		}

		/**
		 * Will insert/update vendor to the database
		 * @param Array $vendorDetails contains vendor details
		 * @return Boolean True if successfully updated/inserted
		 *
		 */
		public function updateVendor($vendorDetails)
		{
			$role = new UserPermissions();
			$table = 'vendors';
			$data = array();
			$statusFlag = 0;
			foreach ($vendorDetails as $field => $value)
			{
				if(!empty($value))
				{
					if($field!='Submit')
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

			if(empty($vendorDetails['id']))
			{
				$data['status'] = 1;
				$data['added_date'] = date("Y-m-d H:i:s");
				$data['added_by_adin_user_fk'] = $role->getCurrentUserId();
			}

			return $this->db->update($table, $data);
		}

		/**
		 * Will insert/update vendor contact to the database
		 * @param Array $vendorContactDetails contains contact details
		 * @return Boolean True if successfully updated/inserted
		 *
		 */
		public function updateVendorContact($vendorContactDetails)
		{
			$role = new UserPermissions();
			$table = 'vendor_contacts';
			$data = array();

			foreach ($vendorContactDetails as $field => $value)
			{
				if(!empty($value))
				{
					if($field!='Submit')
					{
						$data[$field] = $value;
					}
				}
			}

			if(empty($vendorContactDetails['id']))
			{
				$data['added_date'] = date("Y-m-d H:i:s");
				$data['added_by_adin_user_fk'] = $role->getCurrentUserId();
			}
			return $this->db->update($table, $data);
		}
	}
?>
