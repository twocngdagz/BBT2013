<?php
	include ('mchn.config.php');

	$htmls='';
	$htmls.='<div id="navigation" style=>';
	
	$parentCategory = category::getCategoryitems(NULL,1);
	
	foreach ($parentCategory as $row){
		if($row['parent_id'] == 0){
	
		}else if($row['name_short'] === "Default Category"){
			$htmls.='<h5><a href="./categories.php?id='.$row['id'].'">Top Sellers</a></h5>';
		}else{
			$htmls.='<h5><a href="./categories.php?id='.$row['id'].'">'.$row['name_short'].'</a></h5>';
		}
		$htmls.='<ul style="list-style: none;margin-left: 10px;">';

		$subCategory = category::getCategoryitems(NULL,1,$row['id']);
		foreach ($subCategory as $row) {
			$count = products::getProductTotalCategory($row['id']); 
			$count = $count[0]['COUNT(*)'];

			if ($count == 0){

			}else{
				$htmls.='<li><a href="./categories.php?id='.$row['id'].'">'.$row['name_short'].'</a></li>';
			}
		}
		$htmls.='</ul>';
	}
	
	$htmls.='</div>';
		if($handle=fopen('side_testing.txt', 'a')) {
			fwrite($handle, $htmls);
			fclose($handle);
		}	
		
?>
