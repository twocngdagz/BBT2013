<div class="">
	<legend>Manage Categories</legend>
	<table class="flexCategory"></table>
	<div class="clear"><br />&nbsp;</div>
    <a href="#modal-create-brands" role="button" class="btn btn-success" data-toggle="modal">Create New Category</a>
</div>

<div class="modal hide fade" id="modal-create-brands">
	<form action="./category" method="post" enctype="multipart/form-data">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Category</h3>
		</div>
		  <div class="modal-body">
		  	<div class="row-fluid">
		  		<div class="span6">
				  	<div><small>Name (short) *</small></div>
					<input type="text" class="" name="d[name_short]" required placeholder="" id="name_short">
					
					<div><small>Name (long) *</small></div>
					<input type="text" name="d[name_long]" placeholder="" id="name_long" required>
										
					<div><small>Description (short) *</small></div>
					<input type="text" class="" name="d[description_short]" required placeholder="" id="description_short">
					
					<div><small>Description (long) *</small></div>
					<textarea cols="" rows="5" id="description_long" name="d[description_long]" required></textarea>
					
				  	<div><small>Parent ID</small></div>
				  	<?php $categories = category::getAllCategory(); ?>
				  	<select name="d[parent_id]" id="parent_id">
					 	<option value="">None</option>
					  	<?php foreach($categories as $cat): ?>
						 <option value="<?php echo $cat['id']?>"><?php echo $cat['name_short']?></option>
					  	<?php endforeach; ?>
				  	</select>
															
		  		</div>
		  		<div class="span6">
					<div><small>URL *</small></div>
					<input type="text" class="" name="d[url]" required placeholder="" id="url">
					
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
		    <input type="hidden" name="d[category_id]" value="" id="category-id"/>
		    <input type="hidden" name="d[axn]" value="create" id="action"/>
			<input type="submit" class="btn btn-success" value="Add" id="submitter" name="button"/>
			<input type="submit" class="btn btn-danger" value="Delete" id="delete" name="delete" style="display: none"/>
		  </div>
	</form>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$(".flexCategory").flexigrid({
		url : 'core/view/grid/category.php',
		dataType : 'json',
		colModel : [ 
					{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
					{ display : 'Short Name', name : 'name_short', width : 120, sortable : true, align : 'left'}, 
					{ display : 'Parent ID', name : 'parent_id', width : 60, sortable : true, align : 'left'}, 
					{ display : 'Long Name', name : 'name_long', width : 180, sortable : true, align : 'left'}, 
					{ display : 'Description Short', name : 'description_short', width : 150, sortable : true, align : 'left'},
					{ display : 'Description Long', name : 'description_long', width : 220, sortable : true, align : 'left'},
					{ display : 'URL', name : 'url', width : 200, sortable : true, align : 'left'}
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
	
	$('.flexCategory').click(function(event){
	    $('.trSelected', this).each( function(){
			$.ajax({
				type:'POST',
				url:"core/view/grid/category.php",
				data:"id="+$(this).attr('id').substr(3),
				success:function(data) {
					$.each(data.rows, function (index, value) {	
						//$("#role").val(value.cell.permission);   
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
        				
        				$('#parent_id').val(value.cell.parent_id);
	        			$('#url').attr('value', value.cell.url);
					});
				},
				dataType:'json'
			});
			
	        $('#category-id').attr('value', $(this).attr('id').substr(3));
	    	$('#delete').show();
	        
	        $('#submitter').attr('value', 'Update');
	    	$('#action').attr('value', 'update');
	        $('#modal-create-brands').modal('show');
	    });
	});
	
	$('#modal-create-brands').on('hidden', function () {
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
        				
        $('#url').attr('value', '');
        $('#zip').attr('value', '');
        $('#country').attr('value',  '');
        
        $('#parent_id').val('');
	})
});

</script>