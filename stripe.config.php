<?php
	/**
	* @author abz dmachinist
	* 
	* Configuration for Stripe Keys
	* Please see index on configuration first.
	* Includes in Checkout.php
	*/

	// Include API.
	$stripeLibraryUrl = MCHN_DIR_3RDPARTY . 'stripe/StripeCom.php';
	require 'assets/third-party/stripe/StripeCom.php';

	// Host main from server.
	$host 		= $_SERVER['HTTP_HOST'];

	// Exceptions and commands.
	$error 		= FALSE;
	$success 	= FALSE;

	// Test Stripe Host and Keys.
	$testHost 	= array ('localhost', 'bbt2013.alorit.com');

	// OLD KEYS
	// $testSecretKey 		= 'sk_test_SqObgWhWJjCtLLqEyjs03B2h';
	// $testPublishableKey 	= 'pk_test_yoAhmaqZ6mAsLptANPJ3wLVd';

	$testSecretKey 		= 'sk_test_3IUTrod453FxF4adAxbyd7hv';
	$testPublishableKey = 'pk_test_jfn5AX6HiJe6BEc43eIZupqO';

	// Live Stripe Host and Keys.
	$liveHost 	= array ('www.babybeddingtown.com', 'www.babybeddingtown.com');

	// $liveSecretKey 		= 'sk_live_eoIbp671rGoFCiR8ZrckfwKH';
	// $livePublishableKey 	= 'pk_live_vHAnsjJ4tF1yy9MlXbrfNLfs';	

	$liveSecretKey 		= '';
	$livePublishableKey = '';		

	// Check Details for new configuration from host.
	if( !empty($host) && in_array($host, $testHost) ) 
	{
		$secretKey 		= $testSecretKey;
		$publishableKey = $testPublishableKey;		
	}
	else if( !empty($host) && in_array($host, $testHost) ) 
	{
		$secretKey 		= $liveSecretKey;
		$publishableKey = $livePublishableKey;		
	}

?>