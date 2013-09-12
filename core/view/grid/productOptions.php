<?php
include_once('../../../mchn.config.php');
$page 		= isset($_POST['page']) ? $_POST['page'] : 1;
$rp 		= isset($_POST['rp']) ? $_POST['rp'] : 10;
$sortname 	= isset($_POST['sortname']) ? $_POST['sortname'] : 'id';
$sortorder 	= isset($_POST['sortorder']) ? $_POST['sortorder'] : 'desc';
$query 		= isset($_POST['query']) ? $_POST['query'] : false;
$qtype 		= isset($_POST['qtype']) ? $_POST['qtype'] : false;
$id 		= isset($_POST['id']) ? $_POST['id'] : false;
$product_id	= isset($_POST['product_id']) ? $_POST['product_id'] : false;

$usingSQL = true;

function countRec($fname,$tname) {
	$sql = "SELECT count($fname) as cnt FROM $tname ";
	$result = db::execute_query($sql);
	$row = db::get_result();
	return $row[0]['cnt'];
}

$sort = "ORDER BY `products_item_options`.`$sortname` $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = "";
if ($query) $where = " WHERE $qtype = ".mysql_real_escape_string($query)." ";
if ($id) $where = " WHERE `products_item_options`.`id` = $id";
if ($product_id) $where .= " WHERE `products_item_options`.`product_id` = $product_id";

$sql 	= "SELECT `products_item_options`.* FROM `products_item_options` $where $sort $limit";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$total 	= countRec("`products_item_options`.`id`","`products_item_options` $where");

header("Content-type: application/json");

$jsonData = array('page'=>$page,'total'=>$total,'rows'=>array());
foreach($rows as $row){
	if(!empty($row['product_id'])) $product_id = $row['product_id']; else $product_id = "None";
	
	$thumb = explode("/", $row['image_thumbnail']);
	if(!empty($row['image_thumbnail'])) $thumb = $thumb[3]; else $thumb = "None";
	$small = explode("/", $row['image_small']);
	if(!empty($row['image_small'])) $small = $small[3]; else $small = "None";
	$large = explode("/", $row['image_large']);
	if(!empty($row['image_large'])) $large = $large[3]; else $large = "None";
	
	$product = products::getProducts($product_id);
	
	$entry = array('id'=>$row['id'],
		'cell'=>array(
			'id'=>$row['id'],
			'product_id'=>$product_id,
			'product_name'=>$product[0]['name_short'],
			'price'=>$row['price'],
			'weight'=>$row['weight_ozs'],
			'option_name'=>$row['option_name'],
			'option_description'=>$row['option_description'],
			'image_thumbnail'=>$row['image_thumbnail'],
			'image_small'=>$row['image_small'],
			'image_large'=>$row['image_large'],
			'thumb'=>image::imageFileNaming($thumb),
			'small'=>image::imageFileNaming($small),
			'large'=>image::imageFileNaming($large)
		),
	);
	$jsonData['rows'][] = $entry;
}
echo json_encode($jsonData);