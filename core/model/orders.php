<?php
include_once('mchn.config.php');
include_once('stripe.config.php');

if(isset($gp["button"])) {
	if($gp['d']['axn'] == "update")  {
		checkout::updateOrderStatus($gp['d']['status'],$gp['d']['shippingmethod'],$gp['d']['shippingdate'],$gp['d']['trackingnumber'],$gp['d']['comment'], $gp['d']['product_id']);
	}
}
if (isset($gp['fullrefund'])) {
	if (isset($gp['d']['refund'])) {
		$error = NULL;
		$receipt = $gp['d']['refund'];
		try {
			Stripe::setApiKey($secretKey);

			$ch = Stripe_Charge::retrieve($gp['d']['refund']);
			$ch->refund();
		} catch (Exception  $e) {
			$error = $e->getMessage();
		}
		if ($error == NULL) {
			checkout::updateOrderStatus("Fully Refunded",$gp['d']['shippingmethod'],$gp['d']['shippingdate'],$gp['d']['trackingnumber'],$gp['d']['comment'], $gp['d']['product_id']);
			html::alert("success", "Receipt Number " . $receipt, "Fully Refunded");
		}
	}
}
if (isset($gp['partialrefund'])) {
	if (isset($gp['d']['receipt_number'])) {
		if (isset($gp['d']['partialrefund'])) {
			if (isset($gp['d']['orderid'])) {
				$total = 0;
				$ids = explode(',', $gp['d']['partialrefund']);
				$receipt_number = $gp['d']['receipt_number'];
				$orderid = $gp['d']['orderid'];
				foreach ($ids as $id) {
					if (!(empty($id))) {
						if ($id = '99999') {
							$total += 19.99;
						} else {
							
						}
					}
				}
			}
		}
	}
	
}
?>