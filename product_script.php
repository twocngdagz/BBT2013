<?php

//ini_set('display_errors','On');

include('mchn.config.php');

?>
<script src="<?php html::p(MCHN_DIR_3RDPARTY) ?>jquery/js/jquery-1.9.0.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY) ?>jquery/js/jquery-ui-1.10.0.custom.js"></script>
<?php

$sql = "SELECT * FROM `products_items`
		WHERE (`category_id` = 435)
		LIMIT 100
		OFFSET 0";
$productss = products::getSQL($sql);

// foreach ($productss as $p) {
// 	echo file_exists(str_replace('http://216.130.182.4/',MCHN_DIR_ROOT,$p['image_small'])) . "<br />";
// }
echo MCHN_DIR_ROOT;
$products = products::getAllProducts();
$no_image = html::cln(MCHN_ROOT).'images/products/noimage.jpg';

//$sql = "UPDATE `products_items` SET `image_small` =  '".$no_image."' WHERE `id` = '11608'";
//products::getSQL($sql);
$count=0;
$idx=0;
$lims = 150;

foreach ($products as $row) {
	$count++;
}

$idx = intval($count / $lims);
$mod_idx = $count % $lims;
if($mod_idx != 0){
	$idx+=1;
}


echo '<ul>';
for($i=0; $i<$idx; $i++){
	$end_range = $lims * ($i+1);
	$beg_range = $end_range - $lims;
	if($i>0){
		echo '<li id="'.$i.'"><a href="javascript:void(0)" onclick="updateProducts('.($beg_range+1).','.$lims.','.$i.')">Product Range: '.($beg_range+1).' - '.$end_range.'</a></li>';
	}else{
		echo '<li id="'.$i.'"><a href="javascript:void(0)" onclick="updateProducts('.$beg_range.','.$lims.','.$i.')">Product Range: '.($beg_range).' - '.$end_range.'</a></li>';
	}
	
}
echo '</ul>';
?>
<script>
	function updateProducts(val1, val2, id){
		//alert(val);
		var offset_val = val1;
		var limits_val = val2;
		var li_id = id;
		var url = 'product_update_script.php';
		console.log(offset_val);
		console.log(limits_val);
		$.ajax({
			url:url,
			type:'POST',
			datatype:'json',
			data: {offset:offset_val, limits:limits_val},
			success: function(data){
				$( "#"+li_id ).append( "  Success : Data Updated" );
			}
		});
	}
</script>
<?php

?>