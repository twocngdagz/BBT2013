<?php include 'settings.php';?>

<div class="">
	<legend>Manage Orders</legend>
	<table class="flexOrders"></table>
	<div class="clear"><br /></div>
</div>

<div class="modal hide fade" id="modal-create-orders"  data-width="900">

	<ul id="myTab" class="nav nav-tabs">
		<li class="active" id="order-select"><a href="#orders" data-toggle="tab">Order Status</a></li>
		<li class="" id="order-items-select"><a href="#order_items" data-toggle="tab">Order Items</a></li>
		<!-- <li class="" id="order-details-select"><a href="#order_details" data-toggle="tab">Order Details</a></li> -->
	</ul>

	<div class="tab-content">
		<div class="tab-pane active" id="orders">
			<form action="./orders" method="post" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3>Orders</h3>
					<div class="row-fluid">
						<div class="span6">
							<div><small>Status</small></div>
							<select name="d[status]" id="status" required>
								<option value=""></option>
								<?php
								$status = array("Pending" => "Pending",
									"On Hold" => "On Hold", "Partially Shipped" => "Partially Shipped", "Fully Shipped" => "Fully Shipped",
									"Cancelled" => "Cancelled", "Fully Refunded" => "Fully Refunded", "Partially Refunded" => "Partially Refunded", "Test Order" => "Test Order");
									?>
									<?php foreach ($status as $key => $row): ?>
										<option value="<?php echo $key ?>" ><?php echo $row ?></option>
									<?php endforeach; ?>
							
							</select>
							<div><small></small></div>
							<input type="button" class="btn btn-success input-block-level" value="Issue Full Refund" id="fullrefund" name="fullrefund"/>
  							
							<div><small>Shipping Method</small></div>
							<input type="text" class="input-block-level span6" name="d[shippingmethod]" placeholder="" id="shippingmethod">
							<div><small>Comment</small></div>
							<textarea id="comment" name="d[comment]" rows="3" class="span12"></textarea>
						</div>
						<div class="span6">
							<div><small>Shipping Date</small></div>
							<input type="text" class="input-block-level span6 datepicker" name="d[shippingdate]" placeholder="" id="shippingdate">
							<div><small>Tracking Number</small></div>
							<input type="text" class="input-block-level span6" name="d[trackingnumber]" placeholder="" id="trackingnumber">
						</div>
					</div>	
				</div>
				<div class="modal-body">
					<div class="row-fluid">
						<div class="span6">
							<div><small>Billing Address</small></div>

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
							<input type="text" class="" name="d[address2]" placeholder="" id="address2">

							<div><small>City</small></div>
							<input type="text" class="" name="d[city]" required placeholder="" id="city">

							<div class="form-row">
								<label for="name" class=""> State / Zipcode / Country</label>
								<select name="d[state]" class='span4' id="state">
									<?php foreach($options['state'] as $state =>$row): ?>
										<option value='<?php echo $row; ?>'><?php echo $row ?></option>
									<?php endforeach; ?>
								</select>
								<input type="text" id="zipcode" name="zipcode" class="required input-block-level span4" value='' placeholder="Zipcode" />

								<?php $countryList = array('USA','Canada'); ?>
								<select name="country" class='span4' id='country'>
									<?php foreach($countryList as $country): ?>
										<option value='<?php echo $country ?>'><?php echo $country ?></option>
									<?php endforeach; ?>
								</select>
							</div> 

						</div>
						
						<div class="span6">
							<div><small>Shipping Address</small></div>
							<div><small>Name *</small></div>

							<input type="text" class="input-block-level span6" name="d[first_name]" required placeholder="" id="sfirst_name">
							<input type="text" class="input-block-level span6" name="d[last_name]" required placeholder="" id="slast_name">
							
							<div><small>Address</small></div>
							<input type="text" class="" name="d[address]" required placeholder="" id="saddress">

							<div><small>Address 2</small></div>
							<input type="text" class="" name="d[address2]" placeholder="" id="saddress2">

							<div><small>City</small></div>
							<input type="text" class="" name="d[city]" required placeholder="" id="scity">

							<div class="form-row">
								<label for="name" class=""> State / Zipcode / Country</label>
								<select name="d[state]" class='span4' id='sstate'>
									<?php foreach($options['state'] as $state =>$row): ?>
										<option value='<?php echo $row; ?>'><?php echo $row ?></option>
									<?php endforeach; ?>
								</select>
								<input type="text" name="zipcode" class="required input-block-level span4" value='' placeholder="Zipcode" id='szipcode'/>

								<?php $countryList = array('USA','Canada'); ?>
								<select name="country" class='span4' id='scountry'>
									<?php foreach($countryList as $country): ?>
										<option value='<?php echo $country ?>'><?php echo $country ?></option>
									<?php endforeach; ?>
								</select>
							</div> 
						</div>
						
						<div class="span4">
							
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="d[product_id]" value="" id="products-id"/>
					<input type="hidden" name="d[axn]" value="create" id="action"/>
					<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
					<input type="submit" class="btn btn-danger" value="Delete" id="delete" name="delete" style="display: none"/>
				</div>
			</form>
		</div>
		<div class="tab-pane" id="order_items">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Manage Order Item</h3>
			</div>
			<div class="modal-body">
				<table class="flexProductOptions"></table>
			</div>
			<div class="modal-footer">
				<a href="#option_form"  data-toggle="tab" class="btn btn-success" data-toggle="modal">Create New Product Option</a>
			</div>
		</div>		
	</div>
