<?php include('mchn.config.php'); ?>
<?php ob_start();?>
<?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
<?php
$buffer = ob_get_contents();
ob_end_clean();
if(!empty($gp['id']))
{
	$url_name = $gp['id'];
	$category = category::getCategory($gp['id']);
	$gp['id'] = $category[0]['id'];
	$buffer =str_replace("%BBT2013%", $category[0]['name_short'] . " by BabyBeddingTown.com", $buffer);
}
echo $buffer;

?>
<?php setlocale(LC_MONETARY, 'en_US'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTab a').click(function (e) {
			e.preventDefault();
			console.log('click');
			$(this).tab('show');
		});
		var carousel = $("#carousel").featureCarousel({
			largeFeatureWidth: 0.90,
			largeFeatureHeight: 0.60,
			smallFeatureHeight: 0.20,
			smallFeatureWidth: 0.50,
			sidePadding:40,
			smallFeatureOffset: 100
		});
		// $(".flexProductOptions").flexigrid({
		// 	url : 'core/view/grid/productOptions.php',
		// 	dataType : 'json',
		// 	colModel : [ 
		// 	{ display : 'Id', name : 'id', width : 15, sortable : true, align : 'right'}, 
		// 	{ display : 'Name', name : 'option_name', width : 180, sortable : true, align : 'left'}, 
		// 	{ display : 'Description', name : 'option_description', width : 280, sortable : true, align : 'left'},
		// 	{ display : 'Price', name : 'price', width : 60, sortable : true, align : 'left'},
		// 	{ display : 'Weight', name : 'weight', width : 60, sortable : true, align : 'left'}
		// 	],
		// 	searchitems : [ {
		// 		display : 'Id',
		// 		name : 'id'
		// 	}, {
		// 		display : 'Option Name',
		// 		name : 'option_name',
		// 		isdefault : false
		// 	}, {
		// 		display : 'Option Description',
		// 		name : 'option_description',
		// 		isdefault : false
		// 	}, {
		// 		display : 'Price',
		// 		name : 'price',
		// 		isdefault : false
		// 	}],
		// 	onDoubleClick: false,
		// 	multiSel: false,
		// 	sortname : "id",
		// 	sortorder : "desc",
		// 	usepager : true,
		// 	title : '',
		// 	useRp : true,
		// 	resize: false,
		// 	rp : 10,
		// 	query: value.cell.id,
		// 	qtype :'`products_item_options`.`product_id`',
		// 	showTableToggleBtn : true,
		// 	width : 700,
		// 	onSuccess: function(data) {
		// 	},
		// 	singleSelect: true,
		// 	height : 270
		// });

		$('.productedit').on('click',function (e) {
			e.preventDefault();
			var id = $(this).attr('id');
			$.ajax({
				type:'POST',
				url:"core/view/grid/products.php",
				data:"id=" + id,
				success:function(data) {
					$.each(data.rows, function (index, value) {
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

						$('#products-id').attr('value', value.cell.id);
						$('#delete').show();
						$('#submitter').attr('value', 'Update');
						$('#action').attr('value', 'update');
						$('#modal-create-products').modal('show');
					});
				},
				dataType:'json'
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
		});
	});
