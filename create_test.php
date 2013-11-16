<?php
	include ('mchn.config.php');

	$htmls='';
	$htmls.='<div id="navigation" style=>'."\n";
	
	$parentCategory = category::getCategoryitems(NULL,1);
	
	foreach ($parentCategory as $row){
		if($row['parent_id'] == 0){
		
		}else if($row['name_short'] === "Default Category"){
			$htmls.='<h5><a href="<?php echo MCHN_ROOT;?>'.$row['url'].'">Top Sellers</a></h5>'."\n";
		}else{
			$htmls.='<h5><a href="<?php echo MCHN_ROOT;?>'.$row['url'].'">'.$row['name_short'].'</a></h5>'."\n";
		}
		

		$subCategory = category::getCategoryitems(NULL,1,$row['id']);
		if($subCategory) {
			$htmls.='<ul style="list-style: none;margin-left: 10px;">'."\n";
			foreach ($subCategory as $row) {
			
				$count = products::getProductTotalCategory($row['id']); 
				$count = $count[0]['COUNT(*)'];

				if ($count > 0){
					$htmls.='<li><a href="<?php echo MCHN_ROOT;?>'.$row['url'].'">'.$row['name_short'].'</a></li>'."\n";
				}
			}
			$htmls.='</ul>'."\n";
		}	
	}
	
	$htmls.='</div>'."\n";
	
	if($handle=fopen('side_testing.txt', 'a')) {
		fwrite($handle, $htmls);
		fclose($handle);
	}	
		
?>
