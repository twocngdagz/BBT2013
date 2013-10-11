<?php
if(isset($gp["button"])) {
	if($gp['d']['axn'] == "update")  {
		checkout::updateOrderStatus($gp['d']['status'],$gp['d']['shippingmethod'],$gp['d']['shippingdate'],$gp['d']['trackingnumber'],$gp['d']['comment'], $gp['d']['product_id']);
	}
}