<!--
<?php

	$currentUrl = explode('/', $_SERVER['REQUEST_URI']);
	$currentFile = explode('\\', __FILE__);

	if(!strcasecmp(end($currentUrl), end($currentFile)))
	{
		header('Location:./');
	}

    $action ="";
    $message ="";

	$brand = new Brand();
	$file = new File();

	if(isset($transaction['action']))
    {
        $action = $transaction['action'];

        switch ($action)
        {
            case 'search':
                            $brandFilters = $_POST;
                            $result = $brand->searchBrand($brandFilters);
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
                            $brandInfo = $brand->getDetailsById($transaction['brandid']);
                            $brandDetails = $brandInfo[0];
                            $result = $brand->getAllBrands();
                            $message = 'Click "Save" to update brand or "Cancel" to close the form.';
                            break;
            case 'save':
                            $brandDetails = $_POST;

							$imageHolders = array (
								'image_thumbnail' => 'old_image_thumbnail',
								'image_small' => 'old_image_small',
								'image_large' => 'old_image_large'
							);
							foreach ($imageHolders as $new => $old) {
								if(!empty($_FILES[$new]))
								{
							  		if (!empty($brandDetails[$old]))
									{
										$imageFile = $file->processImage($_FILES[$new], 'brand', $brandDetails[$old]);
									}
									else
									{
										$imageFile = $file->processImage($_FILES[$new], 'brand');
									}

									if (empty($imageFile[1]))
									{
										$brandDetails[$new] = $imageFile[0];
									}
									else
									{
									  $imageError = $imageFile[1];
									}
								}
							}


							if(empty($brandDetails['url']))
							{
								$url = strtolower($brandDetails['name_short']);
							}
							else
							{
								$url = strtolower($brandDetails['url']);
							}
							$replace = array( "`", "~", "!", "@", "#", '$', "%", "^", "&", "*", "(", ")", "_", "=", "+", "{/", "}", "[", "]", "\\", "|", ":", ";", '"', "'", ",", "<", ".", ">", "/", "?");
							
							$newUrl = str_replace($replace,"",$url);
							$url = str_replace(' ',"-",$newUrl);
							$brandDetails['url'] = $url;

							$isUpdate = FALSE;
							if(!empty($brandDetails['id']))
							{
								$isUpdate = TRUE;
							}
							if (empty($imageError))
							{
								$flag = settype($brand->updateBrand($brandDetails),'string');
								$name = ucfirst($brandDetails['name_short']);
								if ($flag)
								{
									$message = "Brand ". $name . " was successfully " . ($isUpdate?"updated.":"inserted.");
									unset($brandDetails);
								}
								else
								{
									$message = "Brand ". $name . " was not " . ($isUpdate?"updated.":"inserted.") . " ({$flag}).";
								}
							}
							else
							{
								$message = "Brand ". $name . " was not " . ($isUpdate?"updated.":"inserted.") . " ({$imageError}).";
							}
							$result = $brand->getAllBrands();
                            break;
            case 'delete':
                            $brandInfo = $brand->getDetailsById($transaction['brandid']);
                            $name = ucfirst($brandInfo['name_short']);
                            $flag = $brand->deleteBrand($transaction['brandid']);
                            if ($flag==TRUE)
                            {
                                $message = "Brand ". $name ." successfully deleted.";
                            }
                            else
                            {
                                $message = "Brand ". $name ." was not deleted ({$flag}).";
                            }
                            $result = $brand->getAllBrands();
                            break;
        }
    }
    else
    {
        $result = $brand->getAllBrands();
    }

    function makeBrandTable($list)
    {
		global $role;

        $result = "
		<table id='brands_15'>
			<tbody>";
		if(!empty($list['id']))
		{
			$name = $list['name_short'];
			$result = "
				<tr>
					<td><a href='?page=brandmanager&action=view&amp;brandid={$list['id']}' title='View'>{$name}</a></td>
					<td>{$list['description_short']}</td>
					<td>
						<button onclick='window.location=\"?page=brandmanager&action=view&amp;brandid={$list['id']}\"'>EDIT</button>
						<button onclick='confirmation({$list['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
		}
		else
		{
			foreach ($list as $key => $value) {
				$name = $value['name_short'];
				$result .= "
				<tr>
					<td><a href='?page=brandmanager&action=view&amp;brandid={$value['id']}' title='View'>{$name}</a></td>
					<td>{$value['description_short']}</td>
					<td>
						<button onclick='window.location=\"?page=brandmanager&action=view&amp;brandid={$value['id']}\"'>EDIT</button>
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
				$("#brands_15").flexigrid({
					colModel : [
						{display: "Name", name: "name_short", width : 300, sortable : true, align: "left"},
						{display: "Description", name: "description_short", width : 500, align: "left"},
						{display: "Action", width : 120, align: "center"}
					],
					buttons : [
						{name: "Add", bclass: "add", onpress : addBrandForm, align : "right"}
					],

					title: "Brands",
					showTableToggleBtn: true,
					height: 200
				});
			});
		//]]>
		</script>';
        return $result;
    }

    function makeBrandSidebar($list)
    {
        global $role;

		$result = "
		<table id='brands_side'>
			<tbody>";
		if(!empty($list['id']))
		{
			$roleName = $role->getRoleName($list['permission_group_fk']);
			$name = $list['name_short'];
			$result = "
				<tr>
					<td><a href='?page=brandmanager&action=view&amp;brandid={$list['id']}' title='View'>{$name}</a></td>
					<td>
						<button onclick='window.location=\"?page=brandmanager&action=view&amp;brandid={$list['id']}\"'>EDIT</button>
						<button onclick='confirmation({$list['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
		}
		else
		{
	        foreach ($list as $key => $value) {
				$name = $value['name_short'];
				$result .= "
				<tr>
					<td><a href='?page=brandmanager&action=view&amp;brandid={$value['id']}' title='View'>{$name}</a></td>
					<td>
						<button onclick='window.location=\"?page=brandmanager&action=view&amp;brandid={$value['id']}\"'>EDIT</button>
						<button onclick='confirmation({$value['id']},\"{$name}\");'>DELETE</button>
					</td>
				</tr>\n";
			}
		}
        $result .= "</table>\n";
        $result .= '<script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function($) {
			$("#brands_side").flexigrid({
				colModel : [
					{display: "Name", name: "name_short", width : 154, sortable : true, align: "left"},
					{display: "Action", width : 120, align: "center"}
				],
				sortname: "name_short",
				sortorder: "asc",
				title: "Brands",
				showTableToggleBtn: true,
				width: 300
			});
		});
		//]]>
		</script>';
        return $result;
    }

    $allBrandsList = makeBrandTable($result);
    $allBrandsSidebar = makeBrandSidebar($result);

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

				function confirmation(brandid,brandname) {
					var answer = confirm("Are you sure you want to delete "+brandname+"?")
					if (answer){
						window.location = "?page=brandmanager&action=delete&brandid="+brandid;
					}
				}

				function addBrandForm() {
					popup_form("formContainer","form_InnerContainer","backgroundpopup");
				}
			//]]>
			</script>
                <div class="brand_search">
					<fieldset>
						<legend>Search Brand</legend>
						<form method="post" action="?page=brandmanager&action=search">
							<table>
								<tr>
									<td>
										<label for="search_name">Name</label>
									</td>
									<td>
										<input type="text" name="name" id="search_name" value="<?php echo empty($brandFilters['name'])? '':$brandFilters['name']; ?>" />
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="hidden" name="action" value="search" />
										<input type="button" value="Search" title="Search" onclick="form.submit();" />
										<input type="button" value="Reset" onclick="window.location = '?page=brandmanager'" />
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
                <div class="brand_edit">
                    <fieldset>
						<legend>Edit Brand</legend>
						<form method="post" action="?page=brandmanager&action=save" id="edit_brand" name="editBrand" enctype="multipart/form-data">
							<table>
								<tr>
									<td colspan="2">
										<h3>Name</h3>
									</td>
								</tr>
								<tr>
									<td>
										<label for="name_short">Short:</label>
									</td>
									<td>
										<input type="text" name="name_short" id="name_short" value="<?php echo $brandDetails['name_short'];?>" /><br/>
										<span id='editBrand_name_short_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="name_long">Long:</label>
									</td>
									<td>
										<input type="text" name="name_long" id="name_long" value="<?php echo $brandDetails['name_long'];?>" /><br/>
										<span id='editBrand_name_long_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<h3>Description</h3>
									</td>
								</tr>
								<tr>
									<td>
										<label for="description_short">Short:</label>
									</td>
									<td>
										<input type="text" name="description_short" id="description_short" value="<?php echo $brandDetails['description_short'];?>" /><br/>
										<span id='editBrand_description_short_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="description_long">Long:</label>
									</td>
									<td>
										<textarea name="description_long" id="description_long" cols="50" rows="10" ><?php echo $brandDetails['description_long'];?></textarea><br/>
										<span id='editBrand_description_long_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<h3>Images</h3>
									</td>
								</tr>
								<tr>
									<td>
										<label for="image_thumbnail">Thumbnail:</label>
										<input type="hidden" name="old_image_thumbnail" id="old_image_thumbnail" value="<?php echo $brandDetails['image_thumbnail'];?>" /><br/>
									</td>
									<td>
										<?php
											if(empty($brandDetails['image_thumbnail']))
											{
											  echo '<span>No image</span><br/>';
											}
											else{
										?>

										<span><?php echo $brandDetails['image_thumbnail'];?></span><br/>
										<img width="165px" src="../images/brand/<?php echo $brandDetails['image_thumbnail'];?>" /><br />
										<?php
											}
										?>
										<input type="file" name="image_thumbnail" id="image_thumbnail" /><br/>
										<small>Note: valid extensions "jpg", "jpeg", "gif", "png"</small><br/>
										<span id='editBrand_image_thumbnail_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="image_small">Small:</label>
										<input type="hidden" name="old_image_small" id="old_image_small" value="<?php echo $brandDetails['image_small'];?>" /><br/>
									</td>
									<td>
										<?php
											if(empty($brandDetails['image_small']))
											{
											  echo '<span>No image</span><br/>';
											}
											else{
										?>

										<span><?php echo $brandDetails['image_small'];?></span><br/>
										<img width="165px" src="../images/brand/<?php echo $brandDetails['image_small'];?>" /><br />
										<?php
											}
										?>
										<input type="file" name="image_small" id="image_small" /><br/>
										<small>Note: valid extensions "jpg", "jpeg", "gif", "png"</small><br/>
										<span id='editBrand_image_small_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td>
										<label for="image_large">Large:</label>
										<input type="hidden" name="oldimage_large" id="old_image_large" value="<?php echo $brandDetails['image_large'];?>" /><br/>
									</td>
									<td>
										<?php
											if(empty($brandDetails['image_large']))
											{
											  echo '<span>No image</span><br/>';
											}
											else{
										?>

										<span><?php echo $brandDetails['image_large'];?></span><br/>
										<img width="165px" src="../images/brand/<?php echo $brandDetails['image_large'];?>" /><br />
										<?php
											}
										?>
										<input type="file" name="image_large" id="image_large" /><br/>
										<small>Note: valid extensions "jpg", "jpeg", "gif", "png"</small><br/>
										<span id='editBrand_image_large_errorloc' class='error'></span>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<input type="hidden" name="id" value="<?php echo $_GET['brandid']; ?>" />
										<input type="submit" name="Submit" value="Save" />
										<input type="button" value="Cancel" onclick="window.location = '?page=brandmanager'" />
									</td>
								</tr>
								<tr>
									<td>
										<label for="URL">URL:</label>
									</td>
									<td>
										<input type="text" name="url" id="url" value="<?php echo $brandDetails['url'];?>" /><br/>
										<span id='editBrand_url_errorloc' class='error'></span>
									</td>
								</tr>
							</table>
						</form>
						<script type='text/javascript'>
						//<![CDATA[
							var editFrmValidator  = new Validator("editBrand");
							editFrmValidator.EnableOnPageErrorDisplay();
							editFrmValidator.EnableMsgsTogether();

							editFrmValidator.addValidation("name_short","req","Please provide a short name");
							editFrmValidator.addValidation("description_short","req","Please provide short description");
						//]]>
						</script>

					</fieldset>
                </div>
            </div>
            <div class="side_bar"><?php echo $allBrandsSidebar; ?></div>
