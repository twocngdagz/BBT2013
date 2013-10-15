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

$sort = "ORDER BY `products_items`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE $qtype LIKE '%".mysql_real_escape_string($query)."%' ";
if ($id) $where = " WHERE `products_items`.`id` = $id";

$sql 	= "SELECT `products_items`.* FROM `products_items` $where $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`products_items`.`id`","`products_items` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	if(!empty($row['category_id'])) $category_id = $row['category_id']; else $category_id = "None";
	if(!empty($row['brand_id'])) $brand_id = $row['brand_id']; else $brand_id = "None";
	if(!empty($row['vendor_id'])) $vendor_id = $row['vendor_id']; else $vendor_id = "None";
	
	$thumb = explode("/", $row['image_thumbnail']);
	if(!empty($row['image_thumbnail'])) $thumb = $thumb[3]; else $thumb = "None";
	$small = explode("/", $row['image_small']);
	if(!empty($row['image_small'])) $small = $small[3]; else $small = "None";
	$large = explode("/", $row['image_large']);
	if(!empty($row['image_large'])) $large = $large[3]; else $large = "None";
	
	if($row['status'] == 1) $status = "active";	else $status = "inactive";
	
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'category_id'=>$category_id,
			'brand_id'=>$brand_id,
			'vendor_id'=>$vendor_id,
			'price'=>$row['price'],
			'name_short'=>$row['name_short'],
			'name_long'=>$row['name_long'],
			'description_long'=>$row['description_long'],
			'image_thumbnail'=>$row['image_thumbnail'],
			'image_small'=>$row['image_small'],
			'image_large'=>$row['image_large'],
			'comments'=>$row['comments'],
			'status'=>$row['status'],
			'status_text'=>$status,
			'thumb'=>image::imageFileNaming($thumb),
			'small'=>image::imageFileNaming($small),
			'large'=>image::imageFileNaming($large),
			'cost'=>$row['cost']
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);