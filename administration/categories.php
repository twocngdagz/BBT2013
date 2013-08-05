<?php include('mchn.config.php'); ?>
<?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
<?php setlocale(LC_MONETARY, 'en_US'); ?>
<script type="text/javascript">
  $(document).ready(function() {
	var carousel = $("#carousel").featureCarousel({
	  // include options like this:
	  // (use quotes only for string values, and no trailing comma after last option)
	  // option: value,
	  // option: value
	  //largeFeatureWidth: 0.90,
	  largeFeatureWidth: 0.70,
	  largeFeatureHeight: 0.40,
	  //smallFeatureWidth: 0.60,
	  smallFeatureHeight: 0.20,
	  smallFeatureWidth: 0.50,
	  sidePadding:40
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
  $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
  $per_page = 10;
  $total_count = products::getProductTotalCategory($gp['id']);
  $total_count = $total_count[0]['COUNT(*)'];
  $pagination = new Pagination($page, $per_page, $total_count);
  $sql = "SELECT * FROM `products_items`
		WHERE (`category_id` = '{$gp['id']}')
		LIMIT {$per_page}
		OFFSET {$pagination->offset()}";
  $products = products::getSQL($sql);
  $category = category::getCategory($gp['id']);
  $topproducts = products::getTopProductByCategoryID($gp['id']);
?>
  <div class="span9">
	<div class="row-fluid span12">
		<div class="carousel-container">
		  <div id="carousel">
          	<?php foreach( $topproducts as $toprow):?>
                <div class="carousel-feature" style="width:450px; height:230px">
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="<?php html::p($toprow['image_small']); ?>"></a>
                  <div class="carousel-caption">
                    <p>
                      <?php echo $toprow['description_long']; ?>
                    </p>
                  </div>
                </div>
			<?php endforeach; ?>
		  </div>
		  <?php if(!empty($topproducts)) { ?>
			  <div id="carousel-left"><img src="images/arrow-left.png" /></div>
			  <div id="carousel-right"><img src="images/arrow-right.png" /></div>
		  <?php } ?>
		</div>
	</div>
	<div class="row-fluid">
		<?php echo $category[0]['description_long']; ?>
		<br/>
		<?php foreach( $products as $row):?>
		<a class="product-container-link" href="./cart.php">
			<div class="pull-left well product-container">
			  <center>
			  <img width="180" src="<?php 
			  if(empty($row['image_small']))
			  {
					  html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
			  }
			  else
			  {
					  echo $row['image_small']; 
			  }?>" />
			  <br><br>
			  <b><?php html::p($row["name_short"]) ?></b>
			  <div>Price: <b>$<?php html::p(number_format($row["price"],2,".",",")); ?></b></div>
			  <br>
			  <form action="./cart.php" method="post">
				<input type="hidden" name="item" value="<?php html::p($row["id"]) ?>"/>
				<div><input type="hidden" name="quantity" value="1" /></div>
				<input type="hidden" name="direction" value="fromCart"/>      
				<input type="submit" class="btn btn-info btn-mini" value="ADD TO CART"/>
			  </form>
			  </center>
			</div>
		</a>
		<?php endforeach; ?>
	</div>
  </div>
<?php
}
else
{
?>
  Missing Category Id
<?php
}
if($pagination->total_pages() > 1) {

	if($pagination->has_previous_page()) {
		echo "<a href=\"categories.php?id=10&page=";
		echo $pagination->previous_page();
		echo "\">&laquo; Previous</a> ";
	}

	for($i=1; $i <= $pagination->total_pages(); $i++) {
		if($i == $page) {
			echo " <span class=\"selected\">{$i}</span> ";
		} else {
			echo " <a href=\"categories.php?id=10&page={$i}\">{$i}</a> ";
		}
	}

	if($pagination->has_next_page()) {
		echo " <a href=\"categories.php?id=10&page=";
		echo $pagination->next_page();
		echo "\">Next &raquo;</a> ";
	}

}
?>

</div>
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>