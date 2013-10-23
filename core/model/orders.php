<?php
include_once('mchn.config.php');
include_once('stripe.config.php');
$sql_user = "SELECT * FROM admin_users where id = " . $_SESSION['user_id'];
$result = db::execute_query($sql_user);
$user = db::get_result();
$usename = $user[0]['username'];

if(isset($gp["button"])) {
	if($gp['d']['axn'] == "update")  {
		checkout::updateOrderStatus($gp['d']['status'],$gp['d']['shippingmethod'],$gp['d']['shippingdate'],$gp['d']['trackingnumber'],$gp['d']['comment'], $gp['d']['product_id']);
	}
}
if (isset($gp['fullrefund'])) {
	if (isset($gp['d']['refund'])) {
		if (isset($gp['d']['full_orderid'])) {
			$order_id = $gp['d']['full_orderid'];
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
				checkout::updateOrderStatus("Fully Refunded",$gp['d']['shippingmethod'],$gp['d']['shippingdate'],
					$gp['d']['trackingnumber'],$gp['d']['comment'], $gp['d']['product_id']);
				$sql = "Update customer_orders SET comment='" . date("m/d/y") ." Fully refunded by " .$usename . 
					"' where id = " . $order_id;
				db::execute_query($sql);
				html::alert("success", "Receipt Number " . $receipt, "Fully Refunded");
			} else {
				html::alert("error", $error, "Error");
			}
		}
	}
}
if (isset($gp['partialrefund'])) {
	if (isset($gp['d']['receipt_number'])) {
		if (isset($gp['d']['partialrefund'])) {
			if (isset($gp['d']['orderid'])) {
				$error = NULL;
				$total = 0;
				$ids = rtrim($gp['d']['partialrefund'],",");

				$receipt_number = $gp['d']['receipt_number'];
				$orderid = $gp['d']['orderid'];
				$sql = "SELECT * from customer_order_items where order_fk = {$orderid} and product_items_fk in ($ids)";
				$result = db::execute_query($sql);
				$rows   = db::get_result();
				$count_id = count(explode(",", $ids));
				foreach($rows as $row){
					$total += $row['price'];
				}
				try {
					Stripe::setApiKey($secretKey);

					$ch = Stripe_Charge::retrieve($receipt_number);
					$ch->refund(array(
			        'amount'   => $total * 100
			        ));
				} catch (Exception  $e) {
					$error = $e->getMessage();
				}
				if ($error == NULL) {
					$items = "";
					foreach($rows as $row){
						$sql = "Update customer_order_items set qty = 0 where order_fk = {$orderid} and 
								product_items_fk = {$row['product_items_fk']}";
						db::execute_query($sql);
						$items .= $row['product_items_fk'] . ", " . $row['product_name'] . " ";
					}
					$sql = "Select COUNT(*) from customer_order_items where order_fk = {$orderid}";
					$result = db::execute_query($sql);
					$count = db::get_result();
					$sql = "Update customer_orders SET comment='" . date("m/d/y") ." Partially refunded by " .$usename . 
					", " . $items . "' where id = " . $orderid;
					db::execute_query($sql);

					if ($count[0]['COUNT(*)'] == $count_id) {
						$sql = "Update `customer_orders` SET
			            `status` = 'Fully Refunded'
			            WHERE `customer_orders`.`id`  = '$orderid'
			            ";
					} else {
						$sql = "Update `customer_orders` SET
			            `status` = 'Partially Refunded'
			            WHERE `customer_orders`.`id`  = '$orderid'
			            ";
					}
					if ($count[0]['COUNT(*)'] == $count_id) {
						html::alert("success", "Receipt Number " . $receipt, "Fully Refunded");
					} else {
						html::alert("success", "Receipt Number " . $receipt_number, "Partially Refunded");
					}
					db::execute_query($sql);
					
				} else {
					html::alert("error", $error, "Error");
				}
			}
		}
	}
	
}
?>