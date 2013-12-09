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
							<div><small>Product Order</small></div>
							<input type="text" class="" name="d[product_order]" required placeholder="" id="product_order">
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