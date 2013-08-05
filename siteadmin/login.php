<?php

	require('../inc/loader.php');

	$user = new User;

	$errorMessages = '';
	$failed = FALSE;

	if(isset($_GET['session'])&&($_GET['session']=='expired'||$_GET['session']=='logout')){
		$user->unSetCookies();
		header('Location:./');
	}

	if(isset($_POST['login']))
	{
		$data = $_POST;
		$userDetails = $user->verifyCredentials($data);

		if(!empty($userDetails['id']))
		{
			$user->setCookies($userDetails);
			header('Location:index.php');
		}
		else{
			$errorMessages = 'Login Failed';
			$failed= TRUE;
		}
	}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>BBT2013 | Login</title>
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/prototype.js"></script>
		<script type="text/javascript" src="../js/flexigrid.js"></script>
	</head>
	<body>
		<div class="MainContents">
			<div class="errorMessages"><p><?php echo $errorMessages; ?></p></div>
			<div class="contents">
				<h1>Login</h1>
				<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
					<fieldset>
						<legend>User Creadentials</legend>
						<p class="formInput">
							<label for="username">
							<input id="username" name="username" type="text" value="<?php ($failed)?$_POST['username']:'Username';?>" />
						</p>
						<p class="formInput">
							<label for="password">
							<input id="password" name="password" type="password" value="<?php ($failed)?$_POST['password']:'Password';?>" />
						</p>
						<p class="formButton">
							<input id="login" name="login" type="submit" value="Login" />
						</p>
					</fieldset>
				</form>
			</div>
		</div>
<?php

	include dirname(__FILE__) . '/footer.php';

?>
