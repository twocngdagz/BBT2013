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

$sort = "ORDER BY `vendors`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = " WHERE `vendors`.`id` = $id";

$sql 	= "SELECT `vendors`.* FROM `vendors` $where $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`vendors`.`id`","`vendors` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	
	if($row['status'] == 1) {
		$status = "active";			
	} else {
		$status = "inactive";
	}
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'name'=>$row['name'],
			'email'=>$row['email'],
			'street'=>$row['street'],
			'city'=>$row['city'],
			'state'=>$row['state'],
			'zip'=>$row['zip'],
			'country'=>$row['country'],
			'phone'=>$row['phone'],
			'phone_mobile'=>$row['phone_mobile'],
			'phone_fax'=>$row['phone_fax'],
			'notes'=>$row['notes'],
			'status'=>$row['status'],
			'status_text'=>$status,
			'first_name'=>$row['first_name'],
			'last_name'=>$row['last_name'],
			'url'=>$row['url'],
			'email_personal'=>$row['email_personal']
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);