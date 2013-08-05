<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>PlayPen and Playard Safety : Young America Cribs : Baby Bedding Town</title>
<meta name="keywords" content="Young America Cribs, Young America Crib"/>
<meta name="description" content="Welcome to Baby Bedding Town, we are committed to providing Young America cribs at the best prices."/>


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
			<span class="Apple-style-span"
				style="border-collapse: separate; color: rgb(204, 153, 204); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: bold; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">PlayPen
				&amp; Playard Safety</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">Deaths have occurred when
					the drop-sides of mesh playpens and cribs were left in the down
					position. When a mesh side is left down, the mesh hangs loosely,
					forming a pocket or gap between the edge of the floor panel and the
					side. Young infants, even a few weeks old can move to the edge and
					fall into the loose mesh pocket where they can be trapped and
					suffocate.<span class="Apple-converted-space">&#160;</span> </font>
			</span>
		</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666"><br /> <br /> New mesh-sided
					playpens with drop-sides have warning labels that alert parents and
					others never to leave infants in playpens with sides in the down
					position. Be aware that older mesh playpens or cribs do not have
					these warning labels. Many of these products are still in use.<span
					class="Apple-converted-space">&#160;</span> </font> </span>
		</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666"><br /> <br /> Deaths have
					also occurred in playpens or travel cribs that have a rotating
					hinge in the center of each top rail to enable the product to be
					folded into a compact package. These deaths resulted when the top
					rails collapsed and formed an acute 'V' shape that entrapped the
					child's neck. </font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">In the entrapment incidents,
					the hinges were either not turned inward and down or they somehow
					rotated during use to the unlocked position. CPSC has recalled
					several brands of playpens with these rotating latches in the
					center of the top rails.<span class="Apple-converted-space">&#160;</span>
			</font> </span>
		</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666"><br /> <br /> Some playpens
					or travel cribs have a hinge at the center of each top rail with a
					latching mechanism that locks automatically when the rail is lifted
					into the normal use position. To fold these products, a button or
					other release mechanism must be used to release the latch. Such
					products, while similar in appearance to those with rotating
					hinges, are not known to have been involved in any fatal entrapment
					incidents.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666"><b>If You're Buying a New
						Playpen</b> </font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font face="Verdana" size="2" color="#666666">1.</font><font
						face="Verdana" size="2" color="#666666">For playpens with a hinge
						in the center of each of the four top rails, look for a playpen or
						travel crib that has top rails that automatically lock when lifted
						into the normal use position.</font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<font face="Verdana" size="2" color="#666666">2.</font><font
				face="Verdana" size="2" color="#666666">Look for mesh netting with a
					very small weave (less than 1/4 inch)-smaller than the tiny buttons
					on a baby's clothing.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">3.</font><font
				face="Verdana" size="2" color="#666666">Slat spaces on a wooden
					playpen should be no more than 2-3/8 inches (60 mm) in width.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666"><b>If You Already Have a
						Playpen<span class="Apple-converted-space">&#160;</span> </b>or
					Are Buying One Secondhand</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">1.</font><font
				face="Verdana" size="2" color="#666666">Check the slat spacing on
					older, wooden playpens. The Commission does not recommend using it
					if the space between slats is more than 2-3/8 inches (60 mm).</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">2.</font><font
				face="Verdana" size="2" color="#666666">Check to see if it has a
					hinge at the center of each top rail that must be turned toward the
					inside of the crib and down to prevent folding. CPSC does not
					recommend that you use this type of product.&#160;</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font face="Verdana" size="2" color="#666666"><b>Some Safety Tips</b>
					</font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<font face="Verdana" size="2" color="#666666">1.</font><font
				face="Verdana" size="2" color="#666666">Always show
					babysitter/caregiver how to properly set up playpen according to
					the manufacturer's instructions. Improper setup can cause the
					playpen to collapse, resulting in injury or death to the child.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">2.</font><font
				face="Verdana" size="2" color="#666666">Never leave an infant in a
					mesh playpen or crib with the drop-side down. Infants can roll into
					the space between the mattress and loose mesh side and suffocate.
					Even when a child is not in a playpen, leave the drop-side up.
					Children may try to climb back into a playpen and cut or pinch
					their fingers on the unlocked hinge mechanism.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">3.</font><font
				face="Verdana" size="2" color="#666666">Remove large toys, bumper
					pads, or boxes from inside the playpen. They can be used for
					climbing out.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">4.</font><font
				face="Verdana" size="2" color="#666666">Avoid tying any items across
					the top or corner of the playpen; they can be a strangulation
					hazard.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">5.</font><font
				face="Verdana" size="2" color="#666666">Toys should not be hung from
					the sides with strings or cords because they could wrap around a
					child's neck. Use another method for attaching the toys to the
					playpen.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">6.</font><font
				face="Verdana" size="2" color="#666666">Children may use the top
					rail of the playpen for teething. Check vinyl or fabric-covered
					rails frequently for holes and tears. A teething child can chew off
					pieces and choke.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">7.</font><font
				face="Verdana" size="2" color="#666666">If staples are used to
					attach the mesh side to the floor plate, make sure none are loose
					or missing.</font> </span>
		</p>
		<p>&#160;</p>
		<p>&#160;</p>
	</div>
</div>
</br class="clear">
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>