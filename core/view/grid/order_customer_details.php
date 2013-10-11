<?php
include_once('../../../mchn.config.php');
$page     = isset($_POST['page']) ? $_POST['page'] : 1;
$rp     = isset($_POST['rp']) ? $_POST['rp'] : 10;
$sortname   = isset($_POST['sortname']) ? $_POST['sortname'] : 'id';
$sortorder  = isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
$query    = isset($_POST['query']) ? $_POST['query'] : false;
$qtype    = isset($_POST['qtype']) ? $_POST['qtype'] : false;
$id     = isset($_POST['id']) ? $_POST['id'] : false;

$usingSQL = true;

function countRec($fname,$tname) {
  $sql = "SELECT count($fname) as cnt FROM $tname ";
  $result = db::execute_query($sql);
  $row = db::get_result();
  return $row[0]['cnt'];
}


$where = "";
#if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = "WHERE `customer_orders`.`id` = $id";

$sql  = "SELECT 
            `customer_account`.`id`, 
            `customer_account`.`email`,
            `customer_account`.`phone`,
            `customer_orders`.`status`, `customer_orders`.`shippingmethod`, `customer_orders`.`shippingdate`, `customer_orders`.`trackingnumber`, `customer_orders`.`comment`,
            `customer_addresses`.*, `customer_orders`.`cust_fk` FROM `customer_account` 
          LEFT OUTER JOIN `customer_addresses` on ( `customer_account`.`id` = `customer_addresses`.`cust_fk` ) 
          LEFT OUTER JOIN `customer_orders` ON ( `customer_account`.`id` = `customer_orders`.`cust_fk` )
          $where 
          AND `customer_addresses`.`active` = 1
          ";
$result = db::execute_query($sql);
$rows   = db::get_result();

header("Content-type: application/json");
$jsonData = array('rows'=>array());
foreach($rows as $row){

  // Check if customer address is billing (0) or shipping info (1)
  if($row['billing_or_shipping'] == 1){
    $sfirst_name = $row['first_name'];
    $slast_name = $row['last_name'];
    $saddress1 = $row['address1'];
    $saddress2 = $row['address2'];
    $scity = $row['city'];
    $sstate = $row['state'];
    $szipcode = $row['zipcode'];
    $scountry = $row['country'];
  } else {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $address1 = $row['address1'];
    $address2 = $row['address2'];
    $city = $row['city'];
    $state = $row['state'];
    $zipcode = $row['zipcode'];
    $country = $row['country'];
    $phone = $row['phone'];
    $email = $row['email'];
  }
}
$entry = array('id'=>$row['id'],
    'cell'=>array(

      //billing details
      'id'=>$row['id'],
      'email'=> $row['email'],
      'phone'=> $row['phone'],
      'first_name'=> $first_name,
      'last_name'=> $last_name,
      'address'=> $address1,
      'address2'=> $address2,
      'city'=> $city,
      'state'=> $state,
      'zipcode'=> $zipcode,
      'country'=> $country,

      //shipping details
      'sfirst_name'=> $first_name,
      'slast_name'=> $last_name,
      'saddress1'=> $address1,
      'saddress2'=> $address2,
      'scity'=> $city,
      'sstate'=> $state,
      'szipcode'=> $zipcode,
      'scountry'=> $country,
      'status'=> $row['status'],
      'comment'=>$row['comment'],
      'shippingdate'=>$row['shippingdate'],
      'shippingmethod'=>$row['shippingmethod'],
      'trackingnumber'=>$row['trackingnumber']
    ),
  );
$jsonData['rows'][] = $entry;
echo json_encode($jsonData);