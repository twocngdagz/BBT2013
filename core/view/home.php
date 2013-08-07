
<?php
//CATEGORY
//Lambs and Ivy = 11, Glenna Jean = 22, Kidsline = 10, Sumersault = 24, Sweet JoJo Designs= 537, Sweet Kyla = 219
$Lambs_and_Ivy = category::getCategoryURL(11);

//Kung wala jud ang product bay pag query lang sa database og bisan unsa, iparehas lang sa pag buhat nko sa category
//gamita ni na function product:getProducts(id);

$sqlc="SELECT * FROM category WHERE id IN(92)";
$category=category::getCategory($sqlc);

$sqlp="SELECT * FROM products_items WHERE id IN(35037)";
$products = products::getSQL($sqlp);

?>

<div class="row-fluid">
	<div class="span3">
	<?php include('sidebar.php'); ?>
	</div>
	<div class="span9">
		<div class="row-fluid">
			<div class="span12">
				<!-- CatEGORY -->

				<div class="featured">

					<h3><?php html::p($Lambs_and_Ivy[0]['name_short']);?></h3>
					<p><?php html::p($Lambs_and_Ivy[0]['description_short']);?></p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Lambs_and_Ivy[0]['image_large']); ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />


				<div class="featured">

					<h3>KidsLine</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Glenn Jean</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Sumersault</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Sweet JoJo Designs</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Sweet Kyla</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Trend Lab</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Young America</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Corsican Design Metal Cribs</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Nursery Smart Baby Furniture</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Bassinets</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Baby Doll</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Strollers</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a> <a class="product-container-link"
						href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />

				<div class="featured">

					<h3>Carseats</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>
					<a class="product-container-link" href="./products.php?id=15095">
						<div class="pull-left well product-container">
							<center>
								<img width="180" style="height: 180px"
									src="<?php echo $products[0]['image_small']; ?>" /> <br> <br> <b></b>
								<div>
									<b><?php echo $products[0]['name_short']; ?> </b>
								</div>
								<div>
									Price: <b><?php echo $products[0]['price']; ?> </b>
								</div>
								<br>
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="15095" />
									<div>
										<input type="hidden" name="quantity" value="1" />
									</div>
									<input type="hidden" name="direction" value="fromCart" /> <input
										type="submit" class="btn btn-info btn-mini"
										value="ADD TO CART" />
								</form>
							</center>
						</div> </a>
					<div style="clear: both"></div>
				</div>
				<br /> <br />
				<div class="featured">

					<h3>High Chairs Feeding</h3>
					<!--<h3><?php //echo $category[0]['name_short']; ?></h3>-->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
						diam nonummy nibh euismod tincidunt ut laoreet dolore magna
						aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
						exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
						commodo consequat. Duis autem vel eum iriure dolor in hendrerit in
						vulputate velit esse molestie consequat.</p>

					<div class="pull-left" style="padding: 10px;">
						<a><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php echo $category[0]['image_small']; ?>" alt=""> </a> <br>
						<br>
					</div>

					<div style="clear: both"></div>

					<div style="clear: both"></div>
				</div>
				<br /> <br />

			</div>
		</div>
	</div>
</div>