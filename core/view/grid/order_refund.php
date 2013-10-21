<?php
include_once('../../../mchn.config.php');
include_once('../../../stripe.config.php');
$id 		= isset($_POST['id']) ? $_POST['id'] : false;

$error = NULL;
$json_data = array();
try {
	Stripe::setApiKey($secretKey);

	$ch = Stripe_Charge::retrieve($id);
	$ch->refund();
} catch (Exception  $e) {
	$error = $e->getMessage();
}

if ($error == NULL) {
	$json_data['refunded'] = true;
}
echo json_encode($json_data)
?>