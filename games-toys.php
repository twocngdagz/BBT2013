<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Choosing Safe Baby Toys : Baby Bedding Town</title>
<meta name="keywords" content="Safe Baby Toys"/>
<meta name="description" content="Welcome to Baby Bedding Town, we are committed to providing safe baby toys at the best prices."/>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>gngnm/css/gngnm.min.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/css/flexigrid.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/css/flexigrid.pack.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>slider/css/feature-carousel.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/css/smoothness/jquery-ui-1.9.1.custom.min.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_ASSETS)  ?>css/style.css">


<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/js/jquery-1.9.0.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/js/jquery-ui-1.10.0.custom.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/js/flexigrid.pack.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/js/flexigrid.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>gngnm/js/gngnm.min.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>angular/js/angular.min.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>slider/js/jquery.featureCarousel.js"></script>

<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v1/"></script>

</head>
<body>
<?php
  $role = array (
  # ADMIN
  "1" => array (
        "users" => "Users", 
        "brands" => "Brands", 
        "vendors" => "Vendors", 
        "category" => "Category", 
        "products" => "Products", 
        "orders"=> "Orders",
        "customers" => "Customers"
        ),
  # MANAGER
  "2" => array (
        "brands" => "Brands", 
        "vendors" => "Vendors"
        ),
  # CUSTOMER SUPPORT LEVEL 2
  "3" => array (
        "brands" => "Brands", 
        "vendors" => "Vendors"
        ),
  # CUSTOMER SUPPORT
  "4" => array (
        "brands" => "Brands", 
        "vendors" => "Vendors"
        ),
  # USER
  "5" => array (
        )
  );
?>

<style>
  .pcontrol input, .pGroup select {
    width:40px;
    height: 20px;
  }
  
  .pGroup select {
    width:60px;
    height: 30px;
  }
  
  .pDiv {
    height: 40px;
  }
  
  .container {
  }
</style>
<?php include (MCHN_DIR_HTML . 'html.navigation.php'); ?>
<?php $serverHome = explode("/", $_SERVER['PHP_SELF']); ?>

<?php if(in_array('index.php', $serverHome)): ?>
<div id="bbtCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php html::p(MCHN_DIR_ASSETS."img/carousel/baby-sleeping.jpg"); ?>" alt="">
      <div class="container">
        <h1 style="margin-top:150px;">SAMPLE HEADINGS</h1>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<?php endif; ?>

<div class="header-bar">
<div class="container">
  <div class="row-fluid"> 
    <div class="span12">
      <div class="pull-left" style="margin-top:15px;">
      <a href=""><img src="<?php html::p(MCHN_DIR_ASSETS."img/facebook.png"); ?>" alt=""></a>
      <a href=""><img src="<?php html::p(MCHN_DIR_ASSETS."img/twitter.png"); ?>" alt=""></a>
      &nbsp;
      </div>  
      <div style="width:200px;" class="pull-left">
        BABY BEDDING TOWN
        Ut wisi enim ad minim veniam, quis nostrud exerci tation
        <a href="#">bbt2013.alorit.com</a>
      </div>
      <div class="pull-right">
        <div class="input-append" style="margin-top:15px;">
          <input class="span10" id="appendedInputButtons" type="text">
          <button class="btn" type="button"><i class="icon-search"></i></button>
        </div>  
      </div>
    </div>
  </div>
</div>
</div>
<div class="container" style="margin-top:-20px;z-index:-1px;">
<img src="<?php html::p(MCHN_DIR_ASSETS."img/shadow-head.png"); ?>" alt="">
</div>

  
<div class="container" style="min-height:600px;">
  <div class="row-fluid"> 
    <div class="span12">

<div class="row-fluid">
	<div class="span3">
	<?php include('sidebar.php'); ?>
	</div>
	<div class="span9">
		<p>&#160;</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: separate; color: rgb(204, 153, 204); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span">Choosing Safe Baby Toys</span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span">
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font face="Verdana,Arial,Helvetica" size="2" color="#666666"
						font="font"><b>From the beginning of a child's life, products
							intended for a child must be selected with safety in mind. More
							infants die every year in accidents involving cribs than with any
							other nursery product. Thousands of infants are injured seriously
							enough to require treatment in hospital emergency rooms. This
							article discusses baby rattles, squeeze toys and teethers.</b> </font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<font face="Verdana" size="2" color="#666666"><b>Some Safety Tips</b>
			</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">1.</font><font face="Verdana,Arial,Helvetica"
				size="2" color="#666666" font="font">Check all rattles, squeeze toys
					and teethers for small ends that could extend into the back of the
					baby's mouth. If you feel that the toy may be too small for safety,
					throw it away.</font><font face="Verdana" size="2" color="#666666">2.</font><font
				face="Verdana,Arial,Helvetica" size="2" color="#666666" font="font">Take
					rattles, squeeze toys, teethers, and other small objects out of the
					crib or playpen when the baby sleeps.</font><font face="Verdana"
				size="2" color="#666666">3.</font><font
				face="Verdana,Arial,Helvetica" size="2" color="#666666" font="font">Teethers,
					like pacifiers, should never be fastened around a baby's neck.</font><font
				face="Verdana" size="2" color="#666666">4.</font><font
				face="Verdana,Arial,Helvetica" size="2" color="#666666" font="font">Avoid
					rattles and squeeze toys with ball-shaped ends.</font><font
				size="2" color="#666666">10.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666"><b>About this article:</b><span
					class="Apple-converted-space">&#160;</span>This material was
					prepared by The Consumer Product Safety Commission. The Commission
					has several ways to keep you informed. The Commission publishes
					Safety Alerts and recall notices, has a Hotline service
					(1-800-638-2772, TTY: 1-800-638-8270) and has a Website page (<a
					style="text-decoration: none; font-style: normal; font-weight: normal; color: rgb(51, 51, 51);"
					target="_new" href="http://www.cpsc.gov/">www.cpsc.gov</a>).</font>
			</span>
		</p>
	</div>
</div>
</br class="clear"><?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>