<?php include('mchn.config.php'); ?>
<?php ob_start();?>
<?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
<?php 
$buffer = ob_get_contents();
ob_end_clean();
if(!empty($gp['id']))
{
	$products = products::getProducts($gp['id']);
	$category = category::getCategory($products[0]['category_id']);
	$buffer =str_replace("%BBT2013%", $products[0]['name_short'] .",".$category[0]['name_short'] . ", by BabyBeddingTown.com", $buffer);
} else {
	$buffer =str_replace("%BBT2013%", "Baby Bedding Sets : Crib Sheets : Nursery Boy Bedding : Cribs for Babies : Stanley Kids Furniture : Baby Bedding Town", $buffer);
}
echo $buffer;
?>
<div class="row-fluid">

<?php 
// PRODUCTS SELECT FROM DATABASE
if(!empty($gp['id']))
{ 
  $products = products::getProducts($gp['id']);
}
else
{
  $products = products::getProductsTop();
}
?>

<?php if(empty($gp['id'])): ?>
<div class="span3">
<?php include('sidebar.php'); ?>
</div>
<div class="span9">
  <h4>PRODUCTS</h4>
  <p>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
  ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
  vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum 
  zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil 
  imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis.
  </p>

  <?php foreach( $products as $row):?>
  <a class="product-container-link" href="./products.php?id=<?php html::p($row["id"]) ?>">
    <div class="pull-left well product-container">
      <center>
      <img style="width: 400px; height: 300px;" src="<?php 
      if(empty($row['image_small']))
      {
              html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
      }
      else
      {
              echo $row['image_small']; 
      }?>" />
      <br><br>
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
        <input type="hidden" name="item" value="<?php html::p(number_format($row["price"],2,".",",")) ?>"/>
        <div><input type="hidden" name="quantity" value="1" /></div>
        <input type="hidden" name="direction" value="fromCart"/>      
        <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART"/>
      </form>
      </center>
    </div>
    </a>

  <?php endforeach; ?>
</div>

<?php else: ?>
<?php foreach( $products as $row):?>
<div class="span5">
  <img width="500" src="<?php 
      if(empty($row['image_small']))
      {
              html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
      }
      else
      {
              echo $row['image_large']; 
      }?>" />
</div>
<div class="span7">
  <h2><?php html::p(ucwords($row["name_long"])) ?></h2>
  <div style="color:red;font-size:32px;">
  		<b>$<?php html::p(number_format($row["price"],2,".",",")) ?></b>
  		<div style="float: right">
		<?php
		//add to cart button
		$addtoCartForm  = '<form action="./cart.php" method="post">
		    <input type="hidden" name="item" value="' . $row["id"] . '"/>
		    <div><input type="hidden" name="quantity" value="1" /></div>
		    <input type="hidden" name="direction" value="fromCart"/>      
		    <input type="submit" class="btn btn-info btn-medium" value="ADD TO CART"/>
		  </form>';
		if($row['status'] == 1)
		{
			echo $addtoCartForm;	
		}
		
		?>
		</div>
  </div>
  <br>
  
  <ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#Description" data-toggle="tab">Description</a></li>
  </ul>
  <div id="myTabContent" class="tab-content" style="min-height:350px;">
    <div class="tab-pane fade active in" id="Description">
      <p><?php echo($row["description_long"]) ?></p>
    </div>
    <div class="tab-pane fade" id="Comments">
      <p><?php html::p($row["comments"]) ?></p>
    </div>
  </div>
  <br>
	<?php
	if($row['status'] == 1)
	{
		echo $addtoCartForm;
	}
	else 
	{
		echo 'Sorry, this product is currently not available for purchase.';
	}
	?>
</div>
<?php endforeach; ?>

<?php endif; ?>
</div>
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>