</script>
<div class="row-fluid">
	<div class="span3">
		<?php include('sidebar.php'); ?>
	</div>
	<?php
	// PRODUCTS SELECT FROM DATABASE
	if(!empty($gp['id']))
	{
		$page = !empty($gp['p']) ? (int)$gp['p'] : 1;
		$per_page = 9;
		$total_count = products::getProductTotalCategory($gp['id']);
		$total_count = $total_count[0]['COUNT(*)'];
		$pagination = new Pagination($page, $per_page, $total_count);
		$sql = "SELECT * FROM `products_items`
		WHERE (`category_id` = '{$gp['id']}')
		AND `status` = 1
		ORDER BY product_order
		LIMIT {$per_page}
		OFFSET {$pagination->offset()}";
		$products = products::getSQL($sql);
		$category = category::getCategoryURL($gp['id']);
		$topproducts = products::getTopProductByCategoryID($gp['id']);

		?>
		<div class="span9">
			<div class="row-fluid span12">
				<div class="row-fluid">
					<div class="page-title">
						<h1><?php echo $category[0]['name_short']; ?></h1>
					</div>
				</div>
				<div class="carousel-container">
					<?php if ($total_count >= 3) { ?>
					<div id="carousel">
						<?php foreach( $topproducts as $toprow):?>
							<div class="carousel-feature" style="width: 450px; height: 230px">
								<a href="./products.php?id=<?php html::p($toprow["id"]) ?>"><img
									class="carousel-image" alt="Image Caption"
									src="<?php html::p($toprow['image_large']); ?>"> </a>
								<div class="carousel-caption">
									<p>
										<?php echo $toprow['name_short']; ?>
									</p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<?php if(!empty($topproducts)) { ?>
					<div id="carousel-left">
						<img src="<?php echo MCHN_ROOT ?>/images/arrow-left.png" />
					</div>
					<div id="carousel-right">
						<img src="<?php echo MCHN_ROOT ?>/images/arrow-right.png" />
					</div>
						<?php } ?>
						<?php } else {?>
						<?php if ($total_count>0){ ?>
						<center>
							<img width="180"
							src="<?php 
							if(empty($topproducts[0]['image_small']))
							{
								html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
							}
							else
							{
								echo $topproducts[0]['image_small']; 
							}?>" />
						</center>
						<?php } ?>
						<?php }?>
					</div>
				</div>
				<div class="row-fluid">

					<?php 
					ob_start();
					echo $category[0]['description_long']; 
					$descrip_accord = ob_get_contents();
					$descrip_accord = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $descrip_accord);
					ob_end_clean();

					?>
					<div class="descript_div">
						<?php echo strip_tags($descrip_accord, '<h3></h3><div></div><p></p>'); ?>
					</div>
					<script >
						$(function() {
							if($( "h3:contains('Click to read more about')" ).val() != null){
								$(".descript_div h3").first().appendTo( "#catname" );
								$( "h3:contains('Click to read more about')" ).appendTo( ".accord" );
								$(".descript_div p").appendTo( ".d_content" );
								$(".descript_div").appendTo( ".no_accord" );
							}else{
								$(".descript_div p").first().appendTo( ".no_accord" );
							}

							$( "#accordion" ).accordion({
								heightStyle: "content", autoHeight: false, clearStyle: true, icons: null, collapsible: true, active: false
							});

						});
					</script>
					<!-- description div -->
					<h3 id="catname"></h3>
					<div class="no_accord"></div>
					<div id="accordion">
						<h3 class="accord" style="color:#ea1c66; font-weight:bold; font-size:23px; border:0px; background: url('')"></h3>
						<div  class="d_content" style="background: url(''); border: 0px;">

						</div>
					</div>
					<!-- description div -->
					<br />
					<?php foreach( $products as $row):?>
						<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="<?php echo MCHN_ROOT;?>products.php?id=<?php html::p($row["id"]) ?>"><img
										style="width: 400px; height: 300px;"
										src="<?php 
										if(empty($row['image_small']))
										{
											html::p(MCHN_DIR_ASSETS."img/noimage.jpg"); 
										}
										else
										{
											echo $row['image_small']; 
										}?>" /> </a> <br> <br>
										<div style="height: 40px;">
											<a href="<?php echo MCHN_ROOT;?>products.php?id=<?php html::p($row["id"]) ?>"><b><?php html::p($row["name_short"]) ?>
											</b> </a>
										</div>
										<div>
											Price: <b>$<?php html::p(number_format($row["price"],2,".",",")); ?>
										</b>
									</div>
									<br>
									<form action="<?php echo MCHN_ROOT;?>cart.php" method="post">
										<input type="hidden" name="item"
										value="<?php html::p($row["id"]) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
										<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
									<?php 
										$id = $row["id"];
										if($_SESSION['user_id'])
										{
									?>
											<a href="#" class="productedit" id="<?php html::p($id) ?>">Edit</a>
									<?php
											include('core/view/product_editor.php');
										}
									?>
								</center>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<?php
				if($pagination->total_pages() > 1) {
					if($pagination->has_previous_page()) {
						echo "<a href=\"{$url_name}?p=";
						echo $pagination->previous_page();
						echo "\">&laquo; Previous</a> ";
					}

					for($i=1; $i <= $pagination->total_pages(); $i++) {
						if($i == $page) {
							echo " <span class=\"selected\">{$i}</span> ";
						} else {
							echo " <a href=\"{$url_name}?p={$i}\">{$i}</a> ";
						}
					}

					if($pagination->has_next_page()) {
						echo " <a href=\"{$url_name}?p=";
						echo $pagination->next_page();
						echo "\">Next &raquo;</a> ";
					}
				}
				?>
			</div>
			<?php } else { ?>
			<h3>Sorry, we could not find the page you are looking for.</h3>
			<h5>Please feel free to browse our product categories on the left, 
			or you can use the search form at the top of the page.</h5>
			<?php } ?>

		</div>
		<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>