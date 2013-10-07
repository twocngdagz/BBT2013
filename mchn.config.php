	<?php
		/**
		 * 
		 * February 15, 2013
		 * @author abz dmachinist
		 * 
		 * When Deploying please see @property in define
		 * Please locate root on repository and HTACCESS.
		 * 
		 * Do not use QUIRKS MODE in CSS.
		 * 
		 * Get new API/CLASS new directory on NEW LIB inc/classes
		 */

		
		if(!isset($_SERVER['HTTP_HOST'])){
			define("MCHN_ROOT", "http://localhost/BBT2013/");
			define("MCHN_DIR_ROOT", "C:/wamp/www/BBT2013/");
			//define("MCHN_DIR_ROOT", "/xampp/htdocs/BBT2013/");
		}else{
			# GET ROOT DOUCMENTS & DIRECTORIES
			$host = $_SERVER['HTTP_HOST'];	
			if ($host == "localhost") {
				define("MCHN_ROOT", "http://localhost/BBT2013/");
				define("MCHN_DIR_ROOT", "C:/wamp/www/BBT2013/");
				//define("MCHN_DIR_ROOT", "/xampp/htdocs/BBT2013/");
			} else {
				if ($host == 'www.babybeddingtown.com') {
					define("MCHN_ROOT", "http://www.babybeddingtown.com/");
					define("MCHN_DIR_ROOT", "/usr/www/virtual/alon/www.babybeddingtown.com/");
				} else {
					if ($host == "bbt2013.alorit.com") {
						define("MCHN_ROOT", "http://bbt2013.alorit.com/");
						define("MCHN_DIR_ROOT", "/home/bbt2013a/public_html/");
					} else {
						define("MCHN_ROOT", "http://dev.babybeddingtown.com/");
						define("MCHN_DIR_ROOT", "/usr/www/virtual/alon/dev.babybeddingtown.com/");
					}
				}
			}
		}	
		define("MCHN_DIR_CORE", MCHN_DIR_ROOT ."core/");
		define("CNTRLR", MCHN_DIR_CORE ."controller/");
		define("MDL", MCHN_DIR_CORE ."model/");
		define("VW", MCHN_DIR_CORE ."view/");
		define("QCK", MCHN_DIR_CORE ."quicks/");
		define("AFF", MCHN_DIR_ROOT."affiliates/");
			
		define("MCHN_DIR_HTML", MCHN_DIR_ROOT ."html/");
		
		# OLD LIBRARY
		# define("MCHN_DIR_LIB", MCHN_DIR_ROOT ."lib/");
		
		# NEW LIBRARY
		define("MCHN_DIR_LIB", MCHN_DIR_ROOT ."inc/classes/");
		
		# GET ALL ASSETS
		define("MCHN_DIR_ASSETS", MCHN_ROOT ."assets/");
		define("MCHN_DIR_3RDPARTY", MCHN_DIR_ASSETS ."third-party/");
		
		# START SESSION
		header("Cache-Control: no-cache, must-revalidate");
		# header("Expires: Thu, 02 Nov 2005 00:00:01 GMT");
		session_start();
		date_default_timezone_set("UTC");
		
		# NO NEED TO INCLUDE LIBS
		if(!function_exists("__autoload")){
			function __autoload($classname){
				if($classname != "") {
					$class_path = MCHN_DIR_LIB . strtolower($classname).".php";
					if(!file_exists($class_path)) trigger_error("Class $classname is not available " . MCHN_DIR_LIB, E_USER_ERROR);
					require($class_path);
				}
			}
		}
		
		# SET ALIAS
		if (!function_exists('class_alias')) {
		    function class_alias($original, $alias) {
		        eval('abstract class ' . $alias . ' extends ' . $original . ' {}');
		    }
		}
		
		class_alias('database', 'db');
		class_alias('users', 'u');
		
		# GET POST SESSION
		$gp = $_REQUEST;
		$s  = $_SESSION;
		$c  = $_COOKIE;	
		
		# GET DATABASE CONNECTION
		db::conc();
		
		$main_nav = array(
					"Post" => "post",
					"Home" => "home"
					);
					
		if(!empty($_REQUEST["p1"])) {
			if($_REQUEST["p1"] == "logout") {
				session_destroy();
				html::redirect('login');
			}		
		}
	?>