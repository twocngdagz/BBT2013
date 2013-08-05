<?php
if(!empty($gp['p2']) && empty($gp['p3'])) {
	$list_id 	= $gp['p2'];	
	$clist 		= cmp::companyList($s['user_id'], $list_id);
} elseif(!empty($gp['p2']) && !empty($gp['p3'])) {
	$lead_id 	= $gp['p3'];	
	$clist 		= cmp::company($s['user_id'], $lead_id);
} else {
	$clist 		= cmp::companyList($s['user_id'], NULL);
}
?>