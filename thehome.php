<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Childproofing Your Home : Stanley Baby Furniture : Baby Bedding Town</title>
<meta name="keywords" content="Stanley Baby Furniture, Baby Furniture"/>
<meta name="description" content="Welcome to Baby Bedding Town, we are committed to providing Stanley baby furniture at the best prices."/>


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
				class="Apple-style-span">Childproofing Your Home</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				size="2" color="#666666"><b><font face="Verdana">Baby Gates</font> </b>
			</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font face="Verdana" size="2" color="#666666">Baby gates are used
						at the top and bottom of stairs or in open doorways to prevent
						toddlers from falling or entering unsafe areas. But some baby
						gates themselves are dangerous. The Commission warns parents and
						others who care for children that an entrapment and strangulation
						hazard exists with accordion-style baby gates that have large
						V-shaped openings along the top edge and diamond-shaped openings
						between the slats. CPSC knows of deaths that occurred when
						children's heads were entrapped in the V-shaped or diamond-shaped
						openings when they attempted to crawl through or over the gates.
						Although these hazardous accordion-style baby gates have not been
						sold since 1985, you may still find them at yard sales or in
						thrift stores.</font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
					<font size="2" color="#666666"><b><font face="Verdana">If You Will
								Be Using a Baby Gate</font> </b> </font>
				</p>
				<p align="left"
					style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</p>
				<font face="Verdana" size="2" color="#666666">Choose a gate with a
					straight top edge and rigid bars or mesh screen, or an
					accordion-style gate with small V-shapes and diamond-shaped
					openings. Entrances to V-shapes should be no more than 1-1/2 inches
					(38 mm) in width to prevent head entrapment.<br /> <br /> Be sure
					the baby gate is securely anchored in the doorway or stairway it is
					blocking. Children have pushed gates over and fallen down stairs.<span
					class="Apple-converted-space">&#160;</span><br /> <br /> Gates that
					are retained with an expanding pressure bar should be installed
					with this bar on the side away from the child. A pressure bar may
					be used as a toehold by a child to climb over a gate. Pressure
					gates are not recommended at the top of stairways. CPSC is aware of
					a number of incidents where pressure gates have popped out of
					openings at the top of stairs resulting in children falling down
					stairs.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				size="2" color="#666666"><b><font face="Verdana">General Household
							Tips</font> </b> </font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">1.</font><font
				face="Verdana" size="2" color="#666666">Other children's products:
					Drawstrings on children's clothing pose strangulation and
					entanglement hazards. Hood or neck drawstrings can strangle a child
					if they get caught on such items as playground equipment or cribs.
					Remove drawstrings from hood and the neck area of outerwear
					including jackets and sweatshirts. CPSC recommends that consumers
					purchase children's outerwear with alternative closures, such as
					snaps, buttons, or Velcro, instead of long, loose drawstrings.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">2.</font><font
				face="Verdana" size="2" color="#666666">Dressers and shelves: Young
					children can be killed when furniture tips over. These children can
					climb on a lower drawer that has been pulled out and use it as a
					step. This can cause the dresser to tip over. Use latches on lower
					drawers to ensure that drawers are not opened by young children or
					use angle braces or anchors to secure furniture to a wall.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">3.</font><font
				face="Verdana" size="2" color="#666666">Toys: Babies use their
					mouths to learn about the world around them. At two months old they
					can usually grip small objects. Keep tiny objects out of reach of
					your baby, especially SMALL BALLS, MARBLES and BALLOONS. Smooth
					round objects present the highest risk of choking. Uninflated
					balloons and balloon pieces can easily be inhaled into the lungs.
					Be sure to check the labeling on the toy for the appropriate age
					for safe use.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">4.</font><font
				face="Verdana" size="2" color="#666666">To prevent poisoning:
					Children may try to eat cake deodorizers used in pails (such as
					diaper pails). Keep containers that use these deodorizers securely
					closed. Child-resistant packaging is not child proof. Keep all
					medicines, iron-containing vitamins and household cleaning
					products, including those with child-resistant packaging, locked
					away from children. Keep poisonous plants out of children's reach.</font>
			</span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">5.</font><font
				face="Verdana" size="2" color="#666666">To prevent burns, other
					injuries: Use your stove's back burners and keep pot handles turned
					to the back of the stove. Lock up knives, matches, cigarette
					lighters and plastic bags away from children</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">6.</font><font
				face="Verdana" size="2" color="#666666">Do not place plastic
					climbing equipment indoors on hard surfaces. Falls on cement, tile,
					and other hard floors, even covered with carpet, can result in
					serious head injury and death. Use these only outdoors on
					shock-absorbing surfaces such as mulch or sand. Grass is not
					considered a shock-absorbing surface.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">7.</font><font
				face="Verdana" size="2" color="#666666">Fire hazards: Install smoke
					detectors on each floor of your home, especially near sleeping
					areas; test them on a regular basis and change the batteries each
					year, or when a "chirping" sound is heard.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">8.</font><font
				face="Verdana" size="2" color="#666666">Electric hazards: Use safety
					plugs to cover electrical outlets, and keep all loose hanging wires
					and appliance cords out of reach of children. Use ground fault
					circuit interrupters devices to protect outlets in basement,
					kitchen, bathroom, garage, and outdoor.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">9.</font><font
				face="Verdana" size="2" color="#666666">Carbon monoxide poisoning:
					Make sure all fuel burning appliances are properly installed, used,
					and maintained annually at the start of the heating season. Do not
					leave vehicles running in garages. Install at least one CO detector
					that meets the requirement of the most recent UL standard.</font> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span class="Apple-style-span"
				style="border-collapse: collapse; color: rgb(0, 0, 0); font-family: Verdana; font-size: 16px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><font
				face="Verdana" size="2" color="#666666">10.</font><font
				face="Verdana" size="2" color="#666666">For information on
					children's car seats and Auto Safety Hotline, contact the National
					Highway Traffic Safety Administration, 1-800-424-9393, 202-366-0123
					(Washington, DC area only). Its Website page is www.nhtsa.dot.gov</font><font
				face="Verdana" size="2" color="#666666">11.</font><font
				face="Verdana" size="2" color="#666666">CPSC has many other
					publications that have more information about these tips, visit<span
					class="Apple-converted-space">&#160;</span><a
					href="http://www.cpsc.gov/" style="color: rgb(51, 51, 51);">www.cpsc.gov</a>
			</font> </span>
		</p>
		<p>&#160;</p>
		<p>&#160;</p>
		<p>&#160;</p>
	</div>
</div>
</br class="clear">

<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>