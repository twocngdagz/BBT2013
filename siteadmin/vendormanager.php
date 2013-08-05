<!--
<?php

	$currentUrl = explode('/', $_SERVER['REQUEST_URI']);
	$currentFile = explode('\\', __FILE__);

	if(!strcasecmp(end($currentUrl), end($currentFile)))
	{
		header('Location:./');
	}

	$vendor = new Vendor();

    $action ="";
    $message ="";

	if(isset($transaction['action']))
    {
        $action = $transaction['action'];

		$contactAction = '';
		if(!empty($transaction['contact']))
		{
			$contactAction = $transaction['contact'];
		}


        switch ($action)
        {
            case 'search':
                            $vendorFilters = $_POST;
                            $result = $vendor->searchVendor($vendorFilters);
							if(empty($result['id']))
							{
								$resCount = count($result);
							}
							else
							{
								$resCount = 1;
							}
                            $message = "There ". (($resCount>1)?"are":"is")." ". $resCount . " result". (($resCount>1)?"s":"").".";
                            break;
            case 'view':
                            if(isset($transaction['contact']))
							{
								$contactAction = $transaction['contact'];

								switch ($contactAction)
								{
									case 'view':
													$vendorContactInfo = $vendor->getContactDetailsById($transaction['contactid']);
													$vendorContactDetails = $vendorContactInfo[0];
													$message = 'Click "Save" to update contact or "Cancel" to close the form.';
													break;
									case 'save':
													$vendorContactDetails = $_POST;
													$isUpdate = FALSE;

													if(!empty($vendorContactDetails['id']))
													{
														$isUpdate = TRUE;
													}
													else
													{
														$addContactDetails = $vendorContactDetails;
													}

													$flag = settype($vendor->updateVendorContact($vendorContactDetails),'string');
													$name = ucfirst($vendorContactDetails['first_name']) . ' ' . ucfirst($vendorContactDetails['last_name']);

													if ($flag)
													{
														$message = "Contact ". $name . " was successfully " . ($isUpdate?"updated.":"inserted.");
														unset($addContactDetails);
													}
													else
													{
														$message = "Contact ". $name . " was not " . ($isUpdate?"updated.":"inserted.") . " ({$flag}).";
													}

													break;
									case 'delete':
													$vendorInfo = $vendor->getContactDetailsById($transaction['contactid']);
													$name = ucfirst($vendorInfo[0]['first_name']) . ' ' . ucfirst($vendorInfo[0]['last_name']);
													$flag = $vendor->deleteContact($transaction['contactid']);
													if ($flag==TRUE)
													{
														$message = "Contact ". $name ." successfully deleted.";
													}
													else
													{
														$message = "Contact ". $name ." was not deleted ({$flag}).";
													}

													break;
								}
							}
							$vendorInfo = $vendor->getVendorDetailsById($transaction['vendorid']);
                            $vendorDetails = $vendorInfo[0];
                            $result = $vendor->getAllVendors();
                            $message = 'Click "Save" to update vendor or "Cancel" to close the form.';
                            break;
            case 'save':
                            $vendorDetails = $_POST;
							$isUpdate = FALSE;
							if(!empty($vendorDetails['id']))
							{
								$isUpdate = TRUE;
							}
							else
							{
								$addVendorDetails = $vendorDetails;
							}

							$flag = settype($vendor->updateVendor($vendorDetails),'string');
							$name = ucfirst($vendorDetails['name']);

                            if ($flag)
                            {
                                $message = "Vendor ". $name . " was successfully " . ($isUpdate?"updated.":"inserted.");
								unset($addVendorDetails);
                            }
                            else
                            {
                                $message = "Vendor ". $name . " was not " . ($isUpdate?"updated.":"inserted.") . " ({$flag}).";
                            }

                            $result = $vendor->getAllVendors();
                            break;
            case 'delete':
                            $vendorInfo = $vendor->getVendorDetailsById($transaction['vendorid']);
                            $name = ucfirst($vendorInfo[0]['name']);
                            $flag = $vendor->deleteVendor($transaction['vendorid']);
                            if ($flag==TRUE)
                            {
                                $message = "Vendor ". $name ." successfully deleted.";
                            }
                            else
                            {
                                $message = "Vendor ". $name ." was not deleted ({$flag}).";
                            }
                            $result = $vendor->getAllVendors();
                            break;
        }
    }
    else
    {
        $result = $vendor->getAllVendors();
    }

    function makeVendorTable($list)
    {
		$result = "
		<table id='vendors_15'>
			<tbody>";
		if(!empty($list['id']))
		{
			$name = $list['name'];
			$address = $list['street'] . ' ' . $list['city'] . ', ' . $list['state'] . '<br/>' . $list['country'] . ' ' . $list['zip'];
			$result = "
				<tr>
					<td><a href='?page=vendormanager&action=view&amp;vendorid={$list['id']}' title='View'>{$name}</a></td>
					<td>{$list['email']}</td>
					<td>{$address}</td>
					<td>{$list['phone']}</td>
					<td>
						<button onclick='window.location=\"?page=vendormanager&action=view&amp;vendorid={$list['id']}\"'>EDIT</button>
						<button onclick='confirmation({$list['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
		}
		else
		{
			foreach ($list as $key => $value) {
				$name = $value['name'];
				$address = $value['street'] . ' ' . $value['city'] . ', ' . $value['state'] . '<br/>' . $value['country'] . ' ' . $value['zip'];
				$result .= "
				<tr>
					<td><a href='?page=vendormanager&action=view&amp;vendorid={$value['id']}' title='View'>{$name}</a></td>
					<td>{$value['email']}</td>
					<td>{$address}</td>
					<td>{$value['phone']}</td>
					<td>
						<button onclick='window.location=\"?page=vendormanager&action=view&amp;vendorid={$value['id']}\"'>EDIT</button>
						<button onclick='confirmation({$value['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
			}
		}
        $result .= "
			</tbody>
		</table>\n";

        $result .= '<script type="text/javascript">
		//<![CDATA[
			jQuery(document).ready(function($) {
				$("#vendors_15").flexigrid({
					colModel : [
						{display: "Name", name: "first_name", width : 300, sortable : true, align: "left"},
						{display: "Email", name: "email", width : 150, align: "left"},
						{display: "Address", name: "street", width : 400, sortable : true, align: "left"},
						{display: "Phone", name: "phone", width : 100, sortable : true, align: "left"},
						{display: "Action", width : 120, align: "center"}
					],
					buttons : [
						{name: "Add", bclass: "add", onpress : addVendorForm, align : "right"}
					],

					title: "Vendors",
					showTableToggleBtn: true,
					height: 200
				});
			});
		//]]>
		</script>';
        return $result;
    }

    function makeVendorContactTable($id)
    {
		global $vendor;
		$list = $vendor->getAllVendorContacts($id);
		$result = "
		<table id='vendors_15'>
			<tbody>";
		if(!empty($list['id']))
		{
			$name = $list['name_name'] . ' ' . $list['last_name'];
			$result = "
				<tr>
					<td><a href='?page=vendormanager&action=view&amp;vendorid={$id}&AMP;contact=view&amp;contactid={$list['id']}' title='View'>{$name}</a></td>
					<td>{$list['email']}</td>
					<td>
						<button onclick='window.location=\"?page=vendormanager&action=view&amp;vendorid={$id}&AMP;contact=view&amp;contactid={$list['id']}\"'>EDIT</button>
						<button onclick='contactConfirmation({$id},{$list['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
		}
		else
		{
			foreach ($list as $key => $value) {
				$name = $value['first_name'] . ' ' . $value['last_name'];
				$result .= "
				<tr>
					<td><a href='?page=vendormanager&action=view&amp;vendorid={$id}&AMP;contact=view&amp;contactid={$value['id']}' title='View'>{$name}</a></td>
					<td>{$value['email']}</td>
					<td>
						<button onclick='window.location=\"?page=vendormanager&action=view&amp;vendorid={$id}&AMP;contact=view&amp;contactid={$value['id']}\"'>EDIT</button>
						<button onclick='contactConfirmation({$id},{$value['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
			}
		}
        $result .= "
			</tbody>
		</table>\n";

        $result .= '<script type="text/javascript">
		//<![CDATA[
			jQuery(document).ready(function($) {
				$("#vendors_15").flexigrid({
					colModel : [
						{display: "Name", name: "first_name", width : 300, sortable : true, align: "left"},
						{display: "Email", name: "email", width : 150, align: "left"},
						{display: "Action", width : 120, align: "center"}
					],
					buttons : [
						{name: "Add", bclass: "add", onpress : addVendorForm, align : "right"}
					],

					title: "Vendor Contacts",
					showTableToggleBtn: true,
					height: 200
				});
			});
		//]]>
		</script>';
        return $result;
    }

    function makeVendorSidebar($list)
    {
        global $role;

		$result = "
		<table id='vendors_side'>
			<tbody>";
		if(!empty($list['id']))
		{
			$roleName = $role->getRoleName($list['permission_group_fk']);
			$name = $list['name'];
			$result = "
				<tr>
					<td><a href='?page=vendormanager&action=view&amp;vendorid={$list['id']}' title='View'>{$name}</a></td>
					<td>
						<button onclick='window.location=\"?page=vendormanager&action=view&amp;vendorid={$list['id']}\"'>EDIT</button>
						<button onclick='confirmation({$list['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
		}
		else
		{
	        foreach ($list as $key => $value) {
				$name = $value['name'];
				$result .= "
				<tr>
					<td><a href='?page=vendormanager&action=view&amp;vendorid={$value['id']}' title='View'>{$name}</a></td>
					<td>
						<button onclick='window.location=\"?page=vendormanager&action=view&amp;vendorid={$value['id']}\"'>EDIT</button>
						<button onclick='confirmation({$value['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
			}
		}
        $result .= "</table>\n";
        $result .= '<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function($) {
			$("#vendors_side").flexigrid({
				colModel : [
					{display: "Name", name: "first_name", width : 154, sortable : true, align: "left"},
					{display: "Action", width : 120, align: "center"}
				],
				sortname: "first_name",
				sortorder: "asc",
				title: "Vendors",
				showTableToggleBtn: true,
				width: 300
			});
		});
		//]]>
		</script>';
        return $result;
    }

    $allVendorsList = makeVendorTable($result);
    $allVendorsSidebar = makeVendorSidebar($result);

	if($userRole!=5) //non staff are not allowed to view this area
	{
?>

			<script type="text/javascript">
			//<![CDATA[
				function sh(id)
				{
					document.getElementById(id).style.display = 'block';
				}

				function hi(id)
				{
					document.getElementById(id).style.display = 'none';
				}

				function confirmation(vendorid,vendorname) {
					var answer = confirm("Are you sure you want to delete "+vendorname+"?")
					if (answer){
						window.location = "?page=vendormanager&action=delete&vendorid="+vendorid;
					}
				}

				function contactConfirmation(vendorid,vendorname) {
					var answer = confirm("Are you sure you want to delete "+vendorname+"?")
					if (answer){
						window.location = "?page=vendormanager&action=delete&vendorid="+vendorid;
					}
				}

				function addVendorForm() {
					popup_form("formContainer","form_InnerContainer","backgroundpopup");
				}
			//]]>
			</script>
                <div class="vendor_search">
					<fieldset>
						<legend>Search Vendor</legend>
						<form method="post" action="?page=vendormanager&action=search">
							<table>
								<tr>
									<td>
										<label for="search_name">Name</label>
									</td>
									<td>
										<input type="text" name="name" id="search_name" value="<?php echo empty($vendorFilters['name'])? '':$vendorFilters['name']; ?>" />
									</td>
								</tr>
								<tr>
									<td>
										<input name="status" id="search_status" type="checkbox" value="1" <?php echo empty($vendorFilters['status'])? '':'checked="checked"'; ?> />
									</td>
									<td>
										<label for="search_status">Active</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="hidden" name="action" value="search" />
										<input type="button" value="Search" title="Search" onclick="form.submit();" />
										<input type="button" value="Reset" onclick="window.location = '?page=vendormanager'" />
									</td>
								</tr>
							</table>
						</form>
					</fieldset>
                </div>

                <div class="message" id="message">
                    <?php echo $message; ?>
                </div>

<?php
		if($action=="view")
		{
?>
                <div class="vendor_edit">
                    <fieldset>
						<legend>Edit Vendor</legend>
						<form method="post" action="?page=vendormanager&action=save" id="edit_vendor" name="editVendor">
							<table>
								<tr>
									<td>
										<input name="status" id="status" type="checkbox" value="1" <?php echo ($vendorDetails['status'])? 'checked="checked"':''; ?> />
									</td>
									<td>
										<label for="status">Active</label>
									</td>
								</tr>
								<tr>
									<td>
										<label for="name">Name</label>
									</td>
									<td>
										<input type="text" name="name" id="name" value="<?php echo $vendorDetails['name'];?>" /><br/>
										<span id='editVendor_name_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="email">Email</label>
									</td>
									<td>
										<input type="text" name="email" id="email" value="<?php echo $vendorDetails['email'];?>" /><br/>
										<span id='editVendor_email_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="street">Street</label>
									</td>
									<td>
										<input type="text" name="street" id="street" value="<?php echo $vendorDetails['street'];?>" /><br/>
										<span id='editVendor_street_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="city">City</label>
									</td>
									<td>
										<input type="text" name="city" id="city" value="<?php echo $vendorDetails['city'];?>" /><br/>
										<span id='editVendor_city_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="state">State</label>
									</td>
									<td>
										<input type="text" name="state" id="state" value="<?php echo $vendorDetails['state'];?>" /><br/>
										<span id='editVendor_state_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="zip">Zip</label>
									</td>
									<td>
										<input type="text" name="zip" id="zip" value="<?php echo $vendorDetails['zip'];?>" /><br/>
										<span id='editVendor_zip_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="country">Country</label>
									</td>
									<td>
										<input type="text" name="country" id="country" value="<?php echo $vendorDetails['country'];?>" /><br/>
										<span id='editVendor_country_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="phone">Phone</label>
									</td>
									<td>
										<input type="text" name="phone" id="phone" value="<?php echo $vendorDetails['phone'];?>" /><br/>
										<span id='editVendor_phone_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="phone_mobile">Mobile Phone</label>
									</td>
									<td>
										<input type="text" name="phone_mobile" id="phone_mobile" value="<?php echo $vendorDetails['phone_mobile'];?>" /><br/>
										<span id='editVendor_phone_mobile_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="phone_fax">Fax</label>
									</td>
									<td>
										<input type="text" name="phone_fax" id="phone_fax" value="<?php echo $vendorDetails['phone_fax'];?>" /><br/>
										<span id='editVendor_phone_fax_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="notes">Notes</label>
									</td>
									<td>
										<textarea name="notes" id="notes" cols="50" rows="10"><?php echo $vendorDetails['notes'];?></textarea><br/>
										<span id='editVendor_notes_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="hidden" name="id" value="<?php echo $transaction['vendorid']; ?>" />
										<input type="submit" name="Submit" value="Save" />
										<input type="button" value="Cancel" onclick="window.location = '?page=vendormanager'" />
									</td>
								</tr>
							</table>
						</form>
						<script type='text/javascript'>
						//<![CDATA[
							var editFrmValidator  = new Validator("editVendor");
							editFrmValidator.EnableOnPageErrorDisplay();
							editFrmValidator.EnableMsgsTogether();

							editFrmValidator.addValidation("name","req","Please provide a name");

							editFrmValidator.addValidation("email","req","Please provide an email address");
							editFrmValidator.addValidation("email","email","Please provide a valid email address");

							editFrmValidator.addValidation("street","req","Please provide an address");

							editFrmValidator.addValidation("zip","req","Please provide zip code");
							editFrmValidator.addValidation("zip","num","Please provide a valid zip code");

							editFrmValidator.addValidation("phone","req","Please provide a phone number");
							editFrmValidator.addValidation("phone","regex=^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$","Please provide a valid phone number");
						//]]>
						</script>

					</fieldset>
                </div>
				<div class="vendor_lists">
					<script type="text/javascript">
					//<![CDATA[
						function contactConfirmation(vendorid,contactid,vendorname) {
							var answer = confirm("Are you sure you want to delete "+vendorname+"?")
							if (answer){
								window.location = "?page=vendormanager&action=view&vendorid="+vendorid+"&contact=delete&contactid="+contactid;
							}
						}
					//]]>
					</script>

<?php
			if($contactAction=="view")
			{
?>
                <div class="vendor_edit">
                    <fieldset>
						<legend>Edit Contact</legend>
						<form method="post" action="?page=vendormanager&AMP;action=view&AMP;vendorid=<?php echo $transaction['vendorid'];?>&AMP;contact=save" id="edit_vendor" name="editContactVendor">
							<table>
								<tr>
									<td>
										<label for="first_name">First Name</label>
									</td>
									<td>
										<input type="text" name="first_name" id="first_name" value="<?php echo $vendorContactDetails['first_name'];?>" /><br/>
										<span id='editVendor_first_name_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="last_name">Last Name</label>
									</td>
									<td>
										<input type="text" name="last_name" id="last_name" value="<?php echo $vendorContactDetails['last_name'];?>" /><br/>
										<span id='editVendor_last_name_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="email">Email</label>
									</td>
									<td>
										<input type="text" name="email" id="email" value="<?php echo $vendorContactDetails['email'];?>" /><br/>
										<span id='editVendor_email_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="hidden" name="id" value="<?php echo $transaction['contactid']; ?>" />
										<input type="hidden" name="vendor_fk" value="<?php echo $transaction['vendorid']; ?>" />
										<input type="submit" name="Submit" value="Save" />
										<input type="button" value="Cancel" onclick="window.location = '?page=vendormanager&action=view&vendorid=<?php echo $transaction['vendorid']; ?>'" />
									</td>
								</tr>
							</table>
						</form>
						<script type='text/javascript'>
						//<![CDATA[
							var editFrmValidator  = new Validator("editContactVendor");
							editContactFrmValidator.EnableOnPageErrorDisplay();
							editContactFrmValidator.EnableMsgsTogether();

							editContactFrmValidator.addValidation("first_name","req","Please provide a first name");
							editContactFrmValidator.addValidation("last_name","req","Please provide a last name");

							editContactFrmValidator.addValidation("email","req","Please provide an email address");
							editContactFrmValidator.addValidation("email","email","Please provide a valid email address");

						//]]>
						</script>

					</fieldset>
                </div>
<?php
			}
			$allVendorContactsList = makeVendorContactTable($transaction['vendorid']);
  			echo $allVendorContactsList;
?>

				</div>
				<div id='formContainer'>
					<div id="container_header">
						<div id="box_Title">Add Contact</div>
						<div id="box_Close"><a href="javascript:hideform('formContainer','backgroundpopup');" title="Close">[X]</a></div>
					</div>

					<div id="form_InnerContainer">
					  <form id="update" name="update" action="?page=vendormanager&AMP;action=view&AMP;vendorid=<?php echo $transaction['vendorid'];?>&AMP;contact=save" method='post' accept-charset='UTF-8'>

							<div class='short_explanation required'>required fields</div>
							<div id='server_errors' class='error'></div>

							<div class='container'>
								<label for='first_name' class="required">Name: </label>
								<input type='text' name='first_name' id='first_name' value='<?php if (!empty($addContactDetails)){ echo $addContactDetails['first_name'];} ?>' /><br/>
								<span id='update_first_name_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='last_name' class="required">Name: </label>
								<input type='text' name='last_name' id='last_name' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['last_name'];} ?>' /><br/>
								<span id='update_last_name_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='email' class="required">Email: </label>
								<input type='text' name='email' id='email' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['email'];} ?>' /><br/>
								<span id='update_email_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<input type='submit' name='Submit' value='Save' />
								<input type="hidden" name="vendor_fk" value="<?php echo $transaction['vendorid']; ?>" />
								<input type="button" value="Cancel" onclick="hideform('formContainer','backgroundpopup');" />
							</div>
						</form>
					</div>
				</div>

				<script type='text/javascript'>
				//<![CDATA[
					var contactfrmvalidator  = new Validator("update");
					contactfrmvalidator.EnableOnPageErrorDisplay();
					contactfrmvalidator.EnableMsgsTogether();

					contactfrmvalidator.addValidation("first_name","req","Please provide a first name");
					contactfrmvalidator.addValidation("last_name","req","Please provide a last name");

					contactfrmvalidator.addValidation("email","req","Please provide an email address");
					contactfrmvalidator.addValidation("email","email","Please provide a valid email address");

				//]]>
				</script>

				<div id='backgroundpopup'></div>
            </div>
            <div class="side_bar"><?php echo $allVendorsSidebar; ?></div>
