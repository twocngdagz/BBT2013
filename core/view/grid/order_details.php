<?php
include_once('../../../mchn.config.php');
$page 		= isset($_POST['page']) ? $_POST['page'] : 1;
$rp 		= isset($_POST['rp']) ? $_POST['rp'] : 10;
$sortname 	= isset($_POST['sortname']) ? $_POST['sortname'] : 'id';
$sortorder 	= isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
$query 		= isset($_POST['query']) ? $_POST['query'] : false;
$qtype 		= isset($_POST['qtype']) ? $_POST['qtype'] : false;
$id 		= isset($_POST['id']) ? $_POST['id'] : false;
#$order_id	= isset($_POST['product_id']) ? $_POST['product_id'] : false;

$usingSQL = true;

function countRec($fname,$tname) {
	$sql = "SELECT count($fname) as cnt FROM $tname ";
	$result = db::execute_query($sql);
	$row = db::get_result();
	return $row[0]['cnt'];
}

$sort = "ORDER BY `customer_order_items`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE `customer_order_items`.`order_fk` = $query";

#if ($product_id) $where .= " WHERE `customer_order_items`.`product_items_fk` = $product_id";



$sql 	= "SELECT `customer_order_items`.* FROM `customer_order_items` $where $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`customer_order_items`.`id`","`customer_order_items` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	#if(!empty($row['product_id'])) $product_id = $row['product_id']; else $product_id = "None";
	
	
	#$product = products::getProducts($product_id);
	
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'order_fk'=>$row['order_fk'],
			'product_items_fk'=>$row['product_items_fk'],
			'product_name'=>'<a href="/products.php?id=' . $row['id'] .'">'. $row['product_name'] .'</a>',
			#'receipt'=>$row['payment_receipt_number'],
			#'product_id'=>$product_id,
			#'product_name'=>$product[0]['name_short'],
			'price'=>$row['price'],
			'qty'=>$row['qty']
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);