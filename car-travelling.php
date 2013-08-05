<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>How to Protect Your New Baby in the Car : Crib Sheets : Baby Bedding Town</title>
<meta name="keywords" content="Crib Sheets"/>
<meta name="description" content="Baby Bedding Town provides top quality crib sheets and more - all at everyday discount prices."/>


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
			<strong><font size="3" color="#cc99cc">How to protect your new baby
					in the car</font> </strong>
		</p>
		<p>&#160;</p>
		<p>
			<strong><font size="3" color="#cc99cc">
					<table height="689" width="100%" cellspacing="0" cellpadding="0"
						style="border-collapse: collapse; border: 0px;" id="AutoNumber2">
						<tbody>
							<tr>
								<td height="22" width="100%" valign="top" colspan="2"><font
									face="Verdana" size="2" color="#666666" font="font"><b>Infants
											<i>always</i> need a safety seat in the car, and babies are
											safest when riding facing the rear, because the back of the
											safety seat supports the child's back, neck, and head in a
											crash. So, whichever seat you choose, your baby should ride
											rear-facing until about one year of age and at least 20
											pounds.</b> </font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="100%" valign="top" align="center"
									colspan="2">
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><b>Types
												of seats </b> </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><br />
											Two kinds of safety seats are made for babies: </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Small,
											lightweight "infant-only" safety seats are designed for use
											rear�facing only. This kind can be used only as long as the
											baby's head is enclosed by the top rim of the seat. The label
											on the seat gives the upper weight limit (17 to 22 pounds).
											One seat can be converted into a car bed for babies who must
											lie flat. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Larger
											"convertible" seats usually fit children from birth to about
											40 pounds. Some new models have weight limits as high as 30
											to 32 pounds for rear-facing use. These products are
											especially good for babies under age one who are growing more
											rapidly than average. It may be turned around to face the
											front when the baby is about one year old and at least 20
											pounds. </font>
									</p>
									<p align="left">&#160;</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><b>How
												to choose the best seat for your baby </b> </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><br />
											The simplest and least expensive model usually will work as
											well as one with fancy features. Choose a seat that you find
											easy to use and that fits in your vehicle. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Before
											you buy a seat, try it in your car to make sure it fits and
											can be buckled in tightly. If you choose a convertible seat,
											try it facing both rearward and forward. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Look
											for the seat you can use facing the rear as long as possible.
											Read the labels to check weight limits. If you buy an
											infant-only seat, you will need a convertible seat later.
											Most babies need to use rear-facing convertible seats as they
											get larger, because they outgrow their infant-only seats
											before age one. Some products are made to carry a baby over
											20 pounds facing the rear. Look for a seat with a higher
											weight limit when you shop. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Practice
											buckling the seat into your car before your baby's first
											ride. </font>
									</p>
									<p align="left">&#160;</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><b>More
												tips on choosing a seat </b> </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><br />
											You'll save a little money if you buy one convertible seat to
											do the job from birth to 40 pounds, but an infant-only seat
											may be easier for you to use and may fit your newborn baby
											better. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">An
											infant-only seat can be carried with you wherever you go. It
											can be used at home also. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Some
											infant-only seats come in two parts. The base stays buckled
											in the vehicle, and the seat snaps in and out. You may find
											these convenient. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">If
											you want to use a convertible seat for a newborn baby, choose
											one without a padded shield in front of the baby. Shields do
											not fit small newborn babies properly. The shield comes up
											too high and may make proper adjustment of the harness
											difficult. </font>
									</p>
									<p align="left">&#160;</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><b>What
												about seats for preemies? </b> </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><br />
											A baby born earlier than 37 weeks may need to use a car bed
											if he or she has any possibility of breathing problems when
											sitting semi-reclined. Ask your baby's doctor if your baby
											needs to be tested before discharge for breathing problems.</font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">Use
											a seat with the shortest distances from seat to harness strap
											slots, and from back to crotch strap. Use rolled blankets to
											keep the baby's head from slumping. Never place any extra
											cushioning under or behind the baby. </font>
									</p>
									<p align="left">&#160;</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><b>What
												to do if your baby's head flops forward? </b> </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><br />
											It's important for an infant to ride sitting semi-reclined
											(halfway back or 45 degrees from horizontal). In the car, you
											may find that the safety seat is too upright for a new baby
											who can't hold up his or her head. You can put a tightly
											rolled bath towel under the front edge of the safety seat to
											tilt it back a little so your baby's head lies back
											comfortably. Do not recline it too far. </font>
									</p>
									<p align="left">&#160;</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><b>Harness
												straps must fit snugly on the body </b> </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><br />
											Use lowest harness slots for a newborn infant. Keep the
											straps in the slots at or below your baby's shoulders for the
											rear-facing position. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font"><img
											height="153" width="130" align="right"
											alt="supporting baby's head"
											src="http://www.babybeddingtown.com/images/seatsupport.gif" />It
											is very important for harness straps to fit properly over the
											shoulders and between the legs. Dress your baby in clothes
											that keep legs free. If you want to cover your baby, buckle
											the harness around him first, then put a blanket over him. A
											bulky snowsuit or bunting can make the harness too loose. </font>
									</p>
									<p align="left">
										<font face="Verdana" size="2" color="#666666" font="font">To
											fill empty spaces and give support, roll up a couple of small
											blankets and tuck them in on each side of your baby's
											shoulders and head. If he still slumps down, put a rolled
											diaper between his legs behind the crotch strap. Thick
											padding should not be put underneath or behind the baby.</font>
									</p>
									<p align="left">&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2"><font
									face="Verdana" size="2" color="#666666" font="font"><b>About
											this information:</b> This material was provided by the
										National Highway Traffic Safety Administration.</font></td>
							</tr>
						</tbody>
					</table> </font> </strong>
		</p>
		<p>&#160;</p>
	</div>
</div>
</br class="clear">
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>