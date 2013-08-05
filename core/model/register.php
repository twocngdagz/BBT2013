<?php
	# FACEBOOK LOGIN ON THIRD PARTY
	if(empty($s['user_id'])) {
		$config = array(
			'appId' => '505061049524453',
			'secret' => 'af46f2c551692112e80750be4175170b'
		);
		
		# GET FACEBOOK PREFERENCE API
		$facebook 		= new Facebook($config);
		$fb_id	 		= $facebook->getUser();
		$params_logoff 	= array( 'next' => MCHN_ROOT.'logoff' );	
	  	$params_login 	= array(
		  'scope' => 
		  '
		  user_about_me, 
		  user_birthday, 
		  email,
		  user_education_history,
		  user_groups
		  user_photos, 
		  user_work_history,
		  read_friendlists,
		  publish_stream,
		  ',
		  'redirect_uri' => MCHN_ROOT.'register.asp'
		);
		
		# CHECK USER FACEBOOK SESSION
	    if($fb_id) {
	      try {
				$login_url 	  = "register";
		        $fb_dtl		  = $facebook->api('/me','GET');
			} catch(FacebookApiException $e) {
				$logoff 	  = NULL;
		        $login_url = $facebook->getLoginUrl($params_login); 
		        error_log($e->getType());
		        error_log($e->getMessage());
	      }   
	    } else {
		    $login_url  = $facebook->getLoginUrl($params_login);
	    }
	}
	
	# GET IMAGE FROM FACEBOOK PROFILE
	if(!empty($fb_dtl)) {
		$image_url = md5($fb_dtl["id"]).".jpg";
	} else {
		$image_url = NULL;
	}
	
	# REGISTRATION ACTION HERE
	if(isset($gp["submitRegister"])) {
				
		# RESTRICT USERNAME
		if(!html::restrictText( $gp['d']['username'] )) {
			html::alert("error", "Username should not contain special characters.", "Wrong Username Input");
		} elseif(!html::restrictText( $gp['d']['name'] )) {
			html::alert("error", "Your Name should not contain special characters.", "Wrong Name Input");
		} else {
			if(u::unique( $gp['d']['email'], $gp['d']['username'] )) {
				$s['work'] = $fb_dtl['work'];
				
				# SAVE IMAGE/AVATAR
				html::imageSave('https://graph.facebook.com/'.$fb_dtl["id"].'/picture?type=square',$fb_dtl["id"]);
				
				# INSERT USER DETAILS
				u::insertUser($gp['d']['email'], $gp['d']['name'], $gp['d']['firstname'], $gp['d']['lastname'], $gp['d']['username'], $gp['d']['password'], $gp['d']['fb_id'], $gp['d']['avatar']);
				
				# GET USER INSERTED
				$user_id = u::getUserId($gp['d']['email'], $gp['d']['username']);
				
				# INSERT USER PREFERENCE AS LOOKUP
				foreach($fb_dtl['education'] as $r => $d) {
					u::insertUserLkp($user_id, $gp['d']['school'], $d['year']['name']);
				}
				
				# INSERT WORK EXPERIENCE
				foreach($fb_dtl['work'] as $r => $d) {
					fs::insertFieldset($user_id, $d['position']['name'], $d['employer']['name'], $d['start_date'], 1);
				}
				
				# LOGIN NATIVE USER
				u::login($gp['d']['username'], $gp['d']['password']);
				
			} else {
				html::alert("error", "User already exists or username has already been taken. Please select another one.", "User Exists");
			}
		}
		
	}
	
?>