<?php error_reporting(E_ALL ^ E_NOTICE);?>
<div class="navbar navbar-static-top">
<div class="navbar-inner">
  <div class="container">
  <a class="brand" href="<?php html::p(MCHN_ROOT)  ?>">
  <img width="160" style="margin: -5px auto -10px auto;" src="<?php html::p(MCHN_DIR_ASSETS."img/bbt.jpg"); ?>" />
  </a>
  <ul class="nav pull-right">
    <li><a href="<?php html::p(MCHN_ROOT) ?>">Home</a></li>
    <li><a href="<?php html::p(MCHN_ROOT."about-us.php") ?>">About</a></li>
    <li><a href="<?php html::p(MCHN_ROOT."customerservice.php") ?>">Contact Us</a></li>
    <li><a href="<?php html::p(MCHN_ROOT."cart.php") ?>">Cart</a></li>
  <?php if(!empty($s['user_id'])): ?>
    <li style="margin-right:-10px;"><a href="<?php html::p(MCHN_ROOT."dashboard") ?>"><?php html::p($s['first_name']); ?></a></li>
    <?php if($s['permission_group_fk'] != 0 || 5): ?>
      <li class="dropdown">               
        <a style="padding-left:2px; padding-right:2px;" href="<?php html::p(MCHN_ROOT."dashboard") ?>" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php html::p(MCHN_ROOT. html::p($s['username'])) ?>">Profile</a></li>
          <li><a href="<?php html::p(MCHN_ROOT."logout") ?>">Logout</a></li>
          <li class="divider"></li>
          <li class="nav-header">Admin Support</li>
        <?php 
        foreach($role as $lkp => $key):
      if($s['permission_group_fk'] == $lkp) {
        foreach($key as $link  => $sub_menu): 
          ?><li><a href="<?php html::p(MCHN_ROOT.$link) ?>"><?php echo $sub_menu; ?></a></li><?php
        endforeach;
      } else {
        
      }
    endforeach;
        ?>
        </ul>
      </li>
    <?php endif; ?>
    
  <?php else: ?>
   	
  <?php endif; ?>
  </ul>
  </div>
</div>
</div>