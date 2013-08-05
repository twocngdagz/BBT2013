<?php
include_once('../../../mchn.config.php');
$page     = isset($_POST['page']) ? $_POST['page'] : 1;
$rp     = isset($_POST['rp']) ? $_POST['rp'] : 10;
$sortname   = isset($_POST['sortname']) ? $_POST['sortname'] : 'id';
$sortorder  = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
$query    = isset($_POST['query']) ? $_POST['query'] : false;
$qtype    = isset($_POST['qtype']) ? $_POST['qtype'] : false;
$id     = isset($_POST['id']) ? $_POST['id'] : false;
$customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : false;

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
#if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($query) $where = " WHERE `customer_orders`.`cust_fk` = $query";
#if ($customer_id) $where .= " WHERE `customer_orders`.`cust_fk` = $customer_id";


$sql  = "SELECT  `customer_orders`. * ,  `customer_order_items`. * , 
      SUM(  `customer_order_items`.`price` *  `customer_order_items`.`qty` ) AS  `total`,
      `customer_orders`.`status` AS  `order_status` 
      FROM  `customer_orders` 
      LEFT OUTER JOIN  `customer_account` ON (  `customer_orders`.`cust_fk` =  `customer_account`.`id` ) 
      LEFT OUTER JOIN  `customer_order_items` ON (  `customer_order_items`.`order_fk` =  `customer_orders`.`id` ) 
      $where
      GROUP BY  `customer_order_items`.`order_fk` 
       # $sort $limit
       ";
$result = db::execute_query($sql);
$rows   = db::get_result();
$total  = countRec("`customer_orders`.`id`","`customer_orders` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
  
  $entry = array('id'=>$row['id'],
    'cell'=>array(
      'id'=>$row['id'],
      'payment_receipt_number'=>$row['payment_receipt_number'],
      'date'=>$row['date'],
      'total'=>$row['total'],
      'status'=>$row['order_status'],
    ),
  );
  $jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);