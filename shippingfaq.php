<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>Shipping FAQ's : Baby Bedding Sets : Stanley Kids Furniture : Baby Bedding Town</title>
	<meta name="keywords" content="Baby Bedding, Baby Furniture, Baby Bedding Sets, Nursery Bedding, Stanley Kids Furniture"/>
	<meta name="description" content="Baby Bedding Town is a large selection of high quality baby bedding sets, nursery bedding and Stanley kids furniture to customers in one location."/>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="INDEX,FOLLOW" />
	<link rel="stylesheet" type="text/css"
	href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>gngnm/css/gngnm.min.css">
	<link rel="stylesheet" type="text/css"
	href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/css/flexigrid.css">
	<link rel="stylesheet" type="text/css"
	href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/css/flexigrid.pack.css">
	<link rel="stylesheet" type="text/css"
	href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>slider/css/feature-carousel.css">
	<link rel="stylesheet" type="text/css"
	href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/css/smoothness/jquery-ui-1.9.1.custom.min.css">
	<link rel="stylesheet" type="text/css"
	href="<?php html::p(MCHN_DIR_ASSETS)  ?>css/style.css">


	<script
	src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/js/jquery-1.9.0.js"></script>
	<script
	src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/js/jquery-ui-1.10.0.custom.js"></script>
	<script
	src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/js/flexigrid.pack.js"></script>
	<script
	src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/js/flexigrid.js"></script>
	<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>gngnm/js/gngnm.min.js"></script>
	<script
	src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>angular/js/angular.min.js"></script>
	<script
	src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>slider/js/jquery.featureCarousel.js"></script>

	<script type="text/javascript"
	src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
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
			.pcontrol input,.pGroup select {
				width: 40px;
				height: 20px;
			}

			.pGroup select {
				width: 60px;
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
						<img
						src="<?php html::p(MCHN_DIR_ASSETS."img/carousel/baby-sleeping.jpg"); ?>"
						alt="">
						<div class="container">
							<h1 style="margin-top: 150px;">SAMPLE HEADINGS</h1>
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
						<div class="pull-left" style="margin-top: 15px;">
							<a href=""><img
								src="<?php html::p(MCHN_DIR_ASSETS."img/facebook.png"); ?>"
								alt=""> </a> <a href=""><img
								src="<?php html::p(MCHN_DIR_ASSETS."img/twitter.png"); ?>" alt="">
							</a> &nbsp;
						</div>
						<div style="width: 200px;" class="pull-left">
							BABY BEDDING TOWN Ut wisi enim ad minim veniam, quis nostrud
							exerci tation <a href="#">bbt2013.alorit.com</a>
						</div>
						<div class="pull-right">
							<div class="input-append" style="margin-top: 15px;">
								<input class="span10" id="appendedInputButtons" type="text">
								<button class="btn" type="button">
									<i class="icon-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: -20px; z-index: -1px;">
			<img src="<?php html::p(MCHN_DIR_ASSETS."img/shadow-head.png"); ?>"
			alt="">
		</div>


		<div class="container" style="min-height: 600px;">
			<div class="row-fluid">
				<div class="span12">

					<div class="row-fluid">
						<div class="span3">
							<?php include('sidebar.php'); ?>
						</div>





						<div class="container">
							<p>&#160;</p>
							<p>
								<font size="3" face="Verdana" color="#cc99cc"><b>Frequently Asked
									Shipping Questions</b>
								</font>
							</p>
							<p>&#160;</p>
							<p>
								<font size="2" face="Verdana" color="#666666"><b>I've noticed
									last-year's style, is it available for sale?</b>
								</font>
							</p>
							<p>
								<font size="2" face="Verdana" color="#666666"><b>&#160;</b>Baby
									bedding designs are often discontinued and replaced by manufactures
									from season to season according to latest fashion trends. All items
									posted as "Available" on our website are indeed available for sale at
									the time posted. We often are able to find quality merchandise not
									available to other vendors, and are able to pass along the savings to
									you. A customer service representative will contact you immediately
									if your purchase can not be fulfilled in rare cases. Prior season
									items are typically available for immediate shipment; however, many
									current models &amp; custom designs are shipped directly from the
									manufacturer. Please allow up to 2-4 weeks for items requiring custom
									ordering. <br /> <br /> <b>What is your standard shipping time?</b> </font>
								</p>
								<p>
									<font size="2" face="Verdana" color="#666666">If the item is not in
										stock then our standard delivery time is 1- 4 weeks. We ship all
										merchandise Monday thru Friday. All in stock items are shipped out by
										the next day (please allow 5 business days for delivery, per UPS) <br />
										<br /> <b>What are your shipping charges?</b> </font>
									</p>
									<p>
										<font size="2" face="Verdana" color="#666666">Shipping charges for the
											continental US are calculated buy weight, size, and distance. Our
											minimum shipping charge is $5.00 and will be automatically displayed
											in the shopping cart at checkout. <br /> <br /> <b>What locations are
											available for shipping?</b> </font>
										</p>
										<p>
											<font size="2" face="Verdana" color="#666666">Currently, we ship
												within the continental USA, Hawaii, and Canada. Due to the extreme
												cost of international shipping we will quote shipping via email.
												Minimum International Shipping Cost: Australia Shipments = $100
												United Kingdom = $100 Tokyo = $100 <br /> <br /> <b>What type of
												shipping services do you offer?</b> </font>
											</p>
											<p>
												<font size="2" face="Verdana" color="#666666">UPS Standard Ground
													Delivery. Once your order is shipped standard scheduled delivery is
													seven to ten business days after. <br /> <br />
													<b>For International Customers</b> we have partnered with Bongo
													International to offer our international visitors the ability to make
													purchases from our website. Bongo International provides it’s
													customers with their very own US address (not a P.O. Box). Once you
													have a US address, you will be able to make purchases at
													BabyBeddingTown as well as other US based online retailers. Bongo
													receives your purchases and logs them into their online system where
													you can consolidate them with other orders. This process saves
													international customers up to 82% off typical international shipping
													rates. Click Here to get your own US address with Bongo International
													<br />
													<br /> </font><strong><font size="2" face="Verdana" color="#666666">How
													will I know when my order has shipped? </font>
												</strong>
											</p>
											<p>
												<font size="2" face="Verdana" color="#666666">When your order has
													shipped, you will receive an E-mail confirmation if your order
													information included an e-mail address. This usually happens within 2
													- 4 weeks from the time you placed your order. <br /> <b><br /> How
													are oversized and heavy items shipped?</b> </font>
												</p>
												<p>
													<font size="2" face="Verdana" color="#666666">Most oversized and heavy
														items must be shipped ground delivery. Additional shipping &amp;
														handling charges will apply and delivery generally takes longer than
														standard ground delivery. <br /> <b><br /> Do you ship to PO Boxes or
														APO/FPO addresses? </b>
													</font>
												</p>
												<p>
													<font size="2" face="Verdana" color="#666666">Yes, we do ship to
														APO/FPO via parcel post. Shipping and Handling charges are a minimum
														of $18. <br /> <br /> <b>Are all items shipped together? </b>
													</font>
												</p>
												<p>
													<font size="2" face="Verdana" color="#666666">Generally, all items on
														an order ship together. There may be times when items in your order
														cannot be shipped together. Some reasons for separate shipping are
														bulky and oversized items and items on back order. <br /> <br /> <b>Who
														pays for customs and import duties for packages sent to Canada?</b>
													</font>
												</p>
												<p>
													<font size="2" face="Verdana" color="#666666">Shipments to Canada are
														subject to import duties and taxes, which are levied once the package
														reaches Canada. Additional charges for customs clearance are borne by
														the recipient of the shipment. As the purchaser of the product to be
														shipped to Canada, you are considered the importer of record and must
														comply with all laws and regulations as required by Canada. <br /> <br />
														<b>How can I track my order to see when it will be delivered?</b> </font>
													</p>
													<p>
														<font size="2" face="Verdana" color="#666666">If your order has not
															arrived at the expected time, please call us at (626) 288-6220 or
															e-mail <a href="mailto:customersupport@babytoytown.com"><font
															color="#333333">Customer Service</font>
														</a> and we will gladly assist you in tracking your order. You may
														also use this link <a target="_blank"
														href="http://www.ups.com/etracking/tracking.cgi"><font
														color="#333333">http://www.ups.com/etracking/tracking.cgi</font>
													</a> to go directly to the UPS site. The tracking number to use will
													be indicated in your shipping confirmation email. <br /> </font>
												</p>
											</div>
											<p>&#160;</p>
										</div>
									</br class="clear">
								</div>
								<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>
