<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Our Newsletter Subscription : Young America Crib : Stanley Baby Furniture : Baby Bedding Town</title>
<meta name="keywords" content="Young America Crib, Stanley Baby Furniture, Baby Furniture, Young America Furniture"/>
<meta name="description" content="Baby Bedding Town is a large selection of high quality Young America crib and Stanley baby furniture to customers in one location."/>


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
					<div class="span9">
						<p>&#160;</p>
						<p>
							<span style="color: #0000ff"><span style="font-size: larger"><font
									face="Arial"><span><strong>Baby Toy Town Newsletter</strong> </span>
								</font> </span> </span>
						</p>
						<p>
							<span style="font-size: larger">&#160;</span>
						</p>
						<p>
							<span style="font-size: larger"><span><font face="Arial">Please
										add your name to our customer mailing list, no purchase is
										required. You will be emailed monthly with Specials,
										Discounts, Live Auctions, Closeouts &amp; Coupons. You will
										NOT be spammed and may permanently remove your name from all
										mailing lists at any time. Please read our company policies
										&amp; the Mission Statement of Baby Toytown, Inc. a
										family-owned company since 1936. </font> </span> </span>
						</p>
						<p>
							<span style="font-size: larger">&#160;</span>
						</p>
						<p>
							<font face="Arial"><div class="block block-subscribe">
									<div class="block-title">
										<h2>
											Newsletter<a name="newsletter-box"></a>
										</h2>
									</div>
									<form
										action="http://www.babybeddingtown.com/newsletter/subscriber/new/"
										method="post" id="newsletter-validate-detail">
										<fieldset class="block-content">
											<legend>Newsletter</legend>


											<label for="newsletter">Sign up for our newsletter:</label> <input
												name="email" type="text" id="newsletter"
												class="input-text required-entry validate-email" />
											<button type="submit" class="button">
												<span>Subscribe</span>
											</button>
										</fieldset>
									</form>
									<script type="text/javascript">
//<![CDATA[
    var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
//]]>
</script>
								</div> </font>
						</p>
						<p>&#160;</p>
						<p>&#160;</p>
						<p>&#160;</p>
						<p>&#160;</p>
						<p>&#160;</p>
						<p>&#160;</p>
					</div>
				</div>
				</br class="clear">
			</div>
			<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>