<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Making Bath Time Safe : Baby Furniture : Baby Bedding Town</title>
<meta name="keywords" content="Baby Furniture"/>
<meta name="description" content="Welcome to Baby Bedding Town, we are committed to providing baby furniture at the best prices."/>


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
				class="Apple-style-span">Making Bath Time Safe</span>
		</p>
		<p>&#160;</p>
		<p>
			<span
				style="border-collapse: separate; color: rgb(153, 153, 153); font-family: Verdana; font-size: 9px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"
				class="Apple-style-span">
				<table height="689" width="100%" cellspacing="0" cellpadding="0"
						style="border-collapse: collapse; border: 0px;" id="AutoNumber2">
					<tbody>
						<tr>
							<td height="22" width="100%" valign="top"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"
								colspan="2">
								<p>
									<font face="Verdana" size="2" color="#666666"><b>Bathing Aids</b>
									</font>
								</p>
								<p>&#160;</p>
							</td>
						</tr>
						<tr>
							<td height="20" width="100%" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"
								colspan="2">
								<p align="left"
									style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">
									<font face="Verdana" size="2" color="#666666">Water presents a
										real danger:<span class="Apple-converted-space">&#160;</span><b>NEVER</b>,
										even for a moment, leave your child alone or under sibling
										supervision in the bathtub, even when the child is in a bath
										ring or seat. Bath rings are intended for use as bath aids,
										but they are<span class="Apple-converted-space">&#160;</span><b>NOT
											SAFETY DEVICES!</b><span class="Apple-converted-space">&#160;</span>Keep
										children away from buckets, toilets, pools and other
										containers of water. Young children can drown quickly in small
										amounts of water. Hot water can scald. To prevent skin burns
										always check bath water temperature with your wrist or elbow
										before bathing your baby.</font>
								</p>
							</td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
						</tr>
						<tr>
							<td height="20" width="100%" valign="top"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"
								colspan="2">
								<p>
									<font face="Verdana" size="2" color="#666666"><b>Some Safety
											Tips</b> </font>
								</p>
								<p>&#160;</p>
							</td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">1.</font></td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666"><b>Never</b>, even for a
									moment, rely on bath rings or seats to keep baby safe in the
									bath. Never leave a baby alone in a bath ring or seat in the
									tub.<span class="Apple-converted-space">&#160;</span><b>Never</b><span
									class="Apple-converted-space">&#160;</span>rely on a sibling to
									supervise a baby in a bath tub. Turning away to get a towel,
									answer the doorbell or telephone could result in the baby
									drowning.</font></td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">2.</font></td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">All necessary bathing
									items (soap, washcloths, towels, etc.) should be placed by the
									tub before your baby goes in.</font></td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">3.</font></td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">Only fill the tub with
									enough water to cover the baby's legs. This amount of water is
									sufficient to bathe the baby. However, be aware that babies can
									drown in a very small amount of water. All it takes is enough
									water to cover the nose and mouth.</font></td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">4.</font></td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">Securely attach bath
									seats and rings to a SMOOTH SURFACE. Suction cups will<span
									class="Apple-converted-space">&#160;</span><b>NOT</b><span
									class="Apple-converted-space">&#160;</span>stick to textured,
									ridged, appliqued, or factory designed non-skid bathtub
									surfaces. Suction cups will not stick to scratched, chipped, or
									repainted tub surfaces.</font></td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">5.</font></td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">Parents and caregivers
									should be trained in basic CPR techniques.</font></td>
						</tr>
						<tr>
							<td height="20" width="1" valign="top" align="right"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);"><font
								face="Verdana" size="2" color="#666666">10.</font></td>
							<td height="20" width="100%"
								style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; color: rgb(153, 153, 153);">&#160;</td>
						</tr>
						<tr>
						</tr>
					</tbody>
				</table> </span>
		</p>
	</div>
</div>
</br class="clear">
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>