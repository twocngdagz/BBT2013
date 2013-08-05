<div id="navigation" style=>
<?php $parentCategory = category::getCategoryitems(NULL,1); ?>
<?php foreach ($parentCategory as $row): ?>
	<h5><a href="./categories.php?id=<?php html::p($row["id"]) ?>"><?php html::p(ucwords($row['name_short'])); ?></a></h5>
	<ul style="list-style: none;margin-left: 10px;">
	<?php $subCategory = category::getCategoryitems(NULL,1,$row['id']); ?>
	<?php foreach ($subCategory as $row): ?>
		<li><a href="./categories.php?id=<?php html::p($row["id"]) ?>"><?php html::p(ucwords($row['name_short'])); ?></a></li> 
	<?php endforeach ?>
	</ul>
<?php endforeach ?>
</div>
