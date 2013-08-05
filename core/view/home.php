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
<h4>HEADER 1</h4>
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum 
zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil 
imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis.
</p>

<div class="featured">
<h3>FEATURED products</h3>

  <?php for($x=1; $x<=2; $x++): ?>
  <div class="pull-left" style="padding:10px;">
    <a><img width="280px" class="img-polaroid" src="<?php html::p(MCHN_DIR_ASSETS."img/bbt-sample.jpg"); ?>" alt=""></a>
    <br><br>
    <center><input type="submit" class="btn btn-info btn-mini" value="ADD TO CART"/></center>
  </div> 
  <?php endfor; ?>     

  <div style="clear:both"></div>
  <?php foreach( $products as $row):?>
    <a class="product-container-link" href="./products.php?id=<?php html::p($row["id"]) ?>">
    <div class="pull-left well product-container">
      <center>
      <img width="180" src="<?php html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); ?>" />
      <br><br>
      <b><?php html::p($row["name_short"]) ?></b>
      <div>Price: <b><?php html::p($row["price"]) ?></b></div>
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
  <div style="clear:both"></div>
</div>

<h4>HEADER 2</h4>
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum 
zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil 
imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis.
</p>

<div class="featured">
<h3>NEW products</h3>
<?php for($x=1; $x<=2; $x++): ?>
<div class="pull-left" style="padding:10px;">
  <a><img width="280px" class="img-polaroid" src="<?php html::p(MCHN_DIR_ASSETS."img/bbt-sample.jpg"); ?>" alt=""></a>
  <br><br>
  <center><input type="submit" class="btn btn-info btn-mini" value="ADD TO CART"/></center>
</div> 
<?php endfor; ?>     

<div style="clear:both"></div>

<?php foreach( $products as $row):?>
  <a class="product-container-link" href="./products.php?id=<?php html::p($row["id"]) ?>">
  <div class="pull-left well product-container">
    <center>
    <img width="180" src="<?php html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); ?>" />
    <br><br>
    <b><?php html::p($row["name_short"]) ?></b>
    <div>Price: <b><?php html::p($row["price"]) ?></b></div>
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
<div style="clear:both"></div>
</div>

<br>
</div>


<?php else: ?>
<?php foreach( $products as $row):?>
<div class="span5">
  <img width="500" src="<?php html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); ?>" />
</div>
<div class="span7">
  <h2><?php html::p(ucwords($row["name_short"])) ?></h2>
  <div style="color:red;font-size:32px;"<b>$<?php html::p($row["price"]) ?></b></div>
  <br>
  <ul id="myTab" class="nav nav-tabs">
    <li class="active"><a href="#Description" data-toggle="tab">Description</a></li>
    <li class=""><a href="#Comments" data-toggle="tab">Comments</a></li>
  </ul>
  <div id="myTabContent" class="tab-content" style="min-height:350px;">
    <div class="tab-pane fade active in" id="Description">
      <p><?php html::p($row["description_long"]) ?></p>
    </div>
    <div class="tab-pane fade" id="Comments">
      <p><?php html::p($row["comments"]) ?></p>
    </div>
  </div>
  <br>
  <form action="./cart.php" method="post">
    <input type="hidden" name="item" value="<?php html::p($row["id"]) ?>"/>
    <div><input type="hidden" name="quantity" value="1" /></div>
    <input type="hidden" name="direction" value="fromCart"/>      
    <input type="submit" class="btn btn-info btn-medium" value="ADD TO CART"/>
  </form>
</div>
<?php endforeach; ?>

<?php endif; ?>
</div>