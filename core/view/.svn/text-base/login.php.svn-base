<div class="well" style="width:400px;margin:auto;">
  <form name="loginForm" id="loginForm" action="login" method="post">
  	<legend class="center"><h2>Login</h2></legend>
	<div class="control-group">
		<label class="control-label" for="inputUsername">Username</label>
		<div class="controls">
	    	<input type="text" class="occupiedInput paddedInput" value="<?php if(!empty($gp['d']['username'])) {echo $gp['d']['username'];}  ?>" name="d[username]" required>
	    </div>
	</div>
    
	<div class="control-group">
    	<label class="control-label" for="inputEmail">Password</label>
    	<div class="controls">
	    	<input class="occupiedInput paddedInput" type="password" name="d[password]" required>
		  	<div>
		  		<?php if(!empty($message)) echo $message ?>
		  	</div>
		  	<!--<a class="forgot_password_link">Forgot password?</a>-->
	    </div>
    </div>
    
	 <div class="control-group">
	    <div class="controls">
	      <!--
	      <label class="checkbox pull-right">
	        <input type="checkbox"><small class="muted">Remember me</small>
	      </label>
	      -->
	      <input type="hidden" name="axn" value="login"/>
	      <input type="submit" name="loginSubmit" id="loginSubmit" class="btn btn-primary pull-left pull-large" value="Sign in"/>
		  <div class="clearfix"></div>
	    </div>
	  </div>
  </form>
</div>