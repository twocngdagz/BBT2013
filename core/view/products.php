<div class="">
	<legend>Manage Products</legend>
	<table class="flexProducts"></table>
	<div class="clear"><br /></div>
	<a href="#modal-create-products" role="button" class="btn btn-success" data-toggle="modal" style="float: left; padding-right: 5px">Create New Product</a>
	<form action="core/view/grid/export_product.php" method="post" style="float: left;padding-left:10px;padding-right:10px">
		<button type="submit" class="btn btn-success" id="btnCSV">Download CSV</button>
	</form>
</div>

<?php include('product_editor.php'); ?>

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
			buttons	: [
			{name: 'Filter Remove', onpress: filternone},
			{name: 'Filter No Image', onpress: filter}
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
			title : 'Product List',
			useRp : true,
			resize: false,
			rp : 10,
			showTableToggleBtn: true,
			width : 700,
			singleSelect: true,
			height : 270,
		});

		function filter() {
			jQuery('.flexProducts').flexOptions({newp:1, params:[{name:'qtype', value:'`products_items`.`image_thumbnail`'},
				{name: 'query', value: '%noimage%'}]});
			$('.flexProducts').flexReload();
		}

		function filternone() {
			jQuery('.flexProducts').flexOptions({newp:1, params:[{name:'qtype', value:''},{name: 'query', value: ''}]});
			$('.flexProducts').flexReload();
		}

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
							$('#product_order').val(value.cell.product_order);
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
			//window.location.reload();
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