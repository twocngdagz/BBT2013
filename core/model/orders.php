<?php
if(isset($gp["button"])) {
	if($gp['d']['axn'] == "update")  {
		checkout::updateOrderStatus($gp['d']['status'], $gp['d']['product_id']);
	}
}