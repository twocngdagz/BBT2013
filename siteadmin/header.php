<?php
	// list of pages
	// index is the order number which will determine which goes first
	// 'url' is the filename,
	// 'text' is the link text
	$pagesList = array(
		0=>array('url'=>'dashboard','text'=>'Dashboard'),
		1=>array('url'=>'usermanager','text'=>'User Manager'),
		2=>array('url'=>'vendormanager','text'=>'Vendor Manager'),
		3=>array('url'=>'brandmanager','text'=>'Brand Manager'),
		4=>array('url'=>'customerservice','text'=>'Customer Service')
	);

	// list of pages for each role
	// index is the role id
	// array contents are the pages that this role can view
	$rolePageGroups = array(
		1=>array(0,1,2,3,4), // admin
		2=>array(0,2,3,4), // manager
		3=>array(0,2,3,4), // cs l2
		4=>array(0,3,4), // cs
		5=>array(0) // user
	);

	$pageTitle = '';

	foreach($pagesList as $key)
	{
		if($key['url'] == $transaction['page'])
		{
			$pageTitle = $key['text'];
		}
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>BBT2013 | <?php echo $pageTitle;?></title>
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../css/flexigrid.pack.css">
	<link rel="stylesheet" type="text/css" href="../css/forms.css">
	<link rel="stylesheet" type="text/css" href="../css/gngnm.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/flexigrid.js"></script>
	<script type='text/javascript' src='../js/gen_validatorv4.js'></script>
	<script type='text/javascript' src='../js/moveable_popup.js'></script>

</head>
<?php
	// list of pages having flexgrid tables
	$managingPages = array(
		"usermanager",
		"vendormanager",
		"brandmanager"
	);

	if(in_array($transaction['page'], $managingPages) && (isset($transaction['action']) && $transaction['action']!='view'))
	{
		echo '<body onload="javascript:hideform(\'formContainer\',\'backgroundpopup\');">';
	}
	else
	{
		echo '<body>';
	}
?>
<div class="container">
	<br/>
	<div class="navbar">
      <div class="navbar-inner">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Admin</a>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <div class="nav-collapse collapse">
          <ul class="nav">
			<?php
				$userRole = $role->getRole();			
				foreach($rolePageGroups[$userRole] as $pageIndex) {
					$menu = $pagesList[$pageIndex];
					echo '<li><a href="?page=' . $menu['url'] . '">' . $menu['text'] . '</a></li>';
				}
			?>
			<li><a href="login.php?session=logout">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div>
    <!--
	<div class="NavMenu">
		<ul>
			<?php
				$userRole = $role->getRole();			
				foreach($rolePageGroups[$userRole] as $pageIndex) {
					$menu = $pagesList[$pageIndex];
					echo '<li><a href="?page=' . $menu['url'] . '">' . $menu['text'] . '</a></li>';
				}
			?>

			<li><a href="login.php?session=logout">Log Out</a></li>
		</ul>
	</div>
	-->