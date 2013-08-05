<?php
if(isset($gp["button"])) {
	# RESTRICT USERNAME
	if(!html::restrictText($gp['d']['name'])) {
		html::alert("error", "Name should not contain special characters.", "Wrong Username Input");
	} else {		
			switch($gp['d']['axn']):
				case 'create':
					vendors::insertVendors( $s['user_id'], 
											$gp['d']['vendor_id'],
											$gp['d']['name'],  
											$gp['d']['email'], 
											$gp['d']['street'], 
											$gp['d']['city'], 
											$gp['d']['state'],
											$gp['d']['zip'],
											$gp['d']['country'],
											$gp['d']['phone'],
											$gp['d']['phone_mobile'], 
											$gp['d']['phone_fax'], 
											$gp['d']['notes'], 
											$gp['d']['first_name'], 
											$gp['d']['last_name'], 
											$gp['d']['url'], 
											$gp['d']['email_personal']);
										
					html::alert("success", "Successfully Added new user", "User Created");	
				break;
				
				case 'update':
					vendors::updateVendors( $gp['d']['vendor_id'], 
											$gp['d']['name'],  
											$gp['d']['email'], 
											$gp['d']['street'], 
											$gp['d']['city'], 
											$gp['d']['state'],
											$gp['d']['zip'],
											$gp['d']['country'],
											$gp['d']['phone'],
											$gp['d']['phone_mobile'], 
											$gp['d']['phone_fax'], 
											$gp['d']['notes'], 
											$gp['d']['status'], 
											$gp['d']['first_name'], 
											$gp['d']['last_name'], 
											$gp['d']['url'], 
											$gp['d']['email_personal']);
					html::alert("success", "Successfully Updated Vendor", "Vendor Updated");	
				break;
			endswitch;
		
	}
} else if(isset($gp["delete"])) {
	if(strtolower($gp['delete']) == "delete") {
		vendors::deleteVendors($gp['d']['vendor_id']);
	}
}

	// State list
	$options['state'][''] = 'Select State';
	$options['state']['AL'] = 'Alabama';
	$options['state']['AK'] = 'Alaska';
	$options['state']['AZ'] = 'Arizona';
	$options['state']['AR'] = 'Arkansas';
	$options['state']['CA'] = 'California';
	$options['state']['CO'] = 'Colorado';
	$options['state']['CT'] = 'Connecticut';
	$options['state']['DE'] = 'Delaware';
	$options['state']['DC'] = 'District of Columbia';
	$options['state']['FL'] = 'Florida';
	$options['state']['GA'] = 'Georgia';
	$options['state']['HI'] = 'Hawaii';
	$options['state']['ID'] = 'Idaho';
	$options['state']['IL'] = 'Illinois';
	$options['state']['IN'] = 'Indiana';
	$options['state']['IA'] = 'Iowa';
	$options['state']['KS'] = 'Kansas';
	$options['state']['KY'] = 'Kentucky';
	$options['state']['LA'] = 'Louisiana';
	$options['state']['ME'] = 'Maine';
	$options['state']['MD'] = 'Maryland';
	$options['state']['MA'] = 'Massachusetts';
	$options['state']['MI'] = 'Michigan';
	$options['state']['MN'] = 'Minnesota';
	$options['state']['MS'] = 'Mississippi';
	$options['state']['MO'] = 'Missouri';
	$options['state']['MT'] = 'Montana';
	$options['state']['NE'] = 'Nebraska';
	$options['state']['NV'] = 'Nevada';
	$options['state']['NH'] = 'New Hampshire';
	$options['state']['NJ'] = 'New Jersey';
	$options['state']['NM'] = 'New Mexico';
	$options['state']['NY'] = 'New York';
	$options['state']['NC'] = 'North Carolina';
	$options['state']['ND'] = 'North Dakota';
	$options['state']['OH'] = 'Ohio';
	$options['state']['OK'] = 'Oklahoma';
	$options['state']['OR'] = 'Oregon';
	$options['state']['PA'] = 'Pennsylvania';
	$options['state']['RI'] = 'Rhode Island';
	$options['state']['SC'] = 'South Carolina';
	$options['state']['SD'] = 'South Dakota';
	$options['state']['TN'] = 'Tennessee';
	$options['state']['TX'] = 'Texas';
	$options['state']['UT'] = 'Utah';
	$options['state']['VT'] = 'Vermont';
	$options['state']['VA'] = 'Virginia';
	$options['state']['WA'] = 'Washington';
	$options['state']['WV'] = 'West Virginia';
	$options['state']['WI'] = 'Wisconsin';
	$options['state']['WY'] = 'Wyoming';
	
?>