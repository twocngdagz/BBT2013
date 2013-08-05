<div class="">
	<legend>Manage Products Options</legend>
	<table class="flexProducts"></table>
	<div class="clear"><br /></div>
    <a href="#modal-create-product-options" role="button" class="btn btn-success" data-toggle="modal">Create New Product Option</a>
</div>

<div class="modal hide fade" id="modal-create-product-options" >
	<form action="./productOptions" method="post" enctype="multipart/form-data">
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
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[price]" required placeholder="" id="price">	
					
					<div><small>Weight *</small></div>
					<input type="text" class="" ng-pattern="[-+]?[0-9]*\.?[0-9]*." name="d[weight]" required placeholder="" id="weight">	
					
				  	<div><small>Product *</small></div>
				  	<?php $products = products::getAllProducts(); ?>
				  	<select name="d[product_id]" id="product_id" required>
					 	<option value="">None</option>
					  	<?php foreach($products as $row): ?>
						 <option value="<?php echo $row['id']?>"><?php echo $row['name_short']?></option>
					  	<?php endforeach; ?>
				  	</select>	
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
		    <input type="hidden" name="d[product_option_id]" value="" id="products-option-id"/>
		    <input type="hidden" name="d[axn]" value="create" id="action"/>
			<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
			<input type="submit" class="btn btn-danger" value="Delete" id="delete" name="delete" style="display: none"/>
		  </div>
	</form>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$(".flexProducts").flexigrid({
		url : 'core/view/grid/productOptions.php',
		dataType : 'json',
		colModel : [ 
					{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
					{ display : 'Product', name : 'product_name', width : 80, sortable : true, align : 'left'}, 
					{ display : 'Name', name : 'option_name', width : 280, sortable : true, align : 'left'}, 
					{ display : 'Description', name : 'option_description', width : 380, sortable : true, align : 'left'},
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
		showTableToggleBtn : true,
		width : 700,
		singleSelect: true,
		height : 270
	});
	
	$('.flexProducts').click(function(event){
	    $('.trSelected', this).each( function(){
			$.ajax({
				type:'POST',
				url:"core/view/grid/productOptions.php",
				data:"id="+$(this).attr('id').substr(3),
				success:function(data) {
					$.each(data.rows, function (index, value) {	
	        			$('#option_name').attr('value', value.cell.option_name);
	        			$('#option_description').attr('value', value.cell.option_description);
	        			
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
        				$('#weight').attr('value', value.cell.weight);
        				$('#product_id').val(value.cell.product_id);
					});
				},
				dataType:'json'
			});
			
	        $('#products-option-id').attr('value', $(this).attr('id').substr(3));
	    	$('#delete').show();
	        
	        $('#submitter').attr('value', 'Update');
	    	$('#action').attr('value', 'update');
	        $('#modal-create-product-options').modal('show');
	    });
	});
	
	$('#modal-create-product-options').on('hidden', function () {
	    $('#submitter').attr('value', 'Create');		
	    $('#products-option-id').attr('value', '');
	    $('#action').attr('value', 'create');
	    $('#delete').hide();
	    
        $('#option_name').attr('value', '');
        $('#option_description').attr('value', '');
        
        $('#image_thumbnail_val').attr('src', '');
        $('#image_small_val').attr('src', '');
        $('#image_large_val').attr('src', '');
        
        $('#thumbnail_current').attr('value', '');
		$('#small_current').attr('value', '');
		$('#large_current').attr('value', '');
		
		$('#image_small_link span').html('');
		$('#image_large_link span').html('');
		$('#image_thumbnail_link span').html('');
		
        $('#price').attr('value', '');       
        $('#weight').attr('value', ''); 
        $('#product_id').val('');
	})
});

</script>