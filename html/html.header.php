<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>%BBT2013%</title>
<meta name="author" content="skwdl" />
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>gngnm/css/gngnm.min.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/css/flexigrid.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/css/flexigrid.pack.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>slider/css/feature-carousel.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/css/smoothness/jquery-ui-1.9.1.custom.min.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>bootstrap-modal/css/bootstrap-modal.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>bootstrap-datepicker/css/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_3RDPARTY)  ?>simplyscroll/jquery.simplyscroll.css">
<link rel="stylesheet" type="text/css" href="<?php html::p(MCHN_DIR_ASSETS)  ?>css/style.css">


<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/js/jquery-1.9.0.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>jquery/js/jquery-ui-1.10.0.custom.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/js/flexigrid.pack.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>flexgrid/js/flexigrid.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>gngnm/js/gngnm.min.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>angular/js/angular.min.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>slider/js/jquery.featureCarousel.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>bootstrap-modal/js/bootstrap-modalmanager.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>bootstrap-modal/js/bootstrap-modal.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php html::p(MCHN_DIR_3RDPARTY)  ?>simplyscroll/jquery.simplyscroll.min.js"></script>

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
  
  .modal .modal-body {
    overflow-y: auto;
}
</style>
<script type="text/javascript">
  (function($) {
    $(function() {
      $("#scroller").simplyScroll({orientation:'vertical',direction:'backwards',customClass:'vert',speed:0.5});
    });
  })(jQuery);
</script>
<?php include (MCHN_DIR_HTML . 'html.navigation.php'); ?>
<?php $serverHome = explode("/", $_SERVER['PHP_SELF']); ?>

<?php if(in_array('index.php', $serverHome)): ?>
<div id="bbtCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo MCHN_DIR_ASSETS."img/carousel/baby-sleeping.jpg"; ?>" alt="">
      <div class="container">
        <h1 style="margin-top:150px;">Baby Bedding Town</h1>
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
      <a href="https://www.facebook.com/babybeddingtown"><img src="<?php html::p(MCHN_DIR_ASSETS."img/facebook.png"); ?>" alt=""></a>
      <a href="https://twitter.com/babybeddingtown"><img src="<?php html::p(MCHN_DIR_ASSETS."img/twitter.png"); ?>" alt=""></a>
      &nbsp;
      </div>


      <?php
        $config = array(
        'directory' => '', //The path used to store the .tweetcache cache file.
        'key' => 'RMZaquoFjzpeh4NGG6aI6g',
        'secret' => 'YniV8sBO17Y1YwqGo37N7Oq1hTnyDvTu7nzAd18v8W8',
        'token' => '159227822-5q2fcXiF7rkFU5DFg9ryKbFxsQAue5cMItDUUgbE',
        'token_secret' => 'FadiIU8gtk1m4GhAlp0ttnikMP1053CQOBweYm1Aw',
        'screenname' => '<Twitter Screename>', //This is now deprecated and you shouldn't define this - but it's here for backwards compatibility
        'cache_expire' => 3600 //The duration of the cache  
        );

        $twitter = new StormTwitter($config);

        // getTweets is the only public method. For legacy reasons, it takes between 0 and 3 parameters.
        // getTweets(number_of_tweets, twitter_screenname, custom_parameters_to_go_twitter);

        $tweets = $twitter->getTweets(10,'babybeddingtown');
        ?>
        <div style="width:500x; height:75px; overflow:hidden;" class="pull-left">
          <ul id="scroller">
          <?php foreach ($tweets as $tweet) { ?>
            <li style="height: 100px;color:#3c3c3c; font-size: 1.1em; font-weight: normal;">
              <?php 
                $tweet = preg_replace('/((http)+(s)?:\/\/[^<>\s]+)/i', '<a href="$0" target="_blank">$0</a>', $tweet['text']);
                $tweet = preg_replace('/[@]+([A-Za-z0-9-_]+)/', '<a href="http://twitter.com/$1" target="_blank">$1</a>', $tweet );
                $tweet = preg_replace('/[#]+([A-Za-z0-9-_]+)/', '<a href="http://twitter.com/search?q=%23$1" target="_blank">$0</a>', $tweet );
                echo $tweet;
              ?>
            </li>
          <?php } ?>
          </ul>
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

  
<div class="container" style="min-height:600px; margin-top: -50px">
  <div class="row-fluid"> 
    <div class="span12">