</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#myTab a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});
			$('.datepicker').datepicker({
				autoclose: true,
				format: "yyyy-mm-dd"
			});
			
			$("#modal-create-orders").on("show", function () {
			  $("body").addClass("modal-open");
			}).on("hidden", function () {
			  $("body").removeClass("modal-open")
			});
			
			$(".flexOrders").flexigrid({
				url : 'core/view/grid/orders.php',
				dataType : 'json',
				colModel : [ 
				{ display : 'Id', name : 'id', width : 45, sortable : true, align : 'right'}, 
				{ display : 'Customer', name : 'fullname', width : 150, sortable : false, align : 'left'},
				{ display : 'Date', name : 'date', width : 130, sortable : true, align : 'left'}, 
				{ display : 'Receipt', name : 'payment_receipt_number', width : 180, sortable : true, align : 'left'},
				{ display : 'Total', name : 'total', width : 180, sortable : false, align : 'left'},
				{ display : 'Status', name : 'status', width : 50, sortable : true, align : 'left'}
				],
				searchitems : [ {
					display : 'Id',
					name : 'id'
				}, {
					display : 'Description',
					name : 'description_long',
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
				height : 240
			});

			//on click grid from product to product options
			$('.flexOrders').click(function(event){       
				$('.trSelected', this).each( function(){
					$.ajax({
						type:'POST',
						url:"core/view/grid/orders.php",
						data:"id="+$(this).attr('id').substr(3),
						success:function(data) {
							$.each(data.rows, function (index, value) {
								var options = $(".flexProductOptions").flexigrid(	{
									url : 'core/view/grid/order_details.php',
									dataType : 'json',
									colModel : [ 
									{ display : 'Id', name : 'product_items_fk', width : 45, sortable : true, align : 'right'}, 
									{ display : 'Name', name : 'product_name', width : 300, sortable : true, align : 'left'}, 
									{ display : 'Option Name', name : 'option_name', width : 200, sortable : true, align : 'left'},
									{ display : 'Price', name : 'price', width : 60, sortable : true, align : 'left'},
									{ display : 'Weight', name : 'weight', width : 60, sortable : true, align : 'left'},
									{ display : 'Quantity', name : 'qty', width : 60, sortable : true, align : 'left'}
									],
									searchitems : [ {
										display : 'Id',
										name : 'id'
									}, {
										display : 'Option Name',
										name : 'option_name',
										isdefault : false
									}, {
										display : 'Option Description',
										name : 'option_description',
										isdefault : false
									}, {
										display : 'Price',
										name : 'price',
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
									id: value.cell.id,
									qtype :'`products_item_options`.`product_id`',
									showTableToggleBtn : true,
									width : 700,
									onSuccess: function(data) {
									},
									singleSelect: true,
									height : 270
								});
								options.flexReload();
							});
						},
						dataType:'json'
					});
					$('#order_id').attr('value', $(this).attr('id').substr(3));
					$.ajax({
						type:'POST',
						url:"core/view/grid/order_customer_details.php",
						data:"id="+$(this).attr('id').substr(3),
						success:function(data) {
							$.each(data.rows, function (index, value) { 
								$('#first_name').attr('value', value.cell.first_name);
								$('#last_name').attr('value', value.cell.last_name);
								$('#email').attr('value', value.cell.email);
								$('#phone').attr('value', value.cell.phone);
								$('#address').attr('value', value.cell.address);
								$('#address2').attr('value', value.cell.address2);
								$('#city').attr('value', value.cell.city);
								$('#zipcode').attr('value', value.cell.zipcode);
								$('#state').val(value.cell.state);
								$('#country').val(value.cell.country);
								$('#status').val(value.cell.status);
								$('#sfirst_name').attr('value', value.cell.sfirst_name);
								$('#slast_name').attr('value', value.cell.slast_name);
								$('#saddress').attr('value', value.cell.saddress1);
								$('#saddress2').attr('value', value.cell.saddress2);
								$('#scity').attr('value', value.cell.scity);
								$('#szipcode').attr('value', value.cell.szipcode);
								$('#sstate').val(value.cell.sstate);
								$('#scountry').val(value.cell.scountry);
								$('#shippingmethod').val(value.cell.shippingmethod);
								$('#shippingdate').val(value.cell.shippingdate);
								$('#trackingnumber').val(value.cell.trackingnumber);
								$('#comment').val(value.cell.comment);
							});
						},
						dataType:'json'
					});

					$('#products-id').attr('value', $(this).attr('id').substr(3));
					$('#delete').show();

					$('#submitter').attr('value', 'Update');
					$('#action').attr('value', 'update');
					$('#modal-create-orders').modal('show');
				});
			});

			$('#modal-create-orders').on('shown', function () {
				
				if( $('#submitter').attr('value') == 'Add' || $('#submitter').attr('value') == 'Create' ) {
					$('#order-details-select').hide();
					$('#order-items-select').hide();
					$('#myTab li:eq(0) a').tab('show');
					$('#myTab li:eq(1) a').tab('hide');
					$('#myTab li:eq(2) a').tab('hide');
				} else if( $('#submitter').attr('value') == 'Update') {
					$('#order-details-select').show();
					$('#order-items-select').show();
				}
			})

			$('#modal-create-orders').on('hidden', function () {
				window.location.reload();
				$('#myTab li:eq(0) a').tab('show');
				
				$('#submitter').attr('value', 'Create');		
				$('#user-id').attr('value', '');
				$('#action').attr('value', 'create');
				$('#delete').hide();
				
				$('#name_short').attr('value', '');
				$('#name_long').attr('value', '');
				$('#description_long').text('');
				$('#description_short').attr('value', '');
				
				$('#image_thumbnail_val').attr('src', '');
				$('#image_small_val').attr('src', '');
				$('#image_large_val').attr('src', '');
				
				$('#thumbnail_current').attr('value', '');
				$('#small_current').attr('value', '');
				$('#large_current').attr('value', '');
				
				$('#image_small_link span').html('');
				$('#image_large_link span').html('');
				$('#image_thumbnail_link span').html('');
				
				$('#comments').attr('value', '');
				$('#name_long').attr('value', '');
				$('#comments').text('');
				$('#zip').attr('value', '');
				$('#country').attr('value',  '');
				
				$('#status').val('');
				
				$('#price').attr('value', '');
				
				$('#category_id').val('');
				$('#brand_id').val('');
				$('#vendor_id').val('');
			});
			

			//on click grid from product to product options
			// $('.flexOrders').click(function(event){       
			//     $('.trSelected', this).each( function(){
			// 		$.ajax({
			// 			type:'POST',
			// 			url:"core/view/grid/orders.php",
			// 			data:"id="+$(this).attr('id').substr(3),
			// 			success:function(data) {
			// 					$.each(data.rows, function (index, value) {	
			// 					var options = $(".flexProductOptions").flexigrid({
			// 						url : 'core/view/grid/customer_orders.php',
			// 						dataType : 'json',
			// 						colModel : [ 
			// 									{ display : 'Id', name : 'id', width : 45, sortable : true, align : 'right'},
			// 									{ display : 'Product Name', name : 'product_name', width : 150, sortable : false, align : 'left'},
			// 									{ display : 'Price', name : 'price', width : 150, sortable : false, align : 'left'},
			// 									{ display : 'Quantity', name : 'qty', width : 130, sortable : true, align : 'left'}, 
			// 									],
			// 						searchitems : [ {
			// 							display : 'Id',
			// 							name : 'id'
			// 						}, {
			// 							display : 'Option Name',
			// 							name : 'option_name',
			// 							isdefault : false
			// 						}, {
			// 							display : 'Option Description',
			// 							name : 'option_description',
			// 							isdefault : false
			// 						}, {
			// 							display : 'Price',
			// 							name : 'price',
			// 							isdefault : false
			// 						}],
			// 						onDoubleClick: false,
			// 						multiSel: false,
			// 						sortname : "id",
			// 						sortorder : "desc",
			// 						usepager : true,
			// 						title : '',
			// 						useRp : true,
			// 						resize: false,
			// 						rp : 10,
			// 						query: value.cell.id,
			// 						qtype :'`products_item_options`.`product_id`',
			// 						showTableToggleBtn : true,
			// 						width : 700,
			// 						onSuccess: function(data) {
			// 						},
			// 						singleSelect: true,
			// 						height : 270
			// 					});
			// 					options.flexReload();
			//         			$('#name_short').attr('value', value.cell.name_short);
			//         			$('#name_long').attr('value', value.cell.name_long);
			//         			$('#description_short').attr('value', value.cell.description_short);
			//         			$('#description_long').text(value.cell.description_long);
			        			
			//         			$('#image_thumbnail_val').attr('src', value.cell.image_thumbnail);
			//         			$('#image_thumbnail_link').attr('href', value.cell.image_thumbnail);
			//         			$('#image_thumbnail_link span').html(value.cell.thumb);
			        			
			//         			$('#image_small_val').attr('src', value.cell.image_small);
			//         			$('#image_small_link').attr('href', value.cell.image_small);
			//         			$('#image_small_link span').html(value.cell.small);
			        			
			//         			$('#image_large_val').attr('src', value.cell.image_large);
			//         			$('#image_large_link').attr('href', value.cell.image_large);
			//         			$('#image_large_link span').html(value.cell.large);
			        			
		 //        				$('#thumbnail_current').attr('value', value.cell.image_thumbnail);
		 //        				$('#small_current').attr('value', value.cell.image_small);
		 //        				$('#large_current').attr('value', value.cell.image_large);
		        				
		 //        				$('#price').attr('value', value.cell.price);
		        				
		 //        				$('#category_id').val(value.cell.category_id);
		 //        				$('#brand_id').val(value.cell.brand_id);
		 //        				$('#vendor_id').val(value.cell.vendor_id);
		 //        				$('#status').val(value.cell.status);
			//         			$('#comments').text(value.cell.comments);
			// 				});
			// 			},
			// 			dataType:'json'
			// 		});
					
			//         $('#products-id').attr('value', $(this).attr('id').substr(3));
			//     	$('#delete').show();
			        		
			//         $('#submitter').attr('value', 'Update');
			//     	$('#action').attr('value', 'update');
			//         $('#modal-create-products').modal('show');
			//     });
			// });

			/*$('.flexProductOptions').click(function(e) {
				$('.trSelected td:first', this).each( function(){
					window.open('/products.php?id='+$(this).text(), '_blank');
				});
			});
*/

			//on click product options 		
			$('.flexProductOptions').click(function(event){
				$('.trSelected', this).each( function(){	
					$.ajax({
						type:'POST',
						url:"core/view/grid/productOptions.php",
						data:"id="+$(this).attr('id').substr(3),
						success:function(data) {
							$.each(data.rows, function (index, value) {	
								$('#option_name').attr('value', value.cell.option_name);
								$('#option_description').attr('value', value.cell.option_description);
								
								$('#image_thumbnail_val-product-option').attr('src', value.cell.image_thumbnail);
								$('#image_thumbnail_link-product-option').attr('href', value.cell.image_thumbnail);
								$('#image_thumbnail_link-product-option span').html(value.cell.thumb);
								
								$('#image_small_val-product-option').attr('src', value.cell.image_small);
								$('#image_small_link-product-option').attr('href', value.cell.image_small);
								$('#image_small_link-product-option span').html(value.cell.small);
								
								$('#image_large_val-product-option').attr('src', value.cell.image_large);
								$('#image_large_link-product-option').attr('href', value.cell.image_large);
								$('#image_large_link-product-option span').html(value.cell.large);
								
								$('#thumbnail_current-product-option').attr('value', value.cell.image_thumbnail);
								$('#small_current-product-option').attr('value', value.cell.image_small);
								$('#large_current-product-option').attr('value', value.cell.image_large);
								
								$('#price-product-option').attr('value', value.cell.price);
								$('#weight-product-option').attr('value', value.cell.weight);
								$('#product-id').attr('value',value.cell.product_id);
							});
						},
						dataType:'json'
					});
					/*$('#product-id').attr('value',$('.flexProducts .trSelected').attr('id').substr(3));
					$('#products-option-id').attr('value',$(this).attr('id').substr(3));
					$('#myTab li:eq(2) a').tab('show');
					$('#delete-product-option').show();
					$('#submitter-product-option').attr('value', 'Update');
					$('#action-product-option').attr('value', 'update');*/
				});
			});

			$('#myTab li:eq(1) a').on('shown', function () {
				$('#product-id').attr('value',$('.flexOrders .trSelected').attr('id').substr(3));
				$('#submitter-product-option').attr('value', 'Create');		
				$('#action-product-option').attr('value', 'create');
				$('#delete-product-option').hide();
				
				$('#option_name').attr('value', '');
				$('#option_description').attr('value', '');
				
				$('#image_thumbnail_val-product-option').attr('src', '');
				$('#image_small_val-product-option').attr('src', '');
				$('#image_large_val-product-option').attr('src', '');
				
				$('#thumbnail_current-product-option').attr('value', '');
				$('#small_current-product-option').attr('value', '');
				$('#large_current-product-option').attr('value', '');
				
				$('#image_small_link-product-option span').html('');
				$('#image_large_link-product-option span').html('');
				$('#image_thumbnail_link-product-option span').html('');
				
				$('#price-product-option').attr('value', '');       
				$('#weight-product-option').attr('value', ''); 
			        //$('#product-id-option').attr('value', ''); 
		    });
		});

	</script>
</div>