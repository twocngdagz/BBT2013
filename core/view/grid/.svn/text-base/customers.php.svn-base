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

$sort = "ORDER BY `customer_account`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = " WHERE `customer_account`.`id` = $id";

$sql 	= "SELECT  `customer_account` . * ,  `customer_addresses` . `cust_fk`,
	`customer_addresses`.`address1`,
	`customer_addresses`.`address2`,
	`customer_addresses`.`state`,
	`customer_addresses`.`city`,
	`customer_addresses`.`country`,
	`customer_addresses`.`zipcode`,
  `customer_addresses`.`active`,
  `customer_addresses`.`billing_or_shipping`
FROM  `customer_account` 
LEFT OUTER JOIN  `customer_addresses` ON (
`customer_account`.`id` =  `customer_addresses`.`cust_fk`
)
$where
AND  `customer_addresses`.`active` = 1 
AND `customer_addresses`.`billing_or_shipping` = 0
			 $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`customer_account`.`id`","`customer_account` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	$fullname = $row['last_name']. ", " . $row['first_name'];
	if($row['status'] == 1) $status = "active";	else $status = "inactive";
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'fullname'=> $fullname,
			'first_name'=>$row['first_name'],
			'last_name'=>$row['last_name'],
			'phone'=>$row['phone'],
			'email'=>$row['email'],
			'address'=>$row['address1'],
			'address2'=>$row['address2'],
			'state'=>$row['state'],
			'city'=>$row['city'],
			'country'=>$row['country'],
			'zipcode'=>$row['zipcode'],
			'status_text'=>$status
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);