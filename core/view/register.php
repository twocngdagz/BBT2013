<?php if(!empty($fb_dtl)): ?>
<?php #echo "<pre>"; print_r($fb_dtl); echo "</pre>"; ?>
<div class="well">
  	<legend class="center"><h2>Register</h2></legend>
  	<?php 
	  	if(!empty($fb_dtl["education"][0]["school"]["name"])):
	  		$fb_school = $fb_dtl["education"][0]["school"]["name"];
		else:
		endif;
  	?>
	<?php if(!empty($fb_school) && $fb_school != "University of the Imaculate Conception" OR "UIC"): ?>
	<form name="registerForm" action="register" method="post">
		<span>Name</span>
	  	<input class="occupiedInput paddedInput" name="d[name]" type="hidden" value="<?php echo $fb_dtl["first_name"] . " " . $fb_dtl["last_name"]; ?>" required> 
  		
  		<span>Firstname</span>
	  	<input class="occupiedInput paddedInput" name="d[firstname]" type="text" value="<?php echo $fb_dtl["first_name"]; ?>" required> 
  		
  		<span>Lastname</span>
	  	<input class="occupiedInput paddedInput" name="d[lastname]" type="text" value="<?php echo $fb_dtl["last_name"]; ?>" required> 
  		
		<span>Username</span>
	  	<input class="occupiedInput paddedInput" name="d[username]" type="hidden" type="text" value="<?php echo $fb_dtl["username"]; ?>" required>
	 	
		<span>Password</span>
	  	<input class="occupiedInput paddedInput" name="d[password]" type="password" value="<?php ?>" required>
	  	
	  	
	  	<!-- 
	  	USER PREFERENCES 
	  	<span>School Year</span>
	  	<input class="occupiedInput paddedInput" name="d[year]" type="text" value="<?php echo $fb_dtl["education"][0]["year"]["name"]; ?>" required>
	 	
	 	<span>Course</span>
	 	<select class="occupiedInput paddedSelect" name="d[course]">
		  <option value="IT">IT - Information Technology</option>
		  <option value="IS">IS - Information System</option>
		  <option value="CS">CS - Computer Science</option>
		</select>
		-->
		
		<?php
		#print_r($fb_dtl);
		$schools = u::schools();
		if(!empty($schools)):
		?>
		<input type="hidden" name="d[school]" value="<?php html::p('1');?>"/>
		<!--
		<span>School</span>
		<select name="d[school]" class="occupiedInput paddedSelect" required>
			<option value=""></option>
			<?php foreach($schools as $d): ?>
				<?php
					if($fb_school == $d['school']) {
						$selected = "selected='selected'";
					} else {
						$selected = "";						
					}
				?>
				<option <?php html::p($selected); ?> value="<?php html::p($d['school_lkp_id']); ?>"><?php html::p($d['school']); ?></option>
			<?php endforeach; ?>
		</select>
		-->
		<?php endif; ?>
		
		
	  	<input class="extended4" name="d[email]" type="hidden" value="<?php echo $fb_dtl["email"]; ?>" required>
	  	<input class="extended4" name="d[fb_id]" type="hidden" value="<?php echo $fb_id; ?>">
	  	<input class="extended4" name="d[avatar]" type="hidden" value="<?php html::p($image_url); ?>">
	  	<br /><br />
	  	<input type="submit" name="submitRegister" id="submitRegister" class="btn btn-block btn-large btn-success" value="Register"/>
		<center>
			<small class="muted">
				By clicking Register, you agree with our 
				<a href="http://www.beezpark.com/about/terms-of-use/" title="Terms of Use">Terms of Use</a> 
				and 
				<a href="http://www.beezpark.com/about/privacy-policy/" title="Privacy Policy">Privacy Policy</a>.
			</small>
		</center>
	</form>
	<?php else: ?>
		Sorry you are not a UICIAN.
	<?php endif; ?>
</div>
<?php endif; ?>