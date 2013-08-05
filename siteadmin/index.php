<?php
	/*
	 * Rewritten By Abz Kanda
	 * CodeReliable Programmer
	 * January 24, 2013
	 */
	
	require('../inc/loader.php');

	$user = new User;
	$role = new UserPermissions;

	//Check user is logged in
	if($user->loginCheck()){
		$transaction = $_GET;

		if(!isset($transaction['page'])){
			$transaction['page'] = 'dashboard';
		}
		include dirname(__FILE__) . '/header.php';
?>
		<div class="MainContents">
			<div class="contents">
				<div class="well">
				<h3><?php echo $pageTitle; ?></h3><hr/>
					<?php
						if($transaction['page'] != 'dashboard'){
							include dirname(__FILE__) . '/'. $transaction['page'].'.php';
						}
					?>
				</div>
			</div>
		</div>
<?php
	} include dirname(__FILE__) . '/footer.php';
?>
