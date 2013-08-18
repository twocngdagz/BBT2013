<?php
	ini_set('display_errors', 'On');
	ini_set('output_buffering', 32768);
	error_reporting(E_ALL);
	echo ini_get('output_buffering');
	include('mchn.config.php');
	include('main.php');
?>