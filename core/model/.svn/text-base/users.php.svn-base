<?php
if(isset($gp["button"])) {
	if(!html::restrictText($gp['d']['username'])) {
		html::alert("error", "Username should not contain special characters.", "Wrong Username Input");
	} elseif(!html::restrictText( $gp['d']['first_name'] )) {
		html::alert("error", "Your Name should not contain special characters.", "Wrong Name Input");
	} elseif($gp['d']['password'] != $gp['d']['password2']) {
		html::alert("error", "Your password didn't match, please try again.", "Miss Match Password Input");
	} else {				
			switch($gp['d']['axn']):
				case 'create':
					if(u::unique( $gp['d']['email'], $gp['d']['username'] )) {	
						u::insertUser($gp['d']['email'], $gp['d']['first_name'], $gp['d']['last_name'], $gp['d']['username'], $gp['d']['password'], $gp['d']['role']);
						html::alert("success", "Successfully Added new user", "User Created");	
					} else {
						html::alert("error", "User already exists or username has already been taken. Please select another one.", "User Exists");
					}
				break;
				
				case 'update':
					u::updateUser($gp['d']['user_id'], $gp['d']['email'], $gp['d']['first_name'], $gp['d']['last_name'], $gp['d']['username'], $gp['d']['password'], $gp['d']['role']);
					html::alert("success", "Successfully Updated user", "User Updated");	
				break;
			endswitch;
	}
} else if(isset($gp["delete"])) {
	if(strtolower($gp['delete']) == "delete") {
		u::deleteUser($gp['d']['user_id']);
	}
}
?>