<?php
		}
		else
		{
?>
				<div id='formContainer'>
					<div id="container_header">
						<div id="box_Title">Add Vendor</div>
						<div id="box_Close"><a href="javascript:hideform('formContainer','backgroundpopup');" title="Close">[X]</a></div>
					</div>

					<div id="form_InnerContainer">
						<form id="update" name="update" action="?page=vendormanager&action=save" method='post' accept-charset='UTF-8'>

							<div class='short_explanation required'>required fields</div>
							<div id='server_errors' class='error'></div>

							<div class='container'>
								<label for='name' class="required">Name: </label>
								<input type='text' name='name' id='name' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['name'];} ?>' /><br/>
								<span id='update_name_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='email' class="required">Email: </label>
								<input type='text' name='email' id='email' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['email'];} ?>' /><br/>
								<span id='update_email_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='street' class="required">Street: </label>
								<input type='text' name='street' id='street' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['street'];} ?>' /><br/>
								<span id='update_street_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='city' >City: </label>
								<input type='text' name='city' id='city' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['city'];} ?>' /><br/>
								<span id='update_city_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='state' >State: </label>
								<input type='text' name='state' id='state' value='<?php if (!empty($addVendorDetails)){ echo $addVendorDetails['state'];} ?>' /><br/>
								<span id='update_state_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='zip' class="required">Zip: </label>
								<input type='text' name='zip' id='zip' value='<?php if (!empty($addVendorDetails)) { echo $addVendorDetails['zip']; }?>' /><br/>
								<span id='update_zip_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='country' class="required">County: </label>
								<input type='text' name='country' id='country' value='<?php if (!empty($addVendorDetails)) { echo $addVendorDetails['country'];} ?>' /><br/>
								<span id='update_country_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='phone' class="required">Phone: </label>
								<input type='text' name='phone' id='phone' value='<?php if (!empty($addVendorDetails)) { echo $addVendorDetails['phone']; } ?>' /><br/>
								<span id='update_phone_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='phone_mobile' >Mobile Phone: </label>
								<input type='text' name='phone_mobile' id='phone_mobile' value='<?php if (!empty($addVendorDetails)) { echo $addVendorDetails['phone_mobile']; } ?>' /><br/>
								<span id='update_phone_mobile_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='phone_fax' >Fax: </label>
								<input type='text' name='phone_fax' id='phone_fax' value='<?php if (!empty($addVendorDetails)) { echo $addVendorDetails['phone_fax']; } ?>' /><br/>
								<span id='update_phone_fax_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='notes' >Notes: </label>
								<textarea name='notes' id='notes' cols ="50" rows="10" ><?php if (!empty($addVendorDetails)) { echo $addVendorDetails['notes']; } ?></textarea><br/>
								<span id='update_notes_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<input type='submit' name='Submit' value='Save' />
								<input type="button" value="Cancel" onclick="hideform('formContainer','backgroundpopup');" />
							</div>
						</form>
					</div>
				</div>

				<script type='text/javascript'>
				//<![CDATA[
					var frmvalidator  = new Validator("update");
					frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();

					frmvalidator.addValidation("name","req","Please provide a name");

					frmvalidator.addValidation("email","req","Please provide an email address");
					frmvalidator.addValidation("email","email","Please provide a valid email address");

					frmvalidator.addValidation("street","req","Please provide an address");

					frmvalidator.addValidation("zip","req","Please provide zip code");
					frmvalidator.addValidation("zip","num","Please provide a valid zip code");

					frmvalidator.addValidation("phone","req","Please provide a phone number");
					frmvalidator.addValidation("phone","regex=^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$","Please provide a valid phone number");

				//]]>
				</script>

				<div id='backgroundpopup'></div>
                <div class="vendor_lists"><?php echo $allVendorsList; ?></div>
            </div>
<?php
		}
	}
	else
	{
?>
                <div class="message" id="message">
                    <span>Permission Denied!</span>
                </div>
<?php
	}

?>
            </div>
        </div>
-->