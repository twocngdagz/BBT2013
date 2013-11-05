<?php
function fputcsv2 ($fh, array $fields, $delimiter = ',', $enclosure = '"', $mysql_null = false) { 
    $delimiter_esc = preg_quote($delimiter, '/'); 
    $enclosure_esc = preg_quote($enclosure, '/'); 

    $output = array(); 
    foreach ($fields as $field) { 
        if ($field === null && $mysql_null) { 
            $output[] = 'NULL'; 
            continue; 
        } 

        $output[] = preg_match("/(?:${delimiter_esc}|${enclosure_esc}|\s)/", $field) ? ( 
            $enclosure . str_replace($enclosure, $enclosure . $enclosure, $field) . $enclosure 
        ) : $field; 
    } 

    fwrite($fh, join($delimiter, $output) . "\n"); 
} 
include_once('../../../mchn.config.php');
$sql = "SELECT
CONCAT('\"',CONCAT(`products_items`.`id`,'\"')),
CONCAT('\"',CONCAT(`products_items`.`name_short`,'\"')),
CONCAT('\"',CONCAT(CONCAT('http://www.babybeddingtown.com\/products.php?id=',`products_items`.`id`),'\"')),
CONCAT('\"',CONCAT(FORMAT(cost,2),'\"')),
CONCAT('\"',CONCAT(FORMAT(price,2),'\"')),
CONCAT('\"',CONCAT(`products_items`.`image_large`,'\"')),
CONCAT('\"',CONCAT(`products_items`.`image_thumbnail`,'\"')),
CONCAT('\"',CONCAT(FORMAT((price*0.1)+price,2),'\"')),
'\"11\"',
'\"\"',
CONCAT('\"',CONCAT(`products_items`.`description_long`,'\"')),
'\"instock\"',
'\"30099\"'
FROM
products_items
LEFT JOIN category ON `category`.`id` = `products_items`.`category_id`
WHERE `products_items`.`status` = 1";
$values = array();
$result = db::execute_query($sql);
$rows 	= db::get_result();
$f = fopen('php://memory', 'w');
$str = "";
foreach ($rows as $row) {
	$str = trim(implode(",",$row),"\t");
	$str .= "\n";
  fwrite($f, $str);
	//fputcsv2($f, array_values($row));
}
fseek($f, 0);
header('Content-Type: application/csv');
header('Content-Disposition: attachement; filename="'."sample.csv".'"');
fpassthru($f);
?>