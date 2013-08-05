<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>The Safe Nursery : Choosing a Safe Crib : Bassinet or Cradle : Baby Bedding Sets : Baby Bedding Town</title>
<meta name="keywords" content="Nursery Bedding, Baby Bedding, Baby Bedding Sets, Crib Bedding, Crib Bedding Sets, Crib Sets"/>
<meta name="description" content="Baby Bedding Town provides top quality designer baby bedding, nursery bedding, crib bedding sets and more - all at everyday discount prices."/>


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
			<strong><font size="3" color="#cc99cc">The Safe Nursery:&#160;
					Choosing a Safe Crib, Bassinet or Cradle</font> </strong>
		</p>
		<p>&#160;</p>
		<p>
			<strong><font size="3" color="#666666">If You're Buying a New
					Full-Size Crib </font> </strong>
		</p>
		<p>&#160;</p>
		<p>
			<strong><font size="3" color="#666666">
					<table height="689" width="100%" cellspacing="0" cellpadding="0"
						style="border-collapse: collapse; border: 0px;" id="AutoNumber2">
						<tbody>
							<tr>
								<td height="20" width="1" valign="top" align="right">
									<p align="left">
										<font face="Verdana" size="2" color="#666666">1.</font>
									</p>
								</td>
								<td height="20" width="100%">
									<p align="left">
										<font face="Verdana" size="2" color="#666666">Corner posts
											should not extend more than 1/16 inch (1 1/2 mm) above the
											top of the end panel. Corner posts can be catchpoints for
											items placed around a child's neck or clothing worn by the
											child. </font>
									</p>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">2.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">Mattress support hangers should be secured by
										bolts or closed hooks. All crib hardware should be securely
										tightened and checked frequently. </font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">3.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">Bumper pads, if used, should <b>(a)</b> fit
										around the entire crib, <b>(b) </b>tie or snap into place, and<b>
											(c)</b> have straps or ties at least in each corner, in the
										middle of each long side, and on both the top and the bottom
										edges. To prevent your baby from becoming entangled in the
										ties, trim off excess length after tying. Use the bumpers
										until the baby can pull up to a standing position, then remove
										them so that the baby will not use them to try to climb out of
										the crib.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">4.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">Remove and destroy all plastic wrapping
										materials. Never use plastic bags as mattress covers. The
										plastic film may cling to a baby's face and cause suffocation.</font>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="100%" valign="top" colspan="2">
									<p>
										<font face="Verdana" color="#666666"><b>If You Already Have a
												Crib</b> </font>
									</p>
									<p>&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">1.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">CPSC discourages the use of used cribs. Use a
										crib that meets Federal safety regulations and industry
										voluntary standards (ASTM) and make sure it has a tight
										fitting mattress. Check the labeling on these products to make
										sure they meet safety requirements. </font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">2.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">Check the crib and replace any missing parts,
										such as screws, bolts or mattress support hangers, before
										placing your child in it. Make sure all screws or bolts are
										securely tightened. Any screw inserted into a wood component
										that cannot be tightened securely should be replaced by one
										that fits. On cribs where the mattress support is suspended by
										hangers attached to hooks on the end panels, check frequently
										to be sure they have not become disconnected. Never use a crib
										with broken or missing parts</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">3.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">Use a mattress that fits tightly. If you can
										fit more than two fingers between the edge of the mattress and
										crib side, the mattress is too small. An infant can suffocate
										if its head or body becomes wedged between the mattress and
										the crib sides.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">4.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="2"
									color="#666666">Avoid older cribs with headboard and footboard
										designs that may allow an infant's head to become caught in
										the openings between the corner post and the top rail, or in
										other openings in the top edge of the headboard structure.
										These openings may lead to strangulation.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">5.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Corner posts should be less than 1/16 inches
										high. (1-1/2 mm) unless the crib has a canopy. Do not use a
										crib that has decorative knobs on corner posts. If you already
										have a crib with such knobs, the knobs should be unscrewed or
										sawed off flush with the headboard or footboard. Sand off
										splinters and sharp corners.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">6.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Never use a crib that has loose or missing
										slats. Be sure that all slats are securely fastened in place
										and the space between slats is no more than 2-3/8 inches (60
										mm) to avoid head entrapment/strangulation.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="center">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">7.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">If you paint or refinish the crib, use only
										high quality household lead-free enamel paint and let it dry
										thoroughly so there are no residual fumes. Check the label on
										the paint can to make sure the manufacturer does not recommend
										against using the paint on items such as cribs.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="100%" valign="top" colspan="2">
									<p>
										<font face="Verdana" color="#666666"><b>Some Safety Tips</b> </font>
									</p>
									<p>&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">1.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">To reduce the risk of Sudden Infant Death
										Syndrome (SIDS) and prevent suffocation, put your baby to
										sleep on his/her back in a crib on a firm, flat mattress. Make
										sure there is no soft bedding underneath your baby.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="center">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">2.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Temporary beds: Never place your infant to
										sleep on an adult bed, water bed, or bunk bed. Infants up to
										18 months can suffocate in their sleep when their bodies or
										faces become wedged between the mattress and bed frame or the
										mattress and wall</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="center">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">3.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Never put a crib, child bed, or furniture near
										window blinds or drapery. Children can strangle on window
										cords or can fall through screens. If local fire codes permit
										window guards, install them. Make sure that all drapery or
										window blind cords are out of the child's reach. CPSC has
										received numerous reports of strangulation deaths on window
										blind cords over the years. To keep cords out of reach of
										children, use these devices: clamp or clothes pin, tie the
										cord to itself, tie-down device, or take the cord loop and cut
										it in half to make two separate cords.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="center">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">4.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Never use strings to hang any object, such as a
										mobile or a toy or a diaper bag, on or near the crib where a
										child could become caught in it and strangle. If you have toys
										with cords or elastic for hanging, cut the strings/cords off.</font>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">5.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">To prevent strangulation, NEVER tie
										pacifiers/teethers around your child's neck. Remove bibs and
										necklaces whenever you put your baby in crib or playpen.</font>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">6.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Always lock the side rail in its raised
										position whenever you place your child in the crib. As soon as
										your child can stand up, adjust the mattress to its lowest
										position and remove the bumper pads. Also, remove any large
										toys-an active toddler will use anything for climbing out of
										the crib</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">7.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">When your child reaches 35 inches (890 mm) in
										height, he/she has outgrown the crib and should sleep in a
										bed.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">8.</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Never use plastic bags as mattress covers. The
										plastic film may cause suffocation.</font></td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">
									<p align="left">
										<font face="Verdana" size="2" color="#666666">9.</font>
									</p>
								</td>
								<td height="20" width="100%">
									<p align="left">
										<font face="Verdana" size="-1" color="#666666">Check all crib
											hardware; tighten all nuts, bolts, and screws frequently.
											After a crib is moved, be sure all mattress support hangers
											are secure. Check hooks regularly to be sure none are broken
											or bent. Open hooks may allow the mattress to fall.</font>
									</p>
								</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="20" width="1" valign="top" align="right">
									<p align="left">
										<font face="Verdana" size="2" color="#666666">10.</font>
									</p>
								</td>
								<td height="20" width="100%">
									<p align="left">
										<font face="Verdana" size="-1" color="#666666">Secure bumper
											pads around the entire crib and snap or tie in place at least
											in each corner, in the middle of each long side, and on both
											the top and the bottom edges. Cut off any excess string
											length.</font>
									</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2">
									<p>
										<font face="Verdana" color="#666666"><b>Checklist for Crib
												Toys</b> </font>
									</p>
									<p>&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2">
									<p align="left">
										<font face="Verdana" size="-1" color="#666666">Crib gyms and
											other toys that stretch across the crib with strings, cords
											or ribbons can be a hazard for older or more active babies.
											The Commission knows of cases in which infants strangled or
											became entangled in crib gyms or other toys stretched across
											their cribs.</font>
									</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="20" width="100%">
									<p align="left">&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top"><font face="Verdana"
									color="#666666"><input type="checkbox" value="ON" name="C1" />
								</font></td>
								<td height="20" width="100%"><font face="Verdana" size="-1"
									color="#666666">Make sure that crib gyms are installed securely
										at both ends so they cannot be pulled down into the crib.</font>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="20" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top"><font face="Verdana"
									color="#666666"><input type="checkbox" value="ON" name="C12" />
								</font></td>
								<td height="20" width="100%">
									<p align="left">
										<font face="Verdana" size="-1" color="#666666">Make sure that
											you remove crib gyms and mobiles from the crib when your baby
											is 5 months old or begins to push up on hands and knees.</font>
									</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top"><font face="Verdana"
									color="#666666"><input type="checkbox" value="ON" name="C12" />
								</font></td>
								<td height="19" width="100%">
									<p align="left">
										<font face="Verdana" size="-1" color="#666666">Mobiles and any
											other toys that hang over a crib or playpen should be out of
											reach of a child.</font>
									</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top"><font face="Verdana"
									color="#666666"><input type="checkbox" value="ON" name="C12" />
								</font></td>
								<td height="19" width="100%"><font face="Verdana" size="-1"
									color="#666666">Do not use crib toys with catch points that can
										hook clothing</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2">
									<p>
										<font face="Verdana" color="#666666"><b>If You Are Buying a
												Bassinet or Cradle</b> </font>
									</p>
									<p>&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2"><font
									face="Verdana" size="2" color="#666666">The most frequent
										injury associated with bassinets and cradles involves children
										falling either when the bottom of the bassinet or cradle
										breaks or when it tips over or collapses. Suffocation has also
										been reported in products that are not structurally sound or
										when pillows or folded quilts were under baby.</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">1.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Look for one with a sturdy bottom and a wide,
										stable base.</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">2.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Follow the manufacturer's guidelines on the
										appropriate weight and size of babies who can safely use the
										bassinet or cradle.</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">3.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Check to make sure that spaces between spindles
										are no larger than 2-3/8 in. (60 mm).</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2">
									<p>
										<font face="Verdana" color="#666666"><b>Some Safety Tips</b> </font>
									</p>
									<p>&#160;</p>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">1.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Check screws and bolts periodically to see if
										they are tight.</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">2.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">If the product has legs that fold for storage,
										make sure that effective locks are provided to ensure that the
										legs do not accidentally fold while in use.</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">3.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Mattresses and padding should fit snugly and be
										firm and smooth. Never use pillows.</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">4.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Decorative bows and ribbons should be trimmed
										short and stitched securely to prevent strangulation. </font>
								</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top" align="right"><font
									face="Verdana" size="2" color="#666666">5.</font></td>
								<td height="19" width="100%"><font face="Verdana" size="2"
									color="#666666">Swinging cradles should have a way to keep them
										from swinging once a baby is asleep</font></td>
							</tr>
							<tr>
								<td height="19" width="1" valign="top">&#160;</td>
								<td height="19" width="100%">&#160;</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2"><font
									face="Verdana" size="-1" color="#666666"><b>About this article:</b>
										This material was prepared by The Consumer Product Safety
										Commission. The Commission has several ways to keep you
										informed. The Commission publishes Safety Alerts and recall
										notices, has a Hotline service (1-800-638-2772, TTY:
										1-800-638-8270) and has a Website page (<a
										href="http://www.cpsc.gov/"
										style="font-weight: normal; font-style: normal; text-decoration: none;"
										target="_new"><font color="#333333">www.cpsc.gov</font> </a>).</font>
								</td>
							</tr>
							<tr>
								<td height="19" width="100%" valign="top" colspan="2">
									<p>
										<font face="Verdana" size="-1" color="#666666"><br /> <br />
											Additional information can also be found at the <a
											href="http://www.jpma.org/" target="_blank"><font
												color="#333333">Juvenile Products Manufacturers Association</font>
										</a> </font>
									</p>
									<p>&#160;</p>
								</td>
							</tr>
						</tbody>
					</table> </font> </strong>
		</p>
	</div>
</div>
</br class="clear">
</div>


	<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>