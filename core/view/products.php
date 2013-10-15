<div class="">
	<legend>Manage Products</legend>
	<table class="flexProducts"></table>
	<div class="clear"><br /></div>
    <a href="#modal-create-products" role="button" class="btn btn-success" data-toggle="modal">Create New Product</a>
</div>

<div class="modal hide fade" id="modal-create-products" data-width="900">

<ul id="myTab" class="nav nav-tabs">
  <li class="active" id="product-select"><a href="#products" data-toggle="tab">Products</a></li>
  <li class="" id="options-select"><a href="#options" data-toggle="tab">Options</a></li>
  <li class="" id="option-form-select"><a href="#option_form" data-toggle="tab">Form Options</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="products">
	<form action="./products" method="post" enctype="multipart/form-data">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Products</h3>
		</div>
		  <div class="modal-body">
		  	<div class="row-fluid">
		  		<div class="span4">
				  	<div><small>Name *</small></div>
					<input type="text" class="" name="d[name_short]" required placeholder="" id="name_short">
								
					<div><small>Description</small></div>
					<textarea cols="" rows="3" id="description_long" name="d[description_long]"></textarea>	
					
					<input type="hidden" name="d[name_long]" placeholder="" id="name_long">
					
					<!--
					<div><small>Description (long) *</small></div>
					<textarea cols="" rows="3" id="description_long" name="d[description_long]"></textarea>	
					-->
					
					<div><small>Price *</small></div>
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[price]" required placeholder="" id="price">

					<div><small>Cost *</small></div>
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[cost]" required placeholder="" id="cost">	
					
					<div><small>Status</small></div>
					<select name="d[status]" id="status" required>
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
		  		
		  		<div class="span4">
				  	<div><small>Category</small></div>
				  	<?php $category = category::getAllCategory(); ?>
				  	<select name="d[category_id]" id="category_id">
					 	<option value="">None</option>
					  	<?php foreach($category as $cat): ?>
						 <option value="<?php echo $cat['id']?>"><?php echo $cat['name_short']?></option>
					  	<?php endforeach; ?>
				  	</select>			
				  	
				  	<div><small>Brand</small></div>
				  	<?php $brands = brands::getAllBrands(); ?>
				  	<select name="d[brand_id]" id="brand_id">
					 	<option value="">None</option>
					  	<?php foreach($brands as $cat): ?>
						 <option value="<?php echo $cat['id']?>"><?php echo $cat['name_short']?></option>
					  	<?php endforeach; ?>
				  	</select>
				  	
				  	<div><small>Vendor</small></div>
				  	<?php $vendors = vendors::getAllVendors(); ?>
				  	<select name="d[vendor_id]" id="vendor_id">
					 	<option value="">None</option>
					  	<?php foreach($vendors as $cat): ?>
						 <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>
					  	<?php endforeach; ?>
				  	</select>			
				  	
					<div><small>Comments</small></div>
					<textarea cols="" rows="3" id="comments" name="d[comments]"></textarea>	
		  		</div>
		  		
		  		<div class="span4">
					<div><small>Thumbnail</small></div>
					<small>
						<a href="" id="image_thumbnail_link" target="_blank">
							<img src="" id="image_thumbnail_val" style="width:50px; height:50px;"/>
							<span></span>
						</a>
					</small>
					<input type="file" name="thumbnail" id="image_thumbnail" accept="image/png, image/gif, image/jpeg" >
		    		<input type="hidden" name="thumbnail_current" id="thumbnail_current"/>
		    		
					<div><small>Small</small></div>
					<small>
						<a href="" id="image_small_link" target="_blank">
							<img src="" id="image_small_val" style="width:50px; height:50px;"/>
							<span></span>
						</a>
					</small>
					<input type="file" name="small" id="image_small" accept="image/png, image/gif, image/jpeg" >
		    		<input type="hidden" name="small_current" id="small_current"/>
		    		
					<div><small>Large</small></div>			
					<small>
						<a href="" id="image_large_link" target="_blank">
							<img src="" id="image_large_val" style="width:50px; height:50px;"/>
							<span></span>
						</a>
					</small>
					<input type="file" name="large" id="image_large" accept="image/png, image/gif, image/jpeg" >
		    		<input type="hidden" name="large_current" id="large_current"/>
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
	
	<div class="tab-pane" id="options">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Manage Products Options</h3>
		</div>
		<div class="modal-body">
			<table class="flexProductOptions"></table>
		</div>
		<div class="modal-footer">
	    	<a href="#option_form"  data-toggle="tab" class="btn btn-success" data-toggle="modal">Create New Product Option</a>
		</div>
	</div>
	
	<div class="tab-pane" id="option_form">
	<form action="./products" method="post" enctype="multipart/form-data">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Product Options</h3>
		</div>
		  <div class="modal-body">
		  	<div class="row-fluid">
		  		<div class="span6">
				  	<div><small>Name *</small></div>
					<input type="text" class="" name="d[option_name]" required placeholder="" id="option_name">
					
					<div><small>Description *</small></div>
					<input type="text" name="d[option_description]" placeholder="" id="option_description" required>
					
					<div><small>Price *</small></div>
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[price]" required placeholder="" id="price-product-option">
					
					<div><small>Weight *</small></div>
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[weight]" required placeholder="" id="weight-product-option">	
					
					<input type="hidden" class="" name="d[product_id]" id="product-id">	
					<!--
					  	<div><small>Product *</small></div>
					  	<?php $products = products::getAllProducts(); ?>
					  	<select name="d[product_id]" id="product_id-product-option" required>
						 	<option value="">None</option>
						  	<?php foreach($products as $row): ?>
							 <option value="<?php echo $row['id']?>"><?php echo $row['name_short']?></option>
						  	<?php endforeach; ?>
					  	</select>	
				  	-->
		  		</div>
		  		
		  		<div class="span4">
					<div><small>Thumbnail</small></div>
					<small>
						<a href="" id="image_thumbnail_link-product-option" target="_blank">
							<img src="" id="image_thumbnail_val-product-option" style="width:50px; height:50px;"/>
							<span></span>
						</a>
					</small>
					<input type="file" name="thumbnail" id="image_thumbnail-product-option" accept="image/png, image/gif, image/jpeg" >
		    		<input type="hidden" name="thumbnail_current" id="thumbnail_current-product-option"/>
		    		
					<div><small>Small</small></div>
					<small>
						<a href="" id="image_small_link-product-option" target="_blank">
							<img src="" id="image_small_val-product-option" style="width:50px; height:50px;"/>
							<span></span>
						</a>
					</small>
					<input type="file" name="small" id="image_small-product-option" accept="image/png, image/gif, image/jpeg" >
		    		<input type="hidden" name="small_current" id="small_current-product-option"/>
		    		
					<div><small>Large</small></div>			
					<small>
						<a href="" id="image_large_link-product-option" target="_blank">
							<img src="" id="image_large_val-product-option" style="width:50px; height:50px;"/>
							<span></span>
						</a>
					</small>
					<input type="file" name="large" id="image_large-product-option" accept="image/png, image/gif, image/jpeg" >
		    		<input type="hidden" name="large_current" id="large_current-product-option"/>
		  		</div>
		  	</div>
		  </div>
		  <div class="modal-footer">
		    <input type="hidden" name="d[product_option_id]" value="" id="products-option-id"/>
		    <input type="hidden" name="d[axn]" value="create" id="action-product-option"/>
			<input type="submit" class="btn btn-success" value="Add" id="submitter-product-option" name="button-product-option"/>
			<input type="submit" class="btn btn-danger" value="Delete" id="delete-product-option" name="delete" style="display: none"/>
		  </div>
	</form>
	</div>
