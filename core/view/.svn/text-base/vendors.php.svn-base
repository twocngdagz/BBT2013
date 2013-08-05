<div class="">
	<legend>Manage Vendors</legend>
	<table class="flexVendors"></table>
	<div class="clear"><br /></div>
    <a href="#modal-create-vendors" role="button" class="btn btn-success" data-toggle="modal">Create New Vendor</a>
</div>

<div class="modal hide fade" id="modal-create-vendors" style="width:60%; left:40%;">
	<form action="./vendors" method="post">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Vendors</h3>
		</div>
		  <div class="modal-body">
		  	<div class="row-fluid">
		  		<div class="span4">
				  	<div><small>First Name *</small></div>
					<input type="text" name="d[first_name]" placeholder="" id="first_name" required>
					
				  	<div><small>Last Name *</small></div>
					<input type="text" name="d[last_name]" placeholder="" id="last_name" required>
					
					<div><small>Email (personal) *</small></div>
					<input type="email" name="d[email_personal]" placeholder="" id="email_personal" required>
					
				  	<div><small>Company Name *</small></div>
					<input type="text" class="" name="d[name]" required placeholder="" id="name">
										
					<div><small>Email (company) *</small></div>
					<input type="email" name="d[email]" placeholder="" id="email" required>
					
					<div><small>Website (http://)</small></div>
					<input type="url" name="d[url]" id="url" placeholder="">			
		  		</div>
		  		
		  		<div class="span4">		
										
					<div><small>Street *</small></div>
					<input type="text" class="" name="d[street]" required placeholder="Street" id="street">
					
					<div><small>City *</small></div>
					<input type="text" class="" name="d[city]" required placeholder="City" id="city">
					
					<div><small>State *</small></div>					
					<select name="d[state]" id="state" required>
						<?php foreach ($options['state'] as $key => $row): ?>
							<option value="<?php echo $key ?>" ><?php echo $row ?></option>
						<?php endforeach; ?>
					</select>
					
					<div><small>Country *</small></div>
					<input type="text" class="" name="d[country]" required placeholder="Country" id="country">	
					
					<div><small>Zip *</small></div>
					<input type="text" class="span4" name="d[zip]" required placeholder="Zip" id="zip">
					
		  			<div><small>Mobile</small></div>
					<input type="text" name="d[phone_mobile]" placeholder="Mobile" id="phone_mobile" class="">
									
				</div>
				
		  		<div class="span4">
					
		  			<div><small>Phone</small></div>
					<input type="text" name="d[phone]" placeholder="Phone" id="phone" class="">
					
		  			<div><small>Fax</small></div>
					<input type="text" name="d[phone_fax]" placeholder="Fax" id="phone_fax">
					
		  			<div><small>Notes</small></div>
					<textarea cols="" rows="5" name="d[notes]" placeholder="" id="notes"></textarea>
					
					<div><small>Status</small></div>
					<select name="d[status]" id="status">
						<option value=""></option>
						<?php
						$status = array("1" => "Active",
										"0" => "Inactive");
						?>
						<?php foreach ($status as $key => $row): ?>
							<option value="<?php echo $key ?>" ><?php echo $row ?></option>
						<?php endforeach; ?>
					</select>
		  		</div>
		  	</div>
		  </div>
		  <div class="modal-footer">
		    <input type="hidden" name="d[vendor_id]" value="" id="vendor-id"/>
		    <input type="hidden" name="d[axn]" value="create" id="action"/>
			<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
			<input type="submit" class="btn btn-danger" value="Delete" id="delete" name="delete" style="display: none"/>
		  </div>
	</form>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$(".flexVendors").flexigrid({
		url : 'core/view/grid/vendors.php',
		dataType : 'json',
		colModel : [ 
					{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
					{ display : 'Name', name : 'name', width : 80, sortable : true, align : 'left'}, 
					{ display : 'Email', name : 'email', width : 180, sortable : true, align : 'left'}, 
					{ display : 'City', name : 'city', width : 80, sortable : true, align : 'left'}, 
					{ display : 'State', name : 'state', width : 80, sortable : true, align : 'left'}, 
					{ display : 'Zip', name : 'zip', width : 80, sortable : true, align : 'left'}, 
					{ display : 'Country', name : 'country', width : 80, sortable : true, align : 'left'}, 
					{ display : 'Notes', name : 'notes', width : 190, sortable : true, align : 'left'}, 
					{ display : 'Status', name : 'status_text', width : 45, sortable : true, align : 'left'}
					],
		searchitems : [ {
			display : 'Id',
			name : 'id'
		}, {
			display : 'Company',
			name : 'name',
			isdefault : true
		}, {
			display : 'Email',
			name : 'email'
		}, {
			display : 'State',
			name : 'state'
		}, {
			display : 'Zip',
			name : 'zip'
		}, {
			display : 'Country',
			name : 'country'
		}, {
			display : 'Notes',
			name : 'notes'
		} ],
		onDoubleClick: false,
		multiSel: false,
		sortname : "id",
		sortorder : "desc",
		usepager : true,
		title : '',
		useRp : true,
		resize: false,
		rp : 10,
		showTableToggleBtn : true,
		width : 700,
		singleSelect: true,
		height : 270
	});
	
	$('.flexVendors').click(function(event){
	    $('.trSelected', this).each( function(){
			$.ajax({
				type:'POST',
				url:"core/view/grid/vendors.php",
				data:"id="+$(this).attr('id').substr(3),
				success:function(data) {
					$.each(data.rows, function (index, value) {	
						//$("#role").val(value.cell.permission);   
	        			$('#email').attr('value', value.cell.email);
	        			$('#email_personal').attr('value', value.cell.email_personal);
	        			$('#city').attr('value', value.cell.city);
	        			$('#street').attr('value', value.cell.street);
	        			$('#phone').attr('value', value.cell.phone);
	        			$('#phone_mobile').attr('value', value.cell.phone_mobile);
	        			$('#phone_fax').attr('value', value.cell.phone_fax);
	        			$('#notes').text(value.cell.notes);	        			
	        			$('#first_name').attr('value', value.cell.first_name);	        			
	        			$('#last_name').attr('value', value.cell.last_name);	        			
	        			$('#url').attr('value', value.cell.url); 
	        			 
	        			$('#status').val(value.cell.status);
	        			$('#state').val(value.cell.state);      			
					});
				},
				dataType:'json'
			});
			
	        $('#vendor-id').attr('value', $(this).attr('id').substr(3));
	        $('#name').attr('value',  $('td[abbr="name"] >div', this).text());
	        $('#zip').attr('value',  $('td[abbr="zip"] >div', this).text());
	        $('#country').attr('value',  $('td[abbr="country"] >div', this).text());
	    	$('#delete').show();
	        
	        $('#submitter').attr('value', 'Update');
	    	$('#action').attr('value', 'update');
	        $('#modal-create-vendors').modal('show');
	    });
	});
	
	$('#modal-create-vendors').on('hidden', function () {
	    $('#submitter').attr('value', 'Create');		
	    $('#user-id').attr('value', '');
	    $('#action').attr('value', 'create');
	    $('#delete').hide();
	    
        $('#first_name').attr('value','');
        $('#last_name').attr('value','');
        $('#url').attr('value','');
        $('#name').attr('value','');
        $('#email').attr('value','');
        $('#street').attr('value', '');
        $('#city').attr('value', '');
        $('#state').attr('value', '');
        $('#zip').attr('value', '');
        $('#country').attr('value',  '');
        $('#phone').attr('value', '');
        $('#phone_mobile').attr('value', '');
        $('#phone_fax').attr('value', '');
        $('#email_personal').attr('value', '');
	    $('#notes').text('');        
	});
});

</script>