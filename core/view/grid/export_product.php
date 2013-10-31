<?php
include_once('../../../mchn.config.php');
$sql = "SELECT
`products_items`.`id`,
`products_items`.`name_short`,
CONCAT('http://www.babybeddingtown.com\/products.php?id=',`products_items`.`id`),
FORMAT(cost,2),
FORMAT(price,2),
`products_items`.`image_large`,
`products_items`.`image_thumbnail`,
FORMAT((price*0.1)+price,2),
'11',
'',
`products_items`.`description_long`,
'instock',
'30099'
FROM
products_items
LEFT JOIN category ON `category`.`id` = `products_items`.`category_id`
WHERE `products_items`.`status` = 1";
$result = db::execute_query($sql);
$rows 	= db::get_result();
$f = fopen('php://memory', 'w');
foreach ($rows as $row) {
	fputcsv($f, $row);
}
fseek($f, 0);
header('Content-Type: application/csv');
header('Content-Disposition: attachement; filename="'."sample.csv".'"');
fpassthru($f);
?>