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

$sort = "ORDER BY `admin_users`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";

if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = " WHERE `admin_users`.`id` = $id";

$sql 	= "SELECT `admin_users`.*, `admin_groups`.`name` as `role` FROM `admin_users` LEFT OUTER JOIN `admin_groups` ON (`admin_users`.`permission_group_fk` = `admin_groups`.`id`) $where $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`admin_users`.`id`","`admin_users` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'username'=>$row['username'],
			'first_name'=>$row['first_name'],
			'last_name'=>$row['last_name'],
			'email'=>$row['email'],
			'permission'=>$row['permission_group_fk'],
			'role'=>$row['role'],
			'password'=>$row['password']
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);