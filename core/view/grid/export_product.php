<?php
include_once('../../../mchn.config.php');

function cleanData(&$str)  {
  $str = preg_replace("/\t/", "", $str);
  $str = preg_replace("/<.*>/", " ", $str);
  $str = preg_replace("/<\/.*?>/", " ", $str);
  $str = preg_replace("/\n/", "", $str);
  $str = preg_replace("/\r\n/", "", $str);
  $str = preg_replace("/\r?\n/", "", $str);
  $str = preg_replace("/\r/", "", $str);
  $str = preg_replace("//", "", $str);
  $str = preg_replace("/ the /", "", $str);
  $str = preg_replace("/ is /", "", $str);
  $str = preg_replace("/ and /", "", $str);
  $str = preg_replace("/ are /", "", $str);
  $str = preg_replace("/ At /", "", $str);
  $str = preg_replace("/ & /", "", $str);
  $str = preg_replace("/ - /", "", $str);
  $str = preg_replace("/\(|\)/","",$str);
  $str = preg_replace("/100%/","",$str);
  $str = trim($str, "(");
  $str = trim($str, ")");
  $str = trim($str, ";");
  $str = trim($str, ","); 
  $str = trim($str, "   ");
  $str = trim($str, "&nbsp;");
  $str = trim($str, "&mdash;");
  return ($str);
}

function getSearchTerm($data) {
  $clean_data = cleanData($data);
  $data_arr = explode(" ", $clean_data);
  return implode(",", $data_arr);
}

$sql = "SELECT
CONCAT('\"',CONCAT(`products_items`.`id`,'\"')) as SKU,
CONCAT('\"',CONCAT(`products_items`.`name_short`,'\"')) as Name,
CONCAT('\"',CONCAT(CONCAT('http://www.babybeddingtown.com\/products.php?id=',`products_items`.`id`),'\"')) as URL,
CONCAT('\"',CONCAT(FORMAT(cost,2),'\"')) as Price,
CONCAT('\"',CONCAT(FORMAT(price,2),'\"')) as RetailPrice,
CONCAT('\"',CONCAT(`products_items`.`image_large`,'\"')) as FullImage,
CONCAT('\"',CONCAT(`products_items`.`image_thumbnail`,'\"')) as ThumbnailImage,
CONCAT('\"',CONCAT(FORMAT((price*0.1)+price,2),'\"')) as Commission,
'\"11\"' as Category,
'\"\"' as Subcategory,
CONCAT('\"',CONCAT(`products_items`.`description_long`,'\"')) as Description,
CONCAT(CONCAT('\"',`products_items`.`name_long`),'\"') as SearchTerms,
'\"instock\"' as Status,
'\"30099\"' as MerchantID,
'\"\"' as Custom1,
'\"\"' as Custom2,
'\"\"' as Custom3,
'\"\"' as Custom4,
'\"\"' as Custom5,
'\"\"' as Manufacturer,
'\"\"' as PartNumber,
CONCAT('\"',CONCAT(`category`.`name_short`,'\"')) as MerchantCategory,
'\"\"' as MerchantSubcategory,
'\"\"' as ShortDescription,
'\"\"' as ISBN,
'\"\"' as UPC,
'\"\"' as CrossSell,
'\"\"' as MerchantGroup,
'\"\"' as MerchantSubgroup,
'\"\"' as CompatibleWith,
'\"\"' as CompareTo,
'\"\"' as QuantityDiscount,
'\"\"' as Bestseller,
'\"\"' as ReviewRSSURL,
'\"\"' as Option1,
'\"\"' as Option2,
'\"\"' as Option3,
'\"\"' as Option4,
'\"\"' as Option5,
'\"\"' as customCommissions,
'\"\"' as customCommissionIsFlatRate,
'\"\"' as customCommissionNewCustomerMultiplier,
'\"\"' as mobileURL,
'\"\"' as moileImage,
'\"\"' as mobileThumbnail,
'\"\"' as ReservedForFutureUse,
'\"\"' as ReservedForFutureUse,
'\"\"' as ReservedForFutureUse,
'\"\"' as ReservedForFutureUse
FROM
products_items
LEFT JOIN category ON `category`.`id` = `products_items`.`category_id`
WHERE `products_items`.`status` = 1";
$values = array();
$result = db::execute_query($sql);
$rows 	= db::get_result();
$f = fopen('php://memory', 'w');
$str = "";
$header = '"SKU","Name","URL","Price","Retail Price","FullImage","ThumbnailImage","Commission","Category","SubCategory","Description","SearchTerms","Status","MerchantID","Custom1","Custom2","Custom3","Custom ","Custom5","Manufacturer","PartNumber","MerchantCategory","MerchantSubcategory","ShortDescription","ISBN","UPC","CrossSell","MerchantGroup","MerchantSubgroup","CompatibleWith","CompareTo","QuantityDiscount","Bestseller","AddToCartURL","ReviewsRSSURL","Option1","Option2","Option3","Option4","Option5","customCommissions","customCommissionIsFlatRate","customCommissionNewCustomerMultiplier","mobileURL","mobileImage","mobileThumbnail","ReservedForFutureUse","ReservedForFutureUse","ReservedForFutureUse","ReservedForFutureUse"' . "\n";
fwrite($f, $header);
foreach ($rows as $row) {
  $row['SearchTerms'] = getSearchTerm($row['SearchTerms']);
  if (substr_count($row['Description'], "<xml>")) {
    $row['Description'] = "";
  } else {
    $row['Description'] = str_replace(array('<p>','</p>','<u>','<strong>','&#160;','</strong>','</u>',','), "", $row['Description']);
    $row['Description'] = preg_replace("/<.*?>/", "", $row['Description']);
    $row['Description'] = trim($row['Description']);
    $row['Description'] = preg_replace('/"+/', '""', $row['Description']);
  } 
	$str = trim(implode(",",$row),"\t");
  //getSearchTerm(trim($row['Name'],'"'). " " .trim($row['Description'],'"'));
	$str .= "\n";
  fwrite($f, $str);
}
fseek($f, 0);
header('Content-Type: application/csv');
header('Content-Disposition: attachement; filename="'."datafeed-file.csv".'"');
fpassthru($f);
?>