</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#myTab a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	
	$(".flexProducts").flexigrid({
		url : 'core/view/grid/products.php',
		dataType : 'json',
		colModel : [ 
					{ display : 'Id', name : 'id', width : 30, sortable : true, align : 'right'}, 
					{ display : 'Price', name : 'price', width : 60, sortable : true, align : 'left'},
					{ display : 'Cost', name : 'cost', width : 60, sortable : true, align : 'left'},
					{ display : 'Name', name : 'name_short', width : 130, sortable : true, align : 'left'}, 
					{ display : 'Description', name : 'description_long', width : 180, sortable : true, align : 'left'},
					{ display : 'Comments', name : 'comments', width : 350, sortable : true, align : 'left'},
					{ display : 'Status', name : 'status_text', width : 40, sortable : true, align : 'left'}
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
		height : 270
	});

//on click grid from product to product options
	$('.flexProducts').click(function(event){       
	    $('.trSelected', this).each( function(){
			$.ajax({
				type:'POST',
				url:"core/view/grid/products.php",
				data:"id="+$(this).attr('id').substr(3),
				success:function(data) {
						$.each(data.rows, function (index, value) {	
						var options = $(".flexProductOptions").flexigrid({
							url : 'core/view/grid/productOptions.php',
							dataType : 'json',
							colModel : [ 
										{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
										{ display : 'Name', name : 'option_name', width : 180, sortable : true, align : 'left'}, 
										{ display : 'Description', name : 'option_description', width : 280, sortable : true, align : 'left'},
										{ display : 'Price', name : 'price', width : 60, sortable : true, align : 'left'},
										{ display : 'Weight', name : 'weight', width : 60, sortable : true, align : 'left'}
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
							qtype :'`products_item_options`.`product_id`',
							showTableToggleBtn : true,
							width : 700,
							onSuccess: function(data) {
							},
							singleSelect: true,
							height : 270
						});
						options.flexReload();
	        			$('#name_short').attr('value', value.cell.name_short);
	        			$('#name_long').attr('value', value.cell.name_long);
	        			$('#description_short').attr('value', value.cell.description_short);
	        			$('#description_long').text(value.cell.description_long);
	        			
	        			$('#image_thumbnail_val').attr('src', value.cell.image_thumbnail);
	        			$('#image_thumbnail_link').attr('href', value.cell.image_thumbnail);
	        			$('#image_thumbnail_link span').html(value.cell.thumb);
	        			
	        			$('#image_small_val').attr('src', value.cell.image_small);
	        			$('#image_small_link').attr('href', value.cell.image_small);
	        			$('#image_small_link span').html(value.cell.small);
	        			
	        			$('#image_large_val').attr('src', value.cell.image_large);
	        			$('#image_large_link').attr('href', value.cell.image_large);
	        			$('#image_large_link span').html(value.cell.large);
	        			
        				$('#thumbnail_current').attr('value', value.cell.image_thumbnail);
        				$('#small_current').attr('value', value.cell.image_small);
        				$('#large_current').attr('value', value.cell.image_large);
        				
        				$('#price').attr('value', value.cell.price);
        				$('#cost').attr('value', value.cell.cost);
        				
        				$('#category_id').val(value.cell.category_id);
        				$('#brand_id').val(value.cell.brand_id);
        				$('#vendor_id').val(value.cell.vendor_id);
        				$('#status').val(value.cell.status);
	        			$('#comments').text(value.cell.comments);
					});
				},
				dataType:'json'
			});
			
	        $('#products-id').attr('value', $(this).attr('id').substr(3));
	    	$('#delete').show();
	        		
	        $('#submitter').attr('value', 'Update');
	    	$('#action').attr('value', 'update');
	        $('#modal-create-products').modal('show');
	    });
	});
		
	$('#modal-create-products').on('shown', function () {
        		
		if( $('#submitter').attr('value') == 'Add' || $('#submitter').attr('value') == 'Create' ) {
			$('#option-form-select').hide();
			$('#options-select').hide();
			$('#myTab li:eq(0) a').tab('show');
			$('#myTab li:eq(1) a').tab('hide');
			$('#myTab li:eq(2) a').tab('hide');
		} else if( $('#submitter').attr('value') == 'Update') {
			$('#option-form-select').show();
			$('#options-select').show();
		}
	})
	
	$('#modal-create-products').on('hidden', function () {
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
			$('#product-id').attr('value',$('.flexProducts .trSelected').attr('id').substr(3));
			$('#products-option-id').attr('value',$(this).attr('id').substr(3));
			$('#myTab li:eq(2) a').tab('show');
	    	$('#delete-product-option').show();
	        $('#submitter-product-option').attr('value', 'Update');
	    	$('#action-product-option').attr('value', 'update');
	    });
	});
	
	$('#myTab li:eq(1) a').on('shown', function () {
		$('#product-id').attr('value',$('.flexProducts .trSelected').attr('id').substr(3));
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