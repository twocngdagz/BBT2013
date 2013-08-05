<?php

require_once('../inc/Loader.php');

$user = new User;
if($user->loginCheck())
{
	echo 'You have logged in';
}
?>
