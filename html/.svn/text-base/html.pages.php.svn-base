<?php
	if(!empty($_REQUEST['p1'])):
		$page = $_REQUEST['p1'];
		switch($page):
			
				# MAIN PAGES
				case 'users':
					users::isLoggedIn();
					include (CNTRLR . 'users.php');
				break;
				
				case 'vendors':
					users::isLoggedIn();
					include (CNTRLR . 'vendors.php');
				break;
				
				case 'brands':
					users::isLoggedIn();
					include (CNTRLR . 'brands.php');
				break;	
				
				case 'category':
					users::isLoggedIn();
					include (CNTRLR . 'category.php');
				break;	
				
				case 'products':
					users::isLoggedIn();
					include (CNTRLR . 'products.php');
				break;
				
				case 'orders':
					users::isLoggedIn();
					include (CNTRLR . 'orders.php');
				break;

				case 'customers':
					users::isLoggedIn();
					include (CNTRLR . 'customers.php');
				break;

				case 'product_options':
					users::isLoggedIn();
					include (CNTRLR . 'product_options.php');
				break;		
						
				case 'dashboard':
					users::isLoggedIn();
					include (CNTRLR . 'dashboard.php');
				break;
				
				case 'login':
					include (CNTRLR . 'login.php');
				break;
				
				case 'register':
					include (CNTRLR . 'register.php');
				break;
				
				case 'image':
					include (VW . 'image.php');
				break;
		endswitch;
	else:
		include (VW . 'home.php');
	endif;
?>