
<div class="row-fluid">
	<div class="span3">
	<?php include('sidebar.php'); ?>
	</div>
	<div class="span9">
		<div class="page-head">
			<h3>&#160;</h3>
			<img src="<?php echo MCHN_ROOT ?>images/affiliate_header.jpg"></img>
			<p>&#160;</p>
		</div>

		<p>Hello! Do you own or operate a baby, child or family related website? Would you like to make some extra money 
		simply by adding banners or text links to your existing pages?</p>
		<p>Listen up - It’s easy to generate revenue by adding our baby related products and ads to your site!</p>
		<p>Baby Bedding Town is pleased to announce our new Affiliate Marketing Program. 
		Read on to find out how easy it is to become a valued member and then sign up to watch the commissions start rolling in!</p>

		<div class="container">&#160;</div>
		<div class="container">&#160;</div>
		<div class="container"><a href="http://www.shareasale.com/shareasale.cfm?merchantID=30099" target="_blank"><img src="<?php echo MCHN_ROOT ?>images/signup.jpg"></img></a></div>
		<div class="container">&#160;</div>
		<div class="container">&#160;</div>
		
		<p>Already have an account and ready to get started? Use our link generator below or checkout our banners.</p>
		<form action="" id="contactForm" method="post">
			<fieldset class="group-select">
				<h4 class="legend">To get started, please enter your Share a Sale ID in the fields below:</h4>

						<div class="control-group">
							<label for="name">Share A Sale ID <span class="required">*</span> </label>
							<div class="controls">
								<input name="name" id="id" title="Name" required value=""
									class="input-text required-entry span9" type="text" />
							</div>
						</div>
						<div class="control-group">
							<label for="name">SAS afftrack ID (optional) <span class="required">*</span> </label>
							<div class="controls">
								<input name="name" id="sas" title="Name" required value=""
									class="input-text required-entry span9" type="text" />
							</div>
						</div>
						<div class="control-group">
							<label for="name">Your Tracking Link <span class="required">*</span> </label>
							<div class="controls">
								<input name="name" id="link" title="Name" value="http://www.shareasale.com/r.cfm?b=266790&u={your_Share_A_Sale_ID}&m=30099&urllink=&afftrack={afftrack_value}%E2%80%9D]"
									class="input-text required-entry span9" type="text" />
							</div>
						</div>
						<div class="form-actions" style="margin: 0;">
							<button type="submit" id="btnSubmit"
							class="btn btn-icon btn-primary glyphicons circle_ok">
								<i></i>Submit
							</button>
							<button type="button" id="btnReset"
							class="btn btn-icon btn-default glyphicons circle_remove">
								<i></i>Reset
							</button>
							<button type="button" id="btnVisit"
							class="btn btn-icon btn-default glyphicons circle_remove">
								<i></i>Visit Link
							</button>
						</div>

			</fieldset>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).on("ready", function() {
		$('#btnVisit').hide();
		$('#id').focus();
		$('#btnSubmit').click(function(e) {
			e.preventDefault();
			var isValid = true;
			var idNumeric = $.isNumeric($('#id').val());
			var sasNumber = $.isNumeric($('#sas').val());
			if (idNumeric && sasNumber) {
				var link = "http://www.shareasale.com/r.cfm?b=266790&u=" + $('#id').val() + "&m=30099&urllink=&afftrack=" + $('#sas').val();
				$('#link').val(link);
				$('#btnVisit').show();
				alert("The link has been updated with your information");
			} else {

				alert("Your Share A Sale User id should only be digits. Please check what you entered and try again");
			}
		});

		$('#btnReset').click(function(e) {
			e.preventDefault;
			$('#id').val('');
			$('#sas').val('');
			$('#link').val('http://www.shareasale.com/r.cfm?b=266790&u={your_Share_A_Sale_ID}&m=30099&urllink=&afftrack={afftrack_value}%E2%80%9D]');
			$('#btnVisit').hide();
		});

		$('#btnVisit').click(function(e) {
			e.preventDefault();
			var url = $('#link').val();
			window.open(url, '_blank');
		})
	});
</script>