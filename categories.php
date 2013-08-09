<?php include('mchn.config.php'); ?>
<?php ob_start();?>
<?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
<?php
$buffer = ob_get_contents();
ob_end_clean();
if(!empty($gp['id']))
{
	$url_name = $gp['id'];
	$category = category::getCategory($gp['id']);
	$gp['id'] = $category[0]['id'];
	echo $gp['id'];
	$buffer =str_replace("%BBT2013%", $category[0]['name_short'] . " by BabyBeddingTown.com", $buffer);
}
echo $buffer;
?>
<?php setlocale(LC_MONETARY, 'en_US'); ?>
<script type="text/javascript">
  $(document).ready(function() {
	var carousel = $("#carousel").featureCarousel({
	  largeFeatureWidth: 0.90,
	  largeFeatureHeight: 0.60,
	  smallFeatureHeight: 0.20,
	  smallFeatureWidth: 0.50,
	  sidePadding:40,
	  smallFeatureOffset: 100
	});
  });
</script>
<div class="row-fluid">
	<div class="span3">
	<?php include('sidebar.php'); ?>
	</div>
	<?php
	// PRODUCTS SELECT FROM DATABASE
	if(!empty($gp['id']))
	{
		$page = !empty($gp['p']) ? (int)$gp['p'] : 1;
		$per_page = 9;
		$total_count = products::getProductTotalCategory($gp['id']);
		$total_count = $total_count[0]['COUNT(*)'];
		$pagination = new Pagination($page, $per_page, $total_count);
		$sql = "SELECT * FROM `products_items`
		WHERE (`category_id` = '{$gp['id']}')
		LIMIT {$per_page}
		OFFSET {$pagination->offset()}";
		$products = products::getSQL($sql);
		$category = category::getCategoryURL($gp['id']);
		$topproducts = products::getTopProductByCategoryID($gp['id']);

		?>
	<div class="span9">
		<div class="row-fluid span12">
			<div class="carousel-container">
			<?php if ($total_count >= 3) { ?>
				<div id="carousel">
				<?php foreach( $topproducts as $toprow):?>
					<div class="carousel-feature" style="width: 450px; height: 230px">
						<a href="./products.php?id=<?php html::p($toprow["id"]) ?>"><img
							class="carousel-image" alt="Image Caption"
							src="<?php html::p($toprow['image_large']); ?>"> </a>
						<div class="carousel-caption">
							<p>
							<?php echo $toprow['name_short']; ?>
							</p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php if(!empty($topproducts)) { ?>
				<div id="carousel-left">
					<img src="/images/arrow-left.png" />
				</div>
				<div id="carousel-right">
					<img src="/images/arrow-right.png" />
				</div>
				<?php } ?>
				<?php } else {?>
				<?php if ($total_count>0){ ?>
				<center>
					<img width="180"
						src="<?php 
					  if(empty($topproducts[0]['image_small']))
					  {
							  html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
					  }
					  else
					  {
							  echo $topproducts[0]['image_small']; 
					  }?>" />
				</center>
				<?php } ?>
				<?php }?>
			</div>
		</div>
		<div class="row-fluid">
		<?php echo $category[0]['description_long']; ?>
			<br />
			<?php foreach( $products as $row):?>
			<div class="product-container-link">
				<div class="pull-left well product-container">
					<center>
						<a href="./products.php?id=<?php html::p($row["id"]) ?>"><img
							style="width: 400px; height: 300px;"
							src="<?php 
							  if(empty($row['image_small']))
							  {
									  html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
							  }
							  else
							  {
									  echo $row['image_small']; 
							  }?>" /> </a> <br> <br>
						<div style="height: 40px;">
							<a href="./products.php?id=<?php html::p($row["id"]) ?>"><b><?php html::p($row["name_short"]) ?>
							</b> </a>
						</div>
						<div>
							Price: <b>$<?php html::p(number_format($row["price"],2,".",",")); ?>
							</b>
						</div>
						<br>
						<form action="./cart.php" method="post">
							<input type="hidden" name="item"
								value="<?php html::p($row["id"]) ?>" />
							<div>
								<input type="hidden" name="quantity" value="1" />
							</div>
							<input type="hidden" name="direction" value="fromCart" /> <input
								type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
						</form>
					</center>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php
		if($pagination->total_pages() > 1) {
			if($pagination->has_previous_page()) {
				echo "<a href=\"{$url_name}?p=";
				echo $pagination->previous_page();
				echo "\">&laquo; Previous</a> ";
			}

			for($i=1; $i <= $pagination->total_pages(); $i++) {
				if($i == $page) {
					echo " <span class=\"selected\">{$i}</span> ";
				} else {
					echo " <a href=\"{$url_name}?p={$i}\">{$i}</a> ";
				}
			}

			if($pagination->has_next_page()) {
				echo " <a href=\"{$url_name}?p=";
				echo $pagination->next_page();
				echo "\">Next &raquo;</a> ";
			}
		}
		?>
	</div>
	<?php } else { ?>
	Missing Category Id
	<?php } ?>

</div>
	<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>