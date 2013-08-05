<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Choosing the Right Car Seat for Your Child : Baby Bedding Town</title>
<meta name="keywords" content="Choosing the Right Car Seat for Your Child"/>
<meta name="description" content="Baby Bedding Town is a large selection of high quality car seat to customers in one location."/>


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
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">â€¹</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">â€º</a>
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
		<p>
			<span style="font-size: medium;"><span
				style="color: rgb(255, 153, 204);"><strong>Choosing the Right Car
						Seat for Your Child</strong> </span> </span>
		</p>
		<p>&#160;</p>
		<h3>&#160;</h3>
		<p>
			<span style="font-size: medium;">
				<h3>
					<span style="color: rgb(153, 153, 153);">General Safety Rules<br />
					</span>
				</h3> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">1. The back seat is the
						safest riding area for a child.<br /> 2. When installing a car
						seat, make sure<br /> 1. Your child is seated appropriately and
						buckled-in comfortably.<br /> 2. The car seat is secured tightly
						into your vehicle’s seat.<br /> Always read your car seat manual
						as well as your car manual for proper installation instructions.<br />
						3. When in doubt, always refer to your car safety seat manual for
						proper guidance.<br /> 4. Only buy car safety seats that comply
						with the Federal Motor Vehicle Safety Standards (FMVSS).</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Various car seats exist,
						each with their own set of characteristics designed for different
						child specifications. Following, is a list of the diverse car
						seats together with their proper descriptions. Choose the
						appropriate car safety seat for your child accordingly.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">&#160;</span>
				</p> </span>
		</p>
		<h3>&#160;</h3>
		<p>
			<span style="font-size: medium;">
				<h3>
					<span style="color: rgb(153, 153, 153);">Rear-Facing Seats<br /> </span>
				</h3> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);"><br /> Infants should
						continue to ride in rear-facing seats until they have fulfilled
						two requirements: one being they have reached 1 year of age, and
						the second being they have come to weigh 20 pounds or more.
						Rear-facing car seats can be divided into two categories, each
						with their own unique set of features.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">1. Infant-Only Seats:<br />
						Small in size, with a 3-point or 5-point harness.<br /> Can only
						be ridden by infants weighing 20 to 22 pounds. <br /> (Check model
						specifications). <br /> Most have carrying handles and a
						detachable base.<br /> 2. Convertible Seats: <br /> Fairly larger
						in size than infant rear-facing seats, thus making it<br /> ideal
						for older/larger children. <br /> Can be placed facing forward. <br />
						Can come with one of three harness styles:<br /> 5-point harness,
						T-shield, Overhead shield.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Often times, a child comes
						to weigh 20 pounds or more before his/her first birthday. Still,
						your child is not ready to be placed in a forward-facing seat. Opt
						for a convertible seat that can be used rear-facing. Rear-Facing
						Seats Precautions and Suggestions <br /> 1. Do not place a
						rear-facing seat in the front seat if this has an airbag. <br />
						2. Choosing a car seat with more than one set of harness slots and
						adjustable shields or buckles provides growing room for your
						child. Keep in mind, harness slots should be located either at or
						below your child's shoulders. <br /> 3. Additional car seat
						features can assist with proper installation such as a built-in
						angle adjuster and angle indicator. The LATCH (Lower Anchors and
						Tethers for Children) system facilitates installation.</span>
				</p> </span>
		</p>
		<p>
			<span style="font-size: medium;">&#160;</span>
		</p>
		<h3>&#160;</h3>
		<p>
			<span style="font-size: medium;">
				<h3>
					<span style="color: rgb(153, 153, 153);">Forward-Facing Seats<br />
					</span>
				</h3> </span>
		</p>
		<p>
			<span style="font-size: medium;">&#160;</span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">When your child has turned
						1 year of age and has come to weigh 20 pounds or more, he/she can
						now ride in a forward-facing car seat if his/her height and weight
						measurements comply with the specific seat's requirements. Four
						types of seats can be used forward-facing including forward-facing
						only, convertible, booster, and a combination of both
						forward-facing and booster seats.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Convertible Seats: <br />
						3 adjustments must be made if you previously positioned your
						convertible seat towards the rear.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">1. Place the shoulder
						straps through the slots at or above your child's shoulders. <br />
						2. Readjust the seat from a reclined to an upright position, if
						required by model. <br /> 3. The seat belt must run through the
						forward-facing belt path.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Booster Seats: <br /> Your
						child is ready to use a booster seat if: <br /> He/she has reached
						the maximum weight/height designated for the seat. <br /> His/her
						shoulders are now above the harness slots. <br /> His/her ears
						have reached the top of the seat.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Booster seats are intended
						to make your vehicle’s lap/shoulder belt fit correctly over your
						child, meaning the lap belt lies at and sustains your child’s
						thighs, and the shoulder strap crosses over your child’s shoulder
						and middle chest.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Forward-Facing/Booster
						Seats: <br /> Certain car seats combine features of both
						forward-facing and booster seats. These come with harness straps
						suitable for children weighing between 40 and 50 pounds. When your
						child has reached the required height/weight, the seat can be
						converted into a booster seat by removing the harness straps and
						securing your child with your automobile’s lap/shoulder belt.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Using only a lap belt
						works fine for infant-only, convertible and forward-facing seats.
						A lap belt is not enough, however, for booster seats. If your
						vehicle only comes with lap belts, use a forward-facing car seat
						with a harness or consider using a travel vest.</span>
				</p> </span>
		</p>
		<p>
			<span style="font-size: medium;">&#160;</span>
		</p>
		<h3>&#160;</h3>
		<p>
			<span style="font-size: medium;">
				<h3>
					<span style="color: rgb(153, 153, 153);">Seat Belts<br /> </span>
				</h3> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);"><br /> Children are
						usually apt to use seat belts when they are between the ages of 8
						and 12, and measure about 4’9” in height.</span>
				</p> </span>
		</p>
		<p>&#160;</p>
		<p>
			<span style="font-size: medium;">
				<p>
					<span style="color: rgb(153, 153, 153);">Your child must satisfy
						three requisites before using a seat belt: <br /> The shoulder
						belt must cross over his/her shoulder and mid-chest. It should not
						lie on your child’s neck. The lap belt must fall low across
						his/her thighs. It should not lay on the stomach. Your child can
						comfortably sit back in the vehicle’s seat with knees bent and
						feet hanging.</span>
				</p> </span>
		</p>
		<p>
			<span style="font-size: medium;"><span
				style="color: rgb(153, 153, 153);">The previous guidelines and
					suggestions were inspired by <a
					href="http://www.aap.org/family/carseatguide.htm">www.aap.org/family/carseatguide.htm</a>
			</span> </span>
		</p>
	</div>
</div>
</br class="clear">
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>