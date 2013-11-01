<?php
function fputcsvs(&$handle, $fields = array(), $delimiter = ',', $enclosure = '"') {
    $str = '';
    $escape_char = '\\';
    foreach ($fields as $value) {
      if (strpos($value, $delimiter) !== false ||
          strpos($value, $enclosure) !== false ||
          strpos($value, "\n") !== false ||
          strpos($value, "\r") !== false ||
          strpos($value, "\t") !== false ||
          strpos($value, ' ') !== false) {
        $str2 = $enclosure;
        $escaped = 0;
        $len = strlen($value);
        for ($i=0;$i<$len;$i++) {
          if ($value[$i] == $escape_char) {
            $escaped = 1;
          } else if (!$escaped && $value[$i] == $enclosure) {
            $str2 .= $enclosure;
          } else {
            $escaped = 0;
          }
          $str2 .= $value[$i];
        }
        $str2 .= $enclosure;
        $str .= $str2.$delimiter;
      } else {
        $str .= $value.$delimiter;
      }
    }
    $str = substr($str,0,-1);
    $str .= "\n";
    return fwrite($handle, $str);
  }
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
$values = array();
$result = db::execute_query($sql);
$rows 	= db::get_result();
$f = fopen('php://memory', 'w');
foreach ($rows as $row) {
	/*foreach ($row as $key => $value) {
		$values["$key"] = '"'.$value.'",';
	}*/
	//print_r($values);
	fputcsvs($f, $row);
}
fseek($f, 0);
header('Content-Type: application/csv');
header('Content-Disposition: attachement; filename="'."sample.csv".'"');
fpassthru($f);
?>