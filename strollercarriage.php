<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Choosing a Safe Stroller or Baby Carriage : Baby Bedding Town</title>
<meta name="keywords" content="Safe Stroller, Baby Carriage"/>
<meta name="description" content="Baby Bedding Town is a large selection of high quality safe stroller or baby carriage to customers in one location."/>


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
			<strong><font size="3"><font color="#cc99cc">Choosing a Safe Stroller
						or Baby Carriage</font><font color="#cc99ff"> </font> </font> </strong>
		</p>
		<p>&#160;</p>
		<p>
			<strong><font size="3"><font color="#cc99ff">
						<table height="689" width="100%" cellspacing="0" cellpadding="0"
						style="border-collapse: collapse; border: 0px;" id="AutoNumber2">
							<tbody>
								<tr>
									<td height="22" width="100%" valign="top" colspan="2"><font
										size="2" color="#666666"><b><font face="Verdana">From the
													beginning of a child's life, products intended for a child
													must be selected with safety in mind. Parents and
													caretakers of babies and young children need to be aware of
													many potential hazards in the child's environment hazards
													from incorrect use of products or with products not well
													designed for their intended purpose. The article below
													discusses what you neeed to know about stroller and baby
													carriage safety.</font> </b> </font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="100%" valign="top" align="center"
										colspan="2"><p align="left">
											<font face="Verdana" size="2" color="#666666"><b>The Risks</b>
											</font>
										</p>
										<p align="left">&#160;</p>
									</td>
								</tr>
								<tr>
									<td height="20" width="100%" valign="top" align="center"
										colspan="2"><p align="left">
											<font face="Verdana" size="2" color="#666666">Deaths have
												resulted when infants were left to sleep in strollers with
												the backrest reclined to the carriage position. The infants
												moved (wriggled) feet first towards the front of the
												stroller and, when their bodies passed through the opening
												between the handrest (grab bar) and front edge of the seat,
												they became trapped by the head and strangled.</font>
										</p>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="center">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="100%" valign="top" align="left"
										colspan="2"><p>
											<font face="Verdana" size="2" color="#666666"><b>If You Are
													Buying a Stroller or Carriage</b> </font>
										</p>
										<p>&#160;</p>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">1.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">If you choose a stroller that has a handrest
											(grab bar) at the front of the seat, make sure the opening
											between grab bar and seat can be closed when it is used in
											the reclined carriage position.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">2.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">If a stroller has a shopping basket for
											carrying packages, it should be low on the back of the
											stroller and in front of (or directly over) the rear wheels.
											Hanging pocketbooks or shopping bags over handles may cause
											tipping.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">3.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">Check the seat belt to make sure it is strong
											and durable, fits snugly around your child, and can be easily
											fastened and unfastened. Use the seat belt each time you
											place the baby in the stroller.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">4.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">Check the seat belt to make sure it is strong
											and durable, fits snugly around your child, and can be easily
											fastened and unfastened. Use the seat belt each time you
											place the baby in the stroller.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="center">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="100%" valign="top" colspan="2"><p>
											<font face="Verdana" size="2" color="#666666"><b>Some Safety
													Tips</b> </font>
										</p>
										<p>&#160;</p>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">1.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">Close the opening between handrest (grab bar)
											and seat when using a stroller in the reclined carriage
											position.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">2.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">When folding or unfolding a stroller, keep
											your child away from it. Children's fingers have been
											amputated in parts of the folding mechanism.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">3.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">Always secure the seat belt.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">4.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">Never leave a child unattended in a stroller,
											especially when the baby is asleep.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">5.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">A stroller is not a toy. Never allow children
											to use one as a plaything.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right"><font
										face="Verdana" size="2" color="#666666">6.</font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">A stroller is not a toy. Never allow children
											to use one as a plaything.</font>
									</td>
								</tr>
								<tr>
									<td height="20" width="1" valign="top" align="right">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="100%" valign="top" colspan="2"><p>
											<font face="Verdana" size="2" color="#666666"><b>Checklist
													for Strollers or Baby Carriages</b> </font>
										</p>
										<p>&#160;</p>
									</td>
								</tr>
								<tr>
									<td height="19" width="100%" valign="top" colspan="2"><font
										face="Verdana" size="2" color="#666666">Use this checklist as
											your guide when buying new or secondhand strollers or
											carriages, or when you evaluate the product now being used by
											your baby or young child.</font>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="20" width="100%"><p align="left">&#160;</p>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top"><font face="Verdana"
										size="2" color="#666666"><input type="checkbox" name="C1"
											value="ON" /> </font>
									</td>
									<td height="20" width="100%"><font face="Verdana" size="2"
										color="#666666">Stroller has wide base to prevent tipping.</font>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="20" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top"><font face="Verdana"
										size="2" color="#666666"><input type="checkbox" name="C12"
											value="ON" /> </font>
									</td>
									<td height="20" width="100%"><p align="left">
											<font face="Verdana" size="2" color="#666666">Seat belt and
												crotch strap are securely attached to frame.</font>
										</p>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="19" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top"><font face="Verdana"
										size="2" color="#666666"><input type="checkbox" name="C12"
											value="ON" /> </font>
									</td>
									<td height="19" width="100%"><p align="left">
											<font face="Verdana" size="2" color="#666666">Seat belt
												buckle is easy to use.</font>
										</p>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="19" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top"><font face="Verdana"
										size="2" color="#666666"><input type="checkbox" name="C12"
											value="ON" /> </font>
									</td>
									<td height="19" width="100%"><font face="Verdana" size="2"
										color="#666666">Brakes securely lock the wheel(s).</font>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="19" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top"><font face="Verdana"
										size="2" color="#666666"><input type="checkbox" name="C12"
											value="ON" /> </font>
									</td>
									<td height="19" width="100%"><font face="Verdana" size="2"
										color="#666666">Shopping basket is low on the back and located
											directly over or in front of the wheels.</font>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="19" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top"><font face="Verdana"
										size="2" color="#666666"><input type="checkbox" name="C12"
											value="ON" /> </font>
									</td>
									<td height="19" width="100%"><font face="Verdana" size="2"
										color="#666666">When used in carriage position, leg hole
											openings can be closed.</font>
									</td>
								</tr>
								<tr>
									<td height="19" width="1" valign="top">&#160;</td>
									<td height="19" width="100%">&#160;</td>
								</tr>
								<tr>
									<td height="19" width="100%" valign="top" colspan="2"><font
										face="Verdana" size="2" color="#666666"><b>About this article:</b>
											This material was prepared by The Consumer Product Safety
											Commission. The Commission has several ways to keep you
											informed. The Commission publishes Safety Alerts and recall
											notices, has a Hotline service (1-800-638-2772, TTY:
											1-800-638-8270) and has a Website page (<a target="_new"
											style="font-weight: normal; font-style: normal; text-decoration: none;"
											href="http://www.cpsc.gov/"><font color="#333333">www.cpsc.gov</font>
										</a>).</font>
									</td>
								</tr>
							</tbody>
						</table> </font> </font> </strong>
		</p>
		<p align="left">&#160;</p>
	</div>
	<script type="text/javascript"
		src="http://pixel.sitescout.com/ap/3fe68f1fc14ce1a1"></script>
</div>
</br class="clear">
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>