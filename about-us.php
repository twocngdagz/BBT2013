<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>About Us : Baby Bedding Sets : Nursery Bedding : Stanley Kids Furniture : Baby Bedding Town</title>
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
							<u><span style="font-family: Arial"><strong>About Us</strong> </span>
							</u>
						</p>
						<p>&#160;</p>
						<img alt="" src="<?php echo MCHN_ROOT ?>/images/about_bbt.jpg" />
						<p>Established in 1936, Baby Toytown was a pioneering company in
							the baby bedding market. Started by Murray and Betty Zwick, Baby
							Toytown began with a small store located in Rosemead, CA. They
							hoped to bring a large selection of high quality Baby bedding,
							Kids bedding and Baby &amp; Kids Furniture&#160; to customers in
							one location. Over time the one location grew to 19 retail stores
							across California, Nevada, Arizona and Hawaii.</p>
						<p>&#160;Now 70 years later, Baby Toytown is still family owned,
							providing the same excellent quality products with the same
							excellent customer service. Son Bernard Zwick, along with wife
							Margie, has been helping soon-to-be parents with their Baby &amp;
							Kids bedding and Furniture needs, since 1969.</p>
						<p>&#160;</p>
						<p>
							With a large 25,000 square foot warehouse and an online website (<strong>WWW.BABYBEDDINGTOWN.COM</strong>),
							Baby Toytown now has one of the largest selections of baby
							bedding and Baby &amp; Kids Furniture around. We are commited to
							giving each and every customer the best prices on the best items
							available for their new babies. For every nursery need, Baby
							Toytown can help. <strong>LOWEST PRICE GUARANTEE</strong>!
						</p>
						<p>&#160;</p>
						<p>Baby bedding is not the end of Baby Toytown's items. Cribs,
							bassinets, and changing tables are also available. Baby Toytown
							has every item needed to make a special baby's nursery ready.</p>
						<p>&#160;</p>
						<p>
							<img alt=""
								src="http://www.babybeddingtown.com/images/site/family_pic.jpg" />&#160;
						</p>
						<p>
						

						<table id="employee_credentials" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: 0px;" id="AutoNumber2">
							<tbody>
								<tr>
									<td style="width: 240px">Bernard Zwick-President, C.E.O</td>
									<td>USC. Graduate, B.S,<br />Masters American Institute of
										Banking</td>
								</tr>
								<tr>
									<td>Margie Zwick- Executive V.P.</td>
									<td>Owner and operator since 1969</td>
								</tr>
								<tr>
									<td>Raquel Zwick Sanford- Product Consultant</td>
									<td>USC. Graduate B.S.<br />George Washington University, M.D</td>
								</tr>
								<tr>
									<td>Peter Sanford- Financial Consultant</td>
									<td>USC. Graduate B.S, M.B.A</td>
								</tr>
								<tr>
									<td>Michelle Zwick-Buying Consultant</td>
									<td>USC. Graduate B.S.</td>
								</tr>
								<tr>
									<td>Jacquelyn Zwick-Merchandise Consultant</td>
									<td>UC San Diego B.A</td>
								</tr>
							</tbody>
						</table>
						</p>
						<p>&#160;</p>
						<div class="section-title">
							<!-- InstanceBeginEditable name="title" -->
							<u><strong>Store Locator</strong> </u>
							<!-- InstanceEndEditable -->
						</div>
						<div class="section-title">&#160;</div>
						<div class="section-title">&#160;</div>
						<div>
							<table style="border-collapse: collapse; border: 0px;" id="AutoNumber2">
								<tbody>
									<tr>
										<td style="padding-right: 5px"><p>
												8926 E. Valley Blvd. Suite B.<br />Rosemead, CA 91770<br />
												<strong>(626) 288-6220</strong>
											</p>
											<p>
												<span class="strong">Store Hours</span>:<br />Friday,
												Saturday, Sunday &#160; Monday 12 - 6 pm.<br /> <span
													class="strong">Closed Tuesday, Wednesday &#160; Thursday</span>
											</p>
										</td>
										<td>&#160;<img alt=""
											src="http://www.babybeddingtown.com/images/site/storefront_cerritos.jpg" />
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div>&#160;</div>
						<div>&#160;</div>
						<!-- InstanceEndEditable -->
					</div>
				</div>
				</br class="clear">
			</div>
			<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>