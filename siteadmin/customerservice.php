<?php

	$currentUrl = explode('/', $_SERVER['REQUEST_URI']);
	$currentFile = explode('\\', __FILE__);

	if(!strcasecmp(end($currentUrl), end($currentFile)))
		{
		header('Location:./');
	}

	echo 'customer service here<br/>';

	if($role->getRole()!=4)
	{
	echo 'customer service Level 2 here';
	}

?>