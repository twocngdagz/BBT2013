<?php
	/*
	 * Rewritten By Abz Kanda
	 * CodeReliable Programmer
	 * January 24, 2013
	 */
	
	// get the current url request and the current file name and path
	$currentUrl = explode('/', $_SERVER['REQUEST_URI']);
	$currentFile = explode('\\', __FILE__);
	/* checks if file name is the same with the current url script 
	 * request and redirects to index.php if true to avoid file access 
	 * using direct url
	 */
	if(!strcasecmp(end($currentUrl), end($currentFile))){
		header('Location:./');
	}

//variable initialization
$action ="";
$message ="";

if(isset($transaction['action']))
{
	$action = $transaction['action'];

	switch ($action)
	{
		case 'search':
						$userFilters = $_POST;
						
						$result = $user->searchUser($userFilters);
						
						// if returned results are more than 1
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
						$userInfo = $user->getDetailsById($transaction['userid']);
						$userDetails = $userInfo[0];
						$result = $user->getAllUsers();
						$message = 'Click "Save" to update user or "Cancel" to close the form.';
						break;
		case 'save':
						$userDetails = $_POST;
						
						//if there is an ID then it is an update otherwise it is a new entry
						$isUpdate = FALSE;
						if(!empty($userDetails['id']))
						{
							$isUpdate = TRUE;
						}

						$flag = settype($user->updateUser($userDetails),'string');
						$name = ucfirst($userDetails['first_name']) ." ". ucfirst($userDetails['last_name']);

						if ($flag)
						{
							$message = "User ". $name . " was successfully " . ($isUpdate?"updated.":"inserted.");
						}
						else
						{
							$message = "User ". $name . " was not " . ($isUpdate?"updated.":"inserted.") . " ({$flag}).";
						}
						$result = $user->getAllUsers();
						break;
		case 'delete':
						$userInfo = $user->getDetailsById($transaction['userid']);
						@$name = ucfirst($userInfo['first_name']) ." ". ucfirst($userInfo['last_name']);
						$flag = $user->deleteUser($transaction['userid']);
						if ($flag==TRUE)
						{
							$message = "User ". $name ." successfully deleted.";
						}
						else
						{
							$message = "User ". $name ." was not deleted ({$flag}).";
						}
						$result = $user->getAllUsers();
						break;
	}
}
else
{
	$result = $user->getAllUsers();
}


/*
 * create a list of users table having name, email, username, role type and actions columns
 * @param Array $list the array of user details to create the table from
 * @return String $result the table
 */

function makeUserTable($list)
{
	global $role;

	$result = "
	<table id='users_15' width='100%'>
		<tbody>";
	if(!empty($list['id']))
	{
		$roleName = $role->getRoleName($list['permission_group_fk']);
		$name = $list['first_name'] . " " . $list['last_name'];
		$result = "
			<tr>
				<td><a href='?page=usermanager&action=view&amp;userid={$list['id']}' title='View'>{$name}</a></td>
				<td>{$list['email']}</td>
				<td>{$list['username']}</td>
				<td>{$roleName['name']}</td>
				<td>
					<button class='btn btn-mini' onclick='window.location=\"?page=usermanager&action=view&amp;userid={$list['id']}\"'>EDIT</button>
					<button class='btn btn-mini btn-danger' onclick='confirmation({$list['id']},\"{$name}\");'>DELETE</button>
				</td>
			</tr>\n";
	}
	else
	{
		foreach ($list as $key => $value) {
			$roleName = $role->getRoleName($value['permission_group_fk']);
			$name = $value['first_name'] . " " . $value['last_name'];
			$result .= "
			<tr>
				<td><a href='?page=usermanager&action=view&amp;userid={$value['id']}' title='View'>{$name}</a></td>
				<td>{$value['email']}</td>
				<td>{$value['username']}</td>
				<td>{$roleName['name']}</td>
				<td>
					<button class='btn btn-mini' onclick='window.location=\"?page=usermanager&action=view&amp;userid={$value['id']}\"'>EDIT</button>
					<button class='btn btn-mini btn-danger' onclick='confirmation({$value['id']},\"{$name}\");'>DELETE</button>
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
			$("#users_15").flexigrid({
				colModel : [
					{display: "Name", name: "first_name", width : 100, sortable : true, align: "left"},
					{display: "Email", name: "email", width : 100, align: "left"},
					{display: "Username", name: "username", width : 200, sortable : true, align: "left"},
					{display: "Permission", name: "permission_group_fk", width : 200, sortable : true, align: "left"},
					{display: "Action", width : 120, align: "center"}
				],
				buttons : [
					{name: "Add", bclass: "add", onpress : addUserForm, align : "right"}
				],

				title: "Users",
				showTableToggleBtn: true,
				height: 600
			});
		});
	//]]>
	</script>';
	return $result;
}

