<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>High Chair Safety : Baby Furniture : Baby Bedding Town</title>
<meta name="keywords" content="Baby Furniture"/>
<meta name="description" content="Baby Bedding Town provides top quality designer baby furniture and more - all at everyday discount prices."/>


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
		<p>
			<span
				style="border-collapse: separate; color: rgb(204, 153, 204); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span">High Chair Safety</span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">Each year, thousands of children are treated in
					hospital emergency rooms for injuries associated with high chairs.
					Deaths also occur. The majority of the injuries result from falls
					when restraining straps are not used and when children are not
					closely supervised. The majority of deaths occurred when children
					slipped down under the tray and strangled. Most often, these
					children were either unrestrained or were restrained only by a
					waist belt.<span class="Apple-converted-space">&#160;</span><br />
					<br /> To help prevent injuries and deaths, high chairs should have
					a waist strap and a strap that runs between the legs. While in the
					high chair, children should ALWAYS be restrained by both straps.
					The tray should not be used as a restraining device in place of the
					straps.<span class="Apple-converted-space">&#160;</span><br /> <br />
					Without these two straps, children can stand in the chair seat and
					topple from the chair, or slide under the tray and strangle on the
					waist strap or when their heads become trapped between the tray and
					the chair seat.<span class="Apple-converted-space">&#160;</span><br />
					<br /> Other accidents occur when the chair tips over. High chairs
					may tip if an active child pushes off from a table or wall, stands
					up in the high chair, or rocks it back and forth.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666"><b>If You're Buying a New High Chair</b> </font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span">
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font face="Verdana" size="2" color="#666666">1.</font><font
						face="Verdana" size="2" color="#666666">Select one that has a wide
						base for stability.&#160;</font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<font face="Verdana" size="2" color="#666666">2.</font><font
				face="Verdana" size="2" color="#666666">Examine the restraining
					straps to ensure that the waist belt has a buckle that cannot be
					fastened unless the crotch strap is also used.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">3.</font><font face="Verdana" size="2"
				color="#666666">Since the restraining straps must be used every time
					a child is placed in the chair, look for straps that are easy to
					use. If the straps are difficult to fasten, you might not use them.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">4.</font><font face="Verdana" size="2"
				color="#666666">Consider a high chair that has a post between the
					child's legs to prevent the child from slipping down and becoming
					trapped under the tray</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666"><b>If You Already Have a High Chair<span
						class="Apple-converted-space">&#160;</span> </b>or Are Buying One
					Secondhand</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">1.</font><font face="Verdana" size="2"
				color="#666666">Check the condition of straps and their attachments
					to make sure they are securely attached and work properly.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">2.</font><font face="Verdana" size="2"
				color="#666666">If the high chair does not have adequate safety
					straps, contact the manufacturer for replacement.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span">
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font face="Verdana" size="2" color="#666666"><b>Some Safety Tips</b>
					</font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<font face="Verdana" size="2" color="#666666">1.</font><font
				face="Verdana" size="2" color="#666666">ALWAYS USE ALL RESTRAINING
					STRAPS PROVIDED. The crotch strap and belt around the waist should
					be fastened as soon as a child is placed in the chair and
					unfastened only when the child is removed. Remember, the feeding
					tray is not a restraint. Only safety straps keep the child from
					climbing out or sliding down and strangling.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">2.</font><font face="Verdana" size="2"
				color="#666666">Be sure that the locking device on a folding high
					chair is locked each time you set up the chair.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">3.</font><font face="Verdana" size="2"
				color="#666666">Never allow a child to stand up in a high chair.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">4.</font><font face="Verdana" size="2"
				color="#666666">Don't stray too far from the high chair - especially
					if the child has shown an ability to unfasten safety straps.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">5.</font><font face="Verdana" size="2"
				color="#666666">Keep the high chair far enough away from a table,
					counter, wall, or other surface so that a child can't use them to
					push off.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">6.</font><font face="Verdana" size="2"
				color="#666666">Don't let children play around a high chair or climb
					into it unassisted.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span"><font face="Verdana" size="2"
				color="#666666">7.</font><font face="Verdana" size="2"
				color="#666666">Don't let older children hang on to a high chair
					while a baby is in it. The high chair could tip over.</font><font
				face="Verdana" size="2" color="#666666">10.</font> </span>
		</p>
		<p>&#160;</p>
		<p>&#160;</p>
	</div>
</div>
</br class="clear">

<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>