<?php
		}
		else
		{
?>
				<div id='formContainer'>
					<div id="container_header">
						<div id="box_Title">Add Brand</div>
						<div id="box_Close"><a href="javascript:hideform('formContainer','backgroundpopup');" title="Close">[X]</a></div>
					</div>

					<div id="form_InnerContainer">
						<form id="update" name="update" action="?page=brandmanager&action=save" method='post' accept-charset='UTF-8' enctype="multipart/form-data">

							<div class='short_explanation required'>required fields</div>
							<div id='server_errors' class='error'></div>

							<div class='container'>
								<label for='name_short' class="required">Name (short): </label>
								<input type='text' name='name_short' id='name_short' value='<?php if(!empty($brandDetails)) { echo $brandDetails['name_short'];} ?>' maxlength="50" /><br/>
								<span id='update_name_short_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='name_long'>Name (long): </label>
								<input type='text' name='name_long' id='name_long' value='<?php if(!empty($brandDetails)) { echo $brandDetails['name_long'];} ?>' maxlength="50" /><br/>
								<span id='update_name_long_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='description_short' class="required">Description (short): </label>
								<input type='text' name='description_short' id='description_short' value='<?php if(!empty($brandDetails)) { echo $brandDetails['description_short']; } ?>' maxlength="50" /><br/>
								<span id='update_description_short_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='description_long'>Description (long): </label>
								<textarea name='description_long' cols="50" rows="10" id='description_long'><?php if(!empty($brandDetails)) { echo $brandDetails['description_long']; } ?></textarea><br/>
								<span id='update_description_long_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='image_thumbnail'>Image (thumbnail): </label>
								<input type='file' name='image_thumbnail' id='image_thumbnail' value='' maxlength="50" /><br/>
								<span id='update_image_thumbnail_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='image_small'>Image (small): </label>
								<input type='file' name='image_small' id='image_small' value='' maxlength="50" /><br/>
								<span id='update_image_small_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='image_large'>Image (large): </label>
								<input type='file' name='image_large' id='image_large' value='' maxlength="50" /><br/>
								<span id='update_image_large_errorloc' class='error'></span>
							</div>

							<div class='container'>
								<label for='url' >URL: </label>
								<input type='text' name='url' id='url' value='<?php if(!empty($brandDetails)) { echo $brandDetails['url']; } ?>' maxlength="50" /><br/>
								<span id='update_url_errorloc' class='error'></span>
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

					frmvalidator.addValidation("name_short","req","Please provide a short name");
					frmvalidator.addValidation("description_short","req","Please provide a short description");
				//]]>
				</script>

				<div id='backgroundpopup'></div>
                <div class="brand_lists"><?php echo $allBrandsList; ?></div>
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