/*
 * create a list of users table having name and actions columns (for sidebar)
 * @param Array $list the array of user details to create the table from
 * @return String $result the table
 */
function makeUserSidebar($list)
{
	global $role;

	$result = "
	<table id='users_side'>
		<tbody>";
	if(!empty($list['id']))
	{
		$roleName = $role->getRoleName($list['permission_group_fk']);
		$name = $list['first_name'] . " " . $list['last_name'];
		$result = "
			<tr>
				<td><a href='?page=usermanager&action=view&amp;userid={$list['id']}' title='View'>{$name}</a></td>
				<td>
					<button class='btn btn-mini' onclick='window.location=\"?page=usermanager&action=view&amp;userid={$list['id']}\"'>EDIT</button>
					<button class='btn btn-mini btn-danger' onclick='confirmation({$list['id']},\"{$name}\");'>DELETE</button>
				</td>
			</tr>\n";
	}
	else
	{
		foreach ($list as $key => $value) {
			$name = $value['first_name'] . " " . $value['last_name'];
			$result .= "
			<tr>
				<td><a href='?page=usermanager&action=view&amp;userid={$value['id']}' title='View'>{$name}</a></td>
				<td>
					<button  class='btn btn-mini' onclick='window.location=\"?page=usermanager&action=view&amp;userid={$value['id']}\"'>EDIT</button>
					<button  class='btn btn-mini btn-danger' onclick='confirmation({$value['id']},\"{$name}\");'>DELETE</button>
				</td>
			</tr>\n";
		}
	}
	$result .= "</table>\n";
	$result .= '<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function($) {
		$("#users_side").flexigrid({
			colModel : [
				{display: "Name", name: "first_name", width : 154, sortable : true, align: "left"},
				{display: "Action", width : 120, align: "center"}
			],
			sortname: "first_name",
			sortorder: "asc",
			title: "Users",
			showTableToggleBtn: true,
			width: 300
		});
	});
	//]]>
	</script>';
	return $result;
}

/*
 * create a dropdown of users types
 * @param Array $list the array of user type details to create the list from
 * @param Array $selected (optional) the selected value
 * @return String $result the table
 */
function makeUserTypeDropdown($list, $selected=0)
{
	$result='';
	$result = "<option ".(($selected==0)?" selected='selected'":"")." value='0' >Select user type.</option>\n";
	foreach ($list as $key => $value) {
		$result .= "<option ".(($selected==$value['id'])?" selected='selected'":"")." value='{$value['id']}' >{$value['name']}</option>\n";
	}
	return $result;
}

$allUsersList = makeUserTable($result);
$allUsersSidebar = makeUserSidebar($result);
if($role->isAdmin())
{

	// the search form
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

			function confirmation(userid,username) {
				var answer = confirm("Are you sure you want to delete "+username+"?")
				if (answer){
					window.location = "?page=usermanager&action=delete&userid="+userid;
				}
			}

			function addUserForm() {
				popup_form("createUserModal","form_InnerContainer","backgroundpopup");
			}
		//]]>
		</script>
		
<div class="row-fluid">
	<div class="span3">		
			<div class="well" style="background-color: #ddd;">
				<fieldset>
					<legend>Search User</legend>
					<form method="post" action="?page=usermanager&action=search">
						<table>
							<tr>
								<td>
									<div><label for="search_firstname">First Name</label></div>
									<input type="text" name="first_name" id="search_firstname" value="<?php echo empty($userFilters['first_name'])? '':$userFilters['first_name']; ?>" />
								</td>
							</tr>
							<tr>
								<td>
									<div><label for="search_lastname">Last Name</label></div>
									<input type="text" name="last_name" id="search_lastname" value="<?php echo empty($userFilters['last_name'])? '':$userFilters['last_name']; ?>" />
								</td>
							</tr>
							<tr>
								<td>	
									<input name="status" id="search_status" type="checkbox" value="1" <?php echo empty($userFilters['status'])? '':'checked="checked"'; ?> />
									<label for="search_status">Active</label>
								</td>								
							</tr>
							<tr>
								<td colspan="2">
									<input type="hidden" name="action" value="search" />
									<input type="button" class='btn btn-warning' value="Search" title="Search" onclick="form.submit();" />
									<input type="button" class='btn' value="Reset" onclick="window.location = '?page=usermanager'" />
								</td>
							</tr>
						</table>
					</form>
				</fieldset>
			</div>

			<div class="message alert" id="message">
				<?php echo $message; ?>
			</div>

	</div>
	<div class="span9">
<?php
	if($action=="view") {
	// the view/edit form
?>
			<div class="user_edit">
				<fieldset>
					<legend>Edit User</legend>
					<form method="post" action="?page=usermanager&action=save" id="edit_user" name="editUser">
						<table>
							<tr>
								<td>
									<input name="status" id="status" type="checkbox" value="1" <?php echo ($userDetails['status'])? 'checked="checked"':''; ?> />
								</td>
								<td>
									<label for="status">Active</label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="first_name">First Name</label>
								</td>
								<td>
									<input type="text" name="first_name" id="first_name" value="<?php echo $userDetails['first_name'];?>" /><br/>
									<span id='editUser_first_name_errorloc' class='error'></span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="last_name">Last Name</label>
								</td>
								<td>
									<input type="text" name="last_name" id="last_name" value="<?php echo $userDetails['last_name'];?>" /><br/>
									<span id='editUser_last_name_errorloc' class='error'></span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="email">Email</label>
								</td>
								<td>
									<input type="text" name="email" id="email" value="<?php echo $userDetails['email'];?>" /><br/>
									<span id='editUser_email_errorloc' class='error'></span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="permission_group_fk">User Type</label>
								</td>
								<td>
									<select name="permission_group_fk" id="edit_usertype">
										<?php echo makeUserTypeDropdown($role->getAllRoles(),$userDetails['permission_group_fk']);?>
									</select><br/>
									<span id='editUser_permission_group_fk_errorloc' class='error'></span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="username">Username</label>
								</td>
								<td>
									<input type="text" name="username" id="username" value="<?php echo $userDetails['username'];?>" /><br/>
									<span id='editUser_username_errorloc' class='error'></span>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<span>Leave blank to keep existing password.</span>
								</td>
							</tr>
							<tr>
								<td>
									<label for="password">Password</label>
								</td>
								<td>
									<input type="password" name="password" id="password" /><br/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="confirmpassword">Confirm Password</label><br/>
								</td>
								<td>
									<input type="password" name="confirmpassword" id="confirmpassword" />
									<span id='editUser_confirmpassword_errorloc' class='error'></span>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="hidden" name="id" value="<?php echo $_GET['userid']; ?>" />
									<input type="submit" class='btn btn-primary' name="Submit" value="Save" />
									<input type="button" class='btn' value="Cancel" onclick="window.location = '?page=usermanager'" />
								</td>
							</tr>
						</table>
					</form>
					<script type='text/javascript'>
					//<![CDATA[
						var editFrmValidator  = new Validator("editUser");
						editFrmValidator.EnableOnPageErrorDisplay();
						editFrmValidator.EnableMsgsTogether();

						editFrmValidator.addValidation("first_name","req","Please provide your first name");
						editFrmValidator.addValidation("last_name","req","Please provide your last name");

						editFrmValidator.addValidation("email","req","Please provide your email address");
						editFrmValidator.addValidation("email","email","Please provide a valid email address");

						editFrmValidator.addValidation("permission_group_fk","dontselect=0","Please select a user role");

						editFrmValidator.addValidation("username","req","Please provide a user name");
						editFrmValidator.addValidation("confirmpassword","eqelmnt=password","Password does not match");
					//]]>
					</script>

				</fieldset>
			</div>
		<!--<div class="side_bar"><?php echo $allUsersSidebar; ?></div>-->
<?php
	}
	else {
	// the add form
?>
			<div id='createUserModal' class="modal hide">
				<div class="modal-header">
					<div class="pull-right"><a href="javascript:hideform('createUserModal','backgroundpopup');" title="Close">&times;</a></div>
					<h3>Add User</h3>
					<!--<small><div class='short_explanation required'>required fields</div></small>-->
				</div>
				
				<form id="update" name="update" action="?page=usermanager&action=save" method='post' accept-charset='UTF-8'>
					
				<div class="modal-body">
						<div id='server_errors' class='error'></div>
						<div class="row-fluid">
							<div class="span6">
						<div class=''>
							<label for='first_name' class="required">First Name: </label>
							<input type='text' name='first_name' id='first_name' value='' maxlength="50" /><br/>
							<span id='update_first_name_errorloc' class='error'></span>
						</div>

						<div class=''>
							<label for='last_name' class="required">Last Name: </label>
							<input type='text' name='last_name' id='last_name' value='' maxlength="50" /><br/>
							<span id='update_last_name_errorloc' class='error'></span>
						</div>

						<div class=''>
							<label for='email' class="required">Email: </label>
							<input type='text' name='email' id='email' value='' maxlength="50" /><br/>
							<span id='update_email_errorloc' class='error'></span>
						</div>

						<div class=''>
							<label for='role' class="required">User Role: </label>
							<select name="permission_group_fk" id="role">
								<?php echo makeUserTypeDropdown($role->getAllRoles());?>
							</select><br/>
							<span id='update_permission_group_fk_errorloc' class='error'></span>
						</div>
						
								
							</div>
							<div class="span6">

						<div class=''>
							<label for='username' class="required">Username: </label>
							<input type='text' name='username' id='username' value='' maxlength="50" /><br/>
							<span id='update_username_errorloc' class='error'></span>
						</div>

						<div class=''>
							<label for='password' class="required" >Password: </label>
							<input type='password' name='password' id='password' value='' maxlength="50" /><br/>
							<span id='update_password_errorloc' class='error'></span>
						</div>

						<div class=''>
							<label for='confirmpassword' class="required" >Confirm Password: </label>
							<input type='password' name='confirmpassword' id='confirmpassword' value='' maxlength="50" /><br/>
							<span id='update_confirmpassword_errorloc' class='error'></span>
						</div>
						
								
							</div>
						</div>
					</div>

				  <div class="modal-footer">
			    	<input type='submit' class="btn btn-primary" name='Submit' value='Save' />
					<input type="button" class="btn" value="Cancel" onclick="hideform('createUserModal','backgroundpopup');" />
				  </div>
				</form>
			</div>

			<script type='text/javascript'>
			//<![CDATA[
				var frmvalidator  = new Validator("update");
				frmvalidator.EnableOnPageErrorDisplay();
				frmvalidator.EnableMsgsTogether();

				frmvalidator.addValidation("first_name","req","Please provide your first name");
				frmvalidator.addValidation("last_name","req","Please provide your last name");

				frmvalidator.addValidation("email","req","Please provide your email address");
				frmvalidator.addValidation("email","email","Please provide a valid email address");

				frmvalidator.addValidation("permission_group_fk","dontselect=0","Please select a user role");

				frmvalidator.addValidation("username","req","Please provide a user name");
				frmvalidator.addValidation("password","req","Please provide a password");
				frmvalidator.addValidation("confirmpassword","req","Please confirm the password");
				frmvalidator.addValidation("confirmpassword","eqelmnt=password","Password does not match");
			//]]>
			</script>

			<div id='backgroundpopup'></div>
			<div class="user_lists"><?php echo $allUsersList; ?></div>
<?php
	}
?>
<?php
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
</div> <!--ROW-->