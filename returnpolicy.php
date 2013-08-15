<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>Our Refund Policy : Stanley Cribs : Young America Furniture : Baby Bedding Town</title>
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
								<strong><font face="Verdana" color="#cc99cc" size="3">Refund Policy</font>
								</strong>
							</p>
							<p>&#160;</p>
							<div style="text-align: left;">
								<div style="padding: 5px 0px;">
									You will get the <span style="font-weight: bold;">lowest prices</span>,
									quality name-brand bedding, Furniture, Strollers, Car Seats and baby
									furnishings guarantee for your Baby &amp; Kids products. If you
									purchase an item at Baby Bedding Town and find the exact item at a
									lower price (including shipping and tax) by an authorized retailer in
									the United States within 14 days of placing your order, we will
									refund the difference to you. We not only guarantee to beat
									competitors' prices; if we lower our own price within 14 days of your
									purchase, we'll refund you the difference. So you can shop with
									confidence knowing you're getting the best deals on baby &amp; kids
									furniture and bedding products. The item must be in stock and
									available at a U.S. authorized retailer. Shipping and handling
									charges and tax will be included in the competitor's price. Offer is
									not valid on items with a lower price due to manufacturers' rebates,
									promotional offers, clearance, closeouts or typographical errors in
									advertisements. We reserve the right to change or discontinue this
									low-price guarantee at any time.<br /> <br /> Need to <span
									style="font-weight: bold;">change or cancel your order?</span> It's
									easy with Baby Toytown. Just contact us by email at <a
									style="color: blue;" href="mailto:customerservice@babytoytown.com">customerservice@babytoytown.com</a>
									or call (626) 288-6220, from 9am to 4pm PST, within 24 hours of
									placing your order, and we'll update or cancel your order for free.<br />
									<br /> <span style="font-weight: bold; text-decoration: underline;">Baby
									Bedding Town's Easy Return Policy:</span> Quality satisfaction is
									guaranteed for every purchase. You may return any portion of your
									order within 30 days of receipt of goods for a refund less shipping
									charges and a 20% restocking fee. <span
									style="font-style: italic; text-decoration: underline;">FABRIC SOLD
									BY THE YARD, WALL PAPER BOARDER, CUSTOM BEDDING AND WHOLESALE
									PURCHASES ARE NOT RETURNABLE. Please email us for any additional
									return information and please include the following information with
									your returned goods and send to the address below:</span>
								</div>
								<div style="padding: 5px 0px;">
									Baby Toytown Inc.<br /> 8926 E. VALLEY BLVD. SUITE B.,<br />
									ROSEMEAD, CA 91770 (626) 288-6220<br /> &#160;
								</div>
								<div style="padding: 5px 0px;">
									If this information is not included, refund can take longer to
									receive.
									<ol>
										<li>Customer Name</li>
										<li>Product number and/or product name</li>
										<li>Reason for return</li>
										<li>Return for replacement, exchange, or refund</li>
									</ol>
								</div>
								<div style="padding: 5px 0px;">
									Please allow 10 - 15 business days from the time the item is received
									to process a refund.<br /> <br /> If you receive items that are
									damaged or defective, we will gladly replace the broken parts, if
									possible, or ship a replacement to you for free. Just contact our
									Customer Service Department by email at&#160;<a style="color: blue;"
									href="mailto:customerservice@babytoytown.com">customerservice@babytoytown.com</a>&#160;or
									call customer service, 626-288-6220, from 9am to 4pm PST, and provide
									our customer service representatives with the order number, product
									name and SKU of the items you wish to replace. If you receive wrong
									items or are missing items, we will replace the items - at no cost to
									you. Just contact our Customer Service Department by email at&#160;<a
									style="color: blue;" href="mailto:customerservice@babytoytown.com">customerservice@babytoytown.com</a>&#160;or
									call 626-288-6220, from 9am to 4pm PST, and provide our customer
									service representatives with the order number, product name and SKU
									of the items you wish to replace.<br /> <br /> Baby Bedding Town is
									committed to providing our customers with quality products at
									affordable prices. We guarantee that you will be satisfied with our
									wide selection of products. If you are not satisfied with your
									purchase, return the items within 30 days of delivery date and we
									will gladly replace the items or refund your money.
								</div>
								<div style="padding: 5px 0px;">
									<ul>
										<li>Only items that are in their original packaging and in new
											condition with RMA # (Return of Merchandise Authorization Number)
											will be accepted for returns.</li>
											<li>You will be responsible for shipping costs for returned items,
												unless items are damaged or defective.</li>
												<li>Items returned after 30 days of delivery date will not be
													accepted except with written approval.</li>
													<li>Returns are subject to a 20% restocking fee.</li>
													<li>All returned items must have a Return of Merchandise
														Authorization Number (RMA#).</li>
														<li>Items that are dirty, washed or used will not be accepted for
															refunds.</li>
															<li>Fabric and Wallpaper Border are non-returnable.</li>
															<li>Shipping costs are non-refundable.</li>
														</ul>
													</div>
													<div style="padding: 5px 0px;">
														<span style="font-weight: bold;">Safe Shopping Guarantee</span><br />
														<br /> Shopping at&#160;Baby Bedding Town&#160;with your credit card
														is completely safe and secure. We guarantee that every purchase you
														make will be protected using the latest encryption technology (Secure
														Socket Layer or SSL). In the unlikely event that unauthorized charges
														are made to your credit card,&#160;Baby Bedding Town&#160;will cover
														the liability to your card, up to $50 - the maximum amount your bank
														can hold you liable for unauthorized charges. You must notify your
														credit card provider in accordance with its reporting rules and
														procedures. If you have any questions about our Safe Shopping
														Guarantee, please contact our Customer Service Department by email at
														<a style="color: blue;" href="mailto:customerservice@babytoytown.com">customerservice@babytoytown.com</a>
														or call <strong>626-288-6220</strong>, Monday . Saturday from 9am to
														4pm PST. Our customer service representatives will be happy to assist
														you.<br /> <br /> <span
														style="font-weight: bold; text-decoration: underline;">Refusal of
														Delivery:</span> At Baby Toytown Inc., we are committed to keeping
														shipping costs down and ensuring you continue to receive the lowest
														prices on quality products. For this reason, we must charge
														additional shipping costs for orders refused on delivery. Shipping
														charges cover the cost of sending an order back to Baby Toytown and
														apply even if the order was shipped for free to the customer with our
														free shipping promotion. When we receive the order, we will refund
														the amount of the order, less the shipping costs, to the credit card.
														<span style="font-weight: bold;">Refusal of delivery</span> shipping
														charges will not apply to orders damaged in shipping. Baby Bedding
														Town charges additional shipping costs for orders returned to us or
														re-routed due to incorrect addresses provided by customers. Shipping
														charges cover the cost of sending an order back to&#160;Baby Bedding
														Town&#160;or getting the package re-routed to its intended address
														and apply even if the order was shipped for free to the customer with
														our free shipping promotion. When we receive the order, we will
														refund the amount of the order, less the shipping costs, to the
														credit card.<br /> <br /> <span
														style="font-weight: bold; font-style: italic; text-decoration: underline;">For
														your protection, please use UPS or Insured Parcel Post for return
														shipment.</span>
													</div>
												</div>
											</div>
											<p>&#160;</p>
										</div>
									</br class="clear">
								</div>
								<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>

