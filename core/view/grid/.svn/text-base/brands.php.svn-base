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

$sort = "ORDER BY `brands`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = " WHERE `brands`.`id` = $id";

$sql 	= "SELECT `brands`.* FROM `brands` $where $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`brands`.`id`","`brands` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	
	$thumb = explode("/", $row['image_thumbnail']);
	if(!empty($row['image_thumbnail'])) $thumb = $thumb[4]; else $thumb = "None";
	$small = explode("/", $row['image_small']);
	if(!empty($row['image_small'])) $small = $small[4]; else $small = "None";
	$large = explode("/", $row['image_large']);
	if(!empty($row['image_large'])) $large = $large[4]; else $large = "None";
	
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'name_short'=>$row['name_short'],
			'name_long'=>$row['name_long'],
			'description_short'=>$row['description_short'],
			'description_long'=>$row['description_long'],
			'image_thumbnail'=>$row['image_thumbnail'],
			'image_large'=>$row['image_large'],
			'image_small'=>$row['image_small'],
			'url'=>$row['url'],
			'thumb'=>image::imageFileNaming($thumb),
			'small'=>image::imageFileNaming($small),
			'large'=>image::imageFileNaming($large)
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);