<?php
include_once('../../../mchn.config.php');
$page 		= isset($_POST['page']) ? $_POST['page'] : 1;
$rp 		= isset($_POST['rp']) ? $_POST['rp'] : 10;
$sortname 	= isset($_POST['sortname']) ? $_POST['sortname'] : 'id';
$sortorder 	= isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
$query 		= isset($_POST['query']) ? $_POST['query'] : false;
$qtype 		= isset($_POST['qtype']) ? $_POST['qtype'] : false;
$id 		= isset($_POST['id']) ? $_POST['id'] : false;

$usingSQL = true;

function countRec($fname,$tname) {
	$sql = "SELECT count($fname) as cnt FROM $tname ";
	$result = db::execute_query($sql);
	$row = db::get_result();
	return $row[0]['cnt'];
}

$sort = "ORDER BY `customer_orders`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = " WHERE `customer_orders`.`id` = $id";

$sql 	= "SELECT  `customer_orders`. * ,  `customer_order_items`. * , `customer_account`.*, `customer_addresses`.*,
			CONCAT(  `customer_account`.`last_name` ,  ', ',  `customer_account`.`first_name` ) AS  `fullname` , 
			SUM(  `customer_order_items`.`price` *  `customer_order_items`.`qty` ) AS  `total`,
			`customer_orders`.`status` AS  `order_status` 
			FROM  `customer_orders` 
			LEFT OUTER JOIN `customer_account` ON (  `customer_orders`.`cust_fk` =  `customer_account`.`id` ) 
			LEFT OUTER JOIN `customer_order_items` ON (  `customer_order_items`.`order_fk` =  `customer_orders`.`id` ) 
			LEFT OUTER JOIN `customer_addresses` ON ( `customer_account`.`id` = `customer_addresses`.`cust_fk` )
			WHERE `customer_addresses`.`active` = 1
			$where $sort $limit";

$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`customer_orders`.`id`","`customer_orders` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	if(!empty($row['billing_fk'])) $billing_fk = $row['billing_fk']; else $billing_fk = "None";
	if(!empty($row['cust_fk'])) $cust_fk = $row['cust_fk']; else $cust_fk = "None";
	if(!empty($row['shipping_fk'])) $shipping_fk = $row['shipping_fk']; else $shipping_fk = "None";

	if($row['billing_or_shipping'] == 1 ){
		$first_name = $row['first_name'];
	}

	
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'fullname'=>$row['fullname'],
			'first_name'=>$row['first_name'],
			'cust_fk'=>$cust_fk,
			'billing_fk'=>$billing_fk,
			'shipping_fk'=>$shipping_fk,
			'date'=>$row['date'],
			'payment_method'=>$row['payment_method'],
			'payment_receipt_number'=>$row['payment_receipt_number'],
			'status'=>$row['order_status'],
			'total'=>$row['total'],
			'notes'=>$row['notes']
		),
	);
	$jsonData['rows'][] = $sql;
}
echo json_encode($jsonData);