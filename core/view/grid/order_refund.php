<?php
include_once('../../../mchn.config.php');
include_once('../../../stripe.config.php');
$id 		= isset($_POST['id']) ? $_POST['id'] : false;


Stripe::setApiKey($secretKey);

$ch = Stripe_Charge::retrieve($id);

$ch->refund();

?>