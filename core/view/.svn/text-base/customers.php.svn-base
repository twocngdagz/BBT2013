<?php include 'settings.php';?>
<div class="">
	<legend>Manage Customers</legend>
	<table class="flexCustomers"></table>
	<div class="clear"><br /></div>
    <a href="#modal-create-customers" role="button" class="btn btn-success" data-toggle="modal">Add Customer</a>
</div>

<div class="modal hide fade" id="modal-create-customers">
<ul id="myTab" class="nav nav-tabs">
  <li class="active" id="customer-select"><a href="#customers" data-toggle="tab">Customer Details</a></li>
  <li class="" id="order-select"><a href="#order" data-toggle="tab">Customer Orders</a></li>
</ul>

<div class="tab-content">
	<div class="tab-pane active" id="customers">
	<form action="./customers" method="post" enctype="multipart/form-data">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Customer Information</h3>
		</div>
		  <div class="modal-body">
		  	<div class="row-fluid">
		  		<div class="span10">
				  <div><small>Name *</small></div>
					<input type="text" class="input-block-level span6"  name="d[first_name]" required placeholder="" id="first_name">
					<input type="text" class="input-block-level span6" name="d[last_name]" required placeholder="" id="last_name">
								
					<div><small>Email</small></div>
					<input type="text" class="" name="d[email]" required placeholder="" id="email">
					
					
					<div><small>Phone *</small></div>
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[phone]" required placeholder="" id="phone">	
					
					<div><small>Address</small></div>
					<input type="text" class="" name="d[address]" required placeholder="" id="address">

					<div><small>Address 2</small></div>
					<input type="text" class="" name="d[address2]"  placeholder="" id="address2">

					<div><small>City</small></div>
					<input type="text" class="" name="d[city]" required placeholder="" id="city">

					<div class="form-row">
                <label for="name" class=""> State / Zipcode / Country</label>
                <select name="d[state]" class='span4' id="state">
                    <?php foreach($options['state'] as $state =>$row): ?>
                    <option value='<?php echo $state; ?>'><?php echo $row ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" id="zipcode" name="d[zipcode]" class="required input-block-level span4" value='' placeholder="Zipcode" />

                <?php $countryList = array('USA','Canada'); ?>
                <select name="d[country]" id="country" class='span4'>
                    <?php foreach($countryList as $country): ?>
                    <option value='<?php echo $country ?>'><?php echo $country ?></option>
                    <?php endforeach; ?>
                </select>
            </div> 

					</div>
															
		  		</div>
		  		
		  	</div>
		  <div class="modal-footer">
		    <input type="hidden" name="d[customer_id]" value="" id="customer-id"/>
		    <input type="hidden" name="d[axn]" value="create" id="action"/>
			<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
			<input type="submit" class="btn btn-danger" value="Delete" id="delete" name="delete" style="display: none"/>
		  </div>
	</form>
	</div>

	<div class="tab-pane" id="order">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Customer Order List</h3>
	</div>
	<div class="modal-body">
			<table class="flexCustomerOrders"></table>
		</div>
		<div class="modal-footer">
	    	
		</div>
	</div>
</div>

	</div>
<script type="text/javascript">
$(document).ready(function() {

	$(".flexCustomers").flexigrid({
		url : 'core/view/grid/customers.php',
		dataType : 'json',
		colModel : [ 
					{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
					{ display : 'Name', name : 'fullname', width : 130, sortable : false, align : 'left'}, 
					{ display : 'Email', name : 'email', width : 180, sortable : true, align : 'left'},
					{ display : 'Phone', name : 'phone', width : 370, sortable : true, align : 'left'},
					{ display : 'Status', name : 'status_text', width : 40, sortable : true, align : 'left'}
					],
		searchitems : [ {
			display : 'Id',
			name : 'id'
		}, {
			display : 'Name',
			name : 'fullname',
			isdefault : false
		}],
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

	$('.flexCustomers').click(function(event){
	    $('.trSelected', this).each( function(){
			$.ajax({
				type:'POST',
				url:"core/view/grid/customers.php",
				data:"id="+$(this).attr('id').substr(3),
				success:function(data) {
					$.each(data.rows, function (index, value) {	
					var options = $(".flexCustomerOrders").flexigrid({
							url : 'core/view/grid/customer_orders.php',
							dataType : 'json',
							colModel : [ 
										{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
										{ display : 'Receipt', name : 'payment_receipt_number', width : 180, sortable : true, align : 'left'}, 
										{ display : 'Date', name : 'date', width : 100, sortable : true, align : 'left'},
										{ display : 'Total', name : 'total', width : 60, sortable : true, align : 'left'},
										{ display : 'Stat', name : 'status', width : 60, sortable : true, align : 'left'}
										],
							searchitems : [ {
								display : 'Id',
								name : 'id'
							}, {
								display : 'Receipt',
								name : 'payment_receipt_number',
								isdefault : false
							}, {
								display : 'Date',
								name : 'date',
								isdefault : false
							}, {
								display : 'Total',
								name : 'total',
								isdefault : false
							}],
							onDoubleClick: false,
							multiSel: false,
							sortname : "id",
							sortorder : "desc",
							usepager : true,
							title : '',
							useRp : true,
							resize: false,
							rp : 10,
							query: value.cell.id,
							qtype :'`customer_orders`.`cust_fk`',
							showTableToggleBtn : true,
							width : 500,
							onSuccess: function(data) {
							},
							singleSelect: true,
							height : 270
						});
						//$("#role").val(value.cell.permission);   
      			$('#first_name').attr('value', value.cell.first_name);
      			$('#last_name').attr('value', value.cell.last_name);
      			$('#email').attr('value', value.cell.email);
      			$('#phone').attr('value', value.cell.phone);
      			$('#address').attr('value', value.cell.address);
      			$('#address2').attr('value', value.cell.address2);
      			$('#state').val(value.cell.state);
      			$('#city').attr('value', value.cell.city);
      			$('#country').val(value.cell.country);
      			$('#zipcode').attr('value', value.cell.zipcode);
					});
				},
				dataType:'json'
			});
			
	        $('#customer-id').attr('value', $(this).attr('id').substr(3));
	    	$('#delete').show();
	        
	        $('#submitter').attr('value', 'Update');
	    	$('#action').attr('value', 'update');
	        $('#modal-create-customers').modal('show');
	    });
	});



	$('#modal-create-customers').on('hidden', function () {
		window.location.reload();
		$('#submitter').attr('value', 'Create');		
	    $('#customer-id').attr('value', '');
	    $('#action').attr('value', 'create');
	    $('#delete').hide();

	    $('#first_name').attr('value', '');
	     $('#last_name').attr('value', '');
	     $('#email').attr('value', '');
	     $('#phone').attr('value', '');
	     $('#address').attr('value', '');
	     $('#address2').attr('value', '');
	     $('#state').attr('value', '');
	     $('#city').attr('value', '');
	     $('#zipcode').attr('value', '');
	})
	
});

</script>