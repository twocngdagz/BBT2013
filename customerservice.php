<?php include('mchn.config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>Our Customer Service : Nursery Bedding : Crib Bedding Sets : Baby Bedding Town</title>
<meta name="keywords" content="Nursery Bedding, Crib Bedding Sets, Crib Sets, Crib Bedding"/>
<meta name="description" content="Welcome to Baby Bedding Town, we are committed to providing nursery bedding and crib bedding sets at the best prices."/>


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
		<div class="page-head">
			<h3>&#160;</h3>
			<h3>Customer Service</h3>
			<p>&#160;</p>
		</div>
		<div class="container">At Baby Bedding Town we are committed to
			bringing the very best customer service. A representative will be
			happy to answer any question or concern and respond to suggestions
			you may have. Please read about our family owned company and mission
			statement.</div>
		<div class="container">&#160;</div>
		<div class="container">&#160;</div>
		<div class="container">Please feel free to contact us at any time.</div>
		<div class="container">&#160;</div>
		<div class="container">&#160;</div>
		<div class="container">Call (626) 288-6220 for product questions</div>
		<div class="container">&#160;</div>
		<p class="container">
		
		
		<div id="messages_product_view"></div>
		<div class="page-title">
			<h2>Contact Us</h2>
		</div>
		<form action="" id="contactForm" method="post">
			<fieldset class="group-select">
				<h3 class="legend">Contact Information</h3>
				<ul>
					<li>
						<div class="input-box">
							<label for="name">Name <span class="required">*</span> </label><br />
							<input name="name" id="name" title="Name" value=""
								class="input-text required-entry" type="text" />
						</div>
					</li>
					<li>
						<div class="input-box">
							<label for="email">Email <span class="required">*</span> </label><br />
							<input name="email" id="email" title="Email" value=""
								class="input-text required-entry validate-email" type="text" />
						</div>
					</li>
					<li>
						<div class="input-box">
							<label for="telephone">Telephone</label><br /> <input
								name="telephone" id="telephone" title="Telephone" value=""
								class="input-text" type="text" />
						</div>
					</li>
					<li><label for="comment">Comment</label><br /> <textarea
							name="comment" id="comment" title="Comment" class="input-text"
							style="height: 150px;" cols="5" rows="3"></textarea>
					</li>
				</ul>
			</fieldset>
			<p class="required">* Required Fields</p>
			<div class="buttons-set">
				<button type="submit" class="button">
					<span>Submit</span>
				</button>
			</div>
		</form>
		<script type="text/javascript">
//<![CDATA[
    var contactForm = new VarienForm('contactForm', true);
//]]>
</script>
		</p>
		<p class="container">
			<strong>Customer Service Hours </strong>
		</p>
		<p class="container">&#160;</p>
		<p class="container">Monday through Friday</p>
		<p class="container">9:00 am - 4:00 pm (PST)</p>
		<p class="container">*Pacific Standard Time*</p>
		<p class="container">&#160;</p>
		<p class="container">Shipping &amp; Mailing Address</p>
		<p class="container">8930 East Valley Blvd. Suite B</p>
		<p class="container">Rosemead, CA 91770</p>
	</div>
	<p>&#160;</p>
	<script type="text/javascript"
		src="http://pixel.sitescout.com/ap/3fe68f1fc14ce1a1"></script>
</div>
</br class="clear">
<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>