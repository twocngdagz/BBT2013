
<?php
//CATEGORY comment
//Lambs and Ivy = 11, Glenna Jean = 22, Kidsline = 10, Sumersault = 24, Sweet JoJo Designs= 537, Sweet Kyla = 219
$Lambs_and_Ivy = category::getCategoryURL(11);
$KidsLine = category::getCategoryURL(10);
$Glenn_Jean = category::getCategoryURL(22);
$Sumersault = category::getCategoryURL(24);
$Sweet_JoJo_Designs = category::getCategoryURL(537);
$Sweet_Kyla = category::getCategoryURL(219);
$Trend_Lab = category::getCategoryURL(299);
$Young_America = category::getCategoryURL(126);
$Corsican_Design_Metal_Cribs = category::getCategoryURL(132);
$Nursery_Smart_Baby_Furniture = category::getCategoryURL(226);
$Bassinets = category::getCategoryURL(657);
$Baby_Doll = category::getCategoryURL(294);
$Strollers = category::getCategoryURL(57);
$Carseats = category::getCategoryURL(51);
$High_Chairs_Feeding = category::getCategoryURL(61);


//
//Kung wala jud ang product bay pag query lang sa database og bisan unsa, iparehas lang sa pag buhat nko sa category
//gamita ni na function product:getProducts(id);
//PRODUCT
//lambs and Ivy
$Hello_Kitty_Garden = products::getProducts(43440);//notfound
$Little_Traveler = products::getProducts(17170);
$Peek_A_Boo_Jungle = products::getProducts(43021);
//kidsline
$Carters_Safari = products::getProducts(38382);//notfound
$Fleur_Crib_Bedding = products::getProducts(38378);//not found
$Carter_Pink_Elephant = products::getProducts(38369);

//'Glenn Jean'
$McKenzie_Baby = products::getProducts(38920);
$Isabella_Baby_5_Pc_Set = products::getProducts(31933);
$Anastasia = products::getProducts(47640);

//'Glenn Jean'
$Charlotte = products::getProducts(47440);

//'Sweet_JoJo_Designs
$Dot_Baby_Bedding= products::getProducts(35348);
$Princess_Pink = products::getProducts(40141);
$Jungle_Time = products::getProducts(52763);

//Sweet Kyla
$Ebony_Rose = products::getProducts(49958);//notfound
$Rockin_Robin = products::getProducts(17164);
$Zoo_Teeny_Mocha = products::getProducts(43021);

//'Trend Lab
$Rock_Angel= products::getProducts(38382);
$Rockstar = products::getProducts(38378);

//Young America
$Heavy_Antique_Rustic_Built_To_Grow_Crib = products::getProducts(17083);//notfound
$Natural_Sleigh_Built_To_Grow_Crib = products::getProducts(17164);
$Striping_Florentine_Crib = products::getProducts(43021);

//Cosican
$Pumpkin_Carriage_Crib = products::getProducts(17226);//notfound

//Nursery
$Davenport_Convertible_Crib = products::getProducts(17207);//notfound

//Bassinets

//Baby Doll'
$Five_Tier_Lace_Bassinet_Liner = products::getProducts(34390);
$Sherbert_Bassinet_Liner_Hood = products::getProducts(34391);

//Strollers'
$Phil_Ted = products::getProducts(17164);
$Peg_Perego = products::getProducts(17164);
$Combi = products::getProducts(17164);
$Bugaboo = products::getProducts(17164); 
$Britax = products::getProducts(17027);

//'Carseats'
$Britax = products::getProducts(17164);


//High Chairs Feeding'


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
					<a href="./<?php html::p($Lambs_and_Ivy[0]["url"]) ?>">
					<h3><?php html::p($Lambs_and_Ivy[0]['name_short']);?></h3>
					</a>
					<p><?php echo $Lambs_and_Ivy[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Lambs_and_Ivy[0]["url"]) ?>">
						<img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Lambs_and_Ivy[0]['image_large']); ?>" alt="">
						</a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Hello_Kitty_Garden[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Hello_Kitty_Garden[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Hello_Kitty_Garden[0]['id']) ?>"><b><?php html::p($Hello_Kitty_Garden[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Hello_Kitty_Garden[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Hello_Kitty_Garden[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Little_Traveler[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Little_Traveler[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Little_Traveler[0]['id']) ?>"><b><?php html::p($Little_Traveler[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Little_Traveler[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Little_Traveler[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Peek_A_Boo_Jungle[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Peek_A_Boo_Jungle[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Peek_A_Boo_Jungle[0]['id']) ?>"><b><?php html::p($Peek_A_Boo_Jungle[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Peek_A_Boo_Jungle[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Peek_A_Boo_Jungle[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>

				<!-- END CATEGORY -->


				<!-- CatEGORY  KidsLine-->
				<div class="featured">
					<a href="./<?php html::p($KidsLine[0]["url"]) ?>">
					<h3><?php html::p($KidsLine[0]['name_short']);?></h3>
					</a>
					<p><?php echo $KidsLine[0]['description_short']; ?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($KidsLine[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($KidsLine[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Carters_Safari[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Carters_Safari[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Carters_Safari[0]['id']) ?>"><b><?php html::p($Carters_Safari[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Carters_Safari[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Carters_Safari[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Fleur_Crib_Bedding[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Fleur_Crib_Bedding[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Fleur_Crib_Bedding[0]['id']) ?>"><b><?php html::p($Fleur_Crib_Bedding[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Fleur_Crib_Bedding[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Fleur_Crib_Bedding[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Carter_Pink_Elephant[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Carter_Pink_Elephant[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Carter_Pink_Elephant[0]['id']) ?>"><b><?php html::p($Carter_Pink_Elephant[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Carter_Pink_Elephant[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Carter_Pink_Elephant[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>

				<!-- END CATEGORY -->

				<!-- CatEGORY  Glenn jean-->
				<div class="featured">
					<a href="./<?php html::p($Glenn_Jean[0]["url"]) ?>">
					<h3><?php html::p($Glenn_Jean[0]['name_short']); ?></h3></a>
					<p><?php echo $Glenn_Jean[0]['description_short']; ?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Glenn_Jean[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Glenn_Jean[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($McKenzie_Baby[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $McKenzie_Baby[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($McKenzie_Baby[0]['id']) ?>"><b><?php html::p($McKenzie_Baby[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($McKenzie_Baby[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($McKenzie_Baby[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Isabella_Baby_5_Pc_Set[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Isabella_Baby_5_Pc_Set[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Isabella_Baby_5_Pc_Set[0]['id']) ?>"><b><?php html::p($Isabella_Baby_5_Pc_Set[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Isabella_Baby_5_Pc_Set[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Isabella_Baby_5_Pc_Set[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Anastasia[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Anastasia[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Anastasia[0]['id']) ?>"><b><?php html::p($Anastasia[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Anastasia[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Anastasia[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->

				<!-- CatEGORY  Summer-->
				<div class="featured">
					<a href="./<?php html::p($Sumersault[0]["url"]) ?>">
						<h3><?php html::p($Sumersault[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Sumersault[0]['description_short']; ?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Sumersault[0]["url"]) ?>" ><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Sumersault[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Charlotte[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Charlotte[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Charlotte[0]['id']) ?>"><b><?php html::p($Charlotte[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Charlotte[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Charlotte[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->

				<!-- CatEGORY  Sweet jojo-->
				<div class="featured">

					<a href="./<?php html::p($Sweet_JoJo_Designs[0]["url"]) ?>">
						<h3><?php html::p($Sweet_JoJo_Designs[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Sweet_JoJo_Designs[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Sweet_JoJo_Designs[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Sweet_JoJo_Designs[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Dot_Baby_Bedding[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Dot_Baby_Bedding[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Dot_Baby_Bedding[0]['id']) ?>"><b><?php html::p($Dot_Baby_Bedding[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Dot_Baby_Bedding[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Dot_Baby_Bedding[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Princess_Pink[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Princess_Pink[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Princess_Pink[0]['id']) ?>"><b><?php html::p($Princess_Pink[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Princess_Pink[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Princess_Pink[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Jungle_Time[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Jungle_Time[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Jungle_Time[0]['id']) ?>"><b><?php html::p($Jungle_Time[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Jungle_Time[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Jungle_Time[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->

				<!-- CatEGORY  Sweet Kyla-->
				<div class="featured">
					<a href="./<?php html::p($Sweet_Kyla[0]["url"]) ?>">
						<h3><?php html::p($Sweet_Kyla[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Sweet_Kyla[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Sweet_Kyla[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Sweet_Kyla[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Ebony_Rose[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Ebony_Rose[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Ebony_Rose[0]['id']) ?>"><b><?php html::p($Ebony_Rose[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Ebony_Rose[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Ebony_Rose[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Rockin_Robin[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Rockin_Robin[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Rockin_Robin[0]['id']) ?>"><b><?php html::p($Rockin_Robin[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Rockin_Robin[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Rockin_Robin[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Zoo_Teeny_Mocha[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Zoo_Teeny_Mocha[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Zoo_Teeny_Mocha[0]['id']) ?>"><b><?php html::p($Zoo_Teeny_Mocha[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Zoo_Teeny_Mocha[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Zoo_Teeny_Mocha[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->

				<!-- CatEGORY Trend lab-->
				<div class="featured">

					<a href="./<?php html::p($Trend_Lab[0]["url"]) ?>">
						<h3><?php html::p($Trend_Lab[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Trend_Lab[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Trend_Lab[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Trend_Lab[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Rock_Angel[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Rock_Angel[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Rock_Angel[0]['id']) ?>"><b><?php html::p($Rock_Angel[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Rock_Angel[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Rock_Angel[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Rockstar[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Rockstar[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Rockstar[0]['id']) ?>"><b><?php html::p($Rockstar[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Rockstar[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Rockstar[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->	

				<!-- CatEGORY  Young America-->
				<div class="featured">

					<a href="./<?php html::p($Young_America[0]["url"]) ?>">
						<h3><?php html::p($Young_America[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Young_America[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Young_America[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Young_America[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Heavy_Antique_Rustic_Built_To_Grow_Crib[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Heavy_Antique_Rustic_Built_To_Grow_Crib[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Heavy_Antique_Rustic_Built_To_Grow_Crib[0]['id']) ?>"><b><?php html::p($Heavy_Antique_Rustic_Built_To_Grow_Crib[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Heavy_Antique_Rustic_Built_To_Grow_Crib[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Heavy_Antique_Rustic_Built_To_Grow_Crib[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Natural_Sleigh_Built_To_Grow_Crib[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Natural_Sleigh_Built_To_Grow_Crib[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Natural_Sleigh_Built_To_Grow_Crib[0]['id']) ?>"><b><?php html::p($Natural_Sleigh_Built_To_Grow_Crib[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Natural_Sleigh_Built_To_Grow_Crib[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Natural_Sleigh_Built_To_Grow_Crib[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Striping_Florentine_Crib[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Striping_Florentine_Crib[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Striping_Florentine_Crib[0]['id']) ?>"><b><?php html::p($Striping_Florentine_Crib[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Striping_Florentine_Crib[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Striping_Florentine_Crib[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->			

				<!-- CatEGORY  Corsican-->
				<div class="featured">

					<a href="./<?php html::p($Corsican_Design_Metal_Cribs[0]["url"]) ?>">
						<h3><?php html::p($Corsican_Design_Metal_Cribs[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Corsican_Design_Metal_Cribs[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Corsican_Design_Metal_Cribs[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Corsican_Design_Metal_Cribs[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Pumpkin_Carriage_Crib[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Pumpkin_Carriage_Crib[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Pumpkin_Carriage_Crib[0]['id']) ?>"><b><?php html::p($Pumpkin_Carriage_Crib[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Pumpkin_Carriage_Crib[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Pumpkin_Carriage_Crib[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->


				<!-- CatEGORY  Nursery-->
				<div class="featured">

					<a href="./<?php html::p($Nursery_Smart_Baby_Furniture[0]["url"]) ?>">
						<h3><?php html::p($Nursery_Smart_Baby_Furniture[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Nursery_Smart_Baby_Furniture[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Nursery_Smart_Baby_Furniture[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Nursery_Smart_Baby_Furniture[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Davenport_Convertible_Crib[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Davenport_Convertible_Crib[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Davenport_Convertible_Crib[0]['id']) ?>"><b><?php html::p($Davenport_Convertible_Crib[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Davenport_Convertible_Crib[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Davenport_Convertible_Crib[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->

				<!-- CatEGORY  Bassinets-->
				<div class="featured">

					<a href="./<?php html::p($Bassinets[0]["url"]) ?>">
						<h3><?php html::p($Bassinets[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Bassinets[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Bassinets[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Bassinets[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					

					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->


				<!-- CatEGORY  baby Doll-->
				<div class="featured">

					<a href="./<?php html::p($Baby_Doll[0]["url"]) ?>">
						<h3><?php html::p($Baby_Doll[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Baby_Doll[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Baby_Doll[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Baby_Doll[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Five_Tier_Lace_Bassinet_Liner[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Five_Tier_Lace_Bassinet_Liner[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Five_Tier_Lace_Bassinet_Liner[0]['id']) ?>"><b><?php html::p($Five_Tier_Lace_Bassinet_Liner[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Five_Tier_Lace_Bassinet_Liner[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Five_Tier_Lace_Bassinet_Liner[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Sherbert_Bassinet_Liner_Hood[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Sherbert_Bassinet_Liner_Hood[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Sherbert_Bassinet_Liner_Hood[0]['id']) ?>"><b><?php html::p($Sherbert_Bassinet_Liner_Hood[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Sherbert_Bassinet_Liner_Hood[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Sherbert_Bassinet_Liner_Hood[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->


				<!-- CatEGORY  Strollers-->
				<div class="featured">

					<a href="./<?php html::p($Strollers[0]["url"]) ?>">
						<h3><?php html::p($Strollers[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Strollers[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Strollers[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Strollers[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Phil_Ted[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Phil_Ted[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Phil_Ted[0]['id']) ?>"><b><?php html::p($Phil_Ted[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Phil_Ted[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Phil_Ted[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Peg_Perego[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Peg_Perego[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Peg_Perego[0]['id']) ?>"><b><?php html::p($Peg_Perego[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Peg_Perego[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Peg_Perego[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>


					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Combi[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Combi[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Combi[0]['id']) ?>"><b><?php html::p($Combi[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Combi[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Combi[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>


					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Bugaboo[0]["id"]) ?>">
										<img style="width: 400px; height: 300px;" src="<?php echo $Bugaboo[0]['image_small']; ?>" />
									</a>
									<br> <br>
									
									<div style="height: 40px;">
										<a href="./products.php?id=<?php html::p($Bugaboo[0]['id']) ?>"><b><?php html::p($Bugaboo[0]['name_short']) ?> </b> </a>
									</div>
									
									<div>Price: <b> $<?php html::p(number_format($Bugaboo[0]['price'],2,".",",")); ?> </b> </div>
									<br>
												
									<form action="./cart.php" method="post">
										<input type="hidden" name="item" value="<?php html::p($Bugaboo[0]['id']) ?>" />
											<div>
												<input type="hidden" name="quantity" value="1" />
											</div>
										<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
									</form>
								</center>
							</div>
					</div>


					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Britax[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Britax[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Britax[0]['id']) ?>"><b><?php html::p($Britax[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Britax[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Britax[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->


				<!-- CatEGORY  caCarseats-->
				<div class="featured">

					<a href="./<?php html::p($Carseats[0]["url"]) ?>">
						<h3><?php html::p($Carseats[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $Carseats[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($Carseats[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($Carseats[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Britax[0]["id"]) ?>">
									<img style="width: 400px; height: 300px;" src="<?php echo $Britax[0]['image_small']; ?>" />
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Britax[0]['id']) ?>"><b><?php html::p($Britax[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Britax[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Britax[0]['id']) ?>" />
										<div>
											<input type="hidden" name="quantity" value="1" />
										</div>
									<input type="hidden" name="direction" value="fromCart" /> <input type="submit" class="btn btn-info btn-mini" value="ADD TO CART" />
								</form>
							</center>
						</div>
					</div>
					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->

				<!-- CatEGORY  High Chairs-->
				<div class="featured">

					<a href="./<?php html::p($High_Chairs_Feeding[0]["url"]) ?>">
						<h3><?php html::p($High_Chairs_Feeding[0]['name_short']) ;?></h3>
					</a>
					<p><?php echo $High_Chairs_Feeding[0]['description_short'];?></p>

					<div class="pull-left" style="padding: 10px;">
						<a href="./<?php html::p($High_Chairs_Feeding[0]["url"]) ?>"><img width="620px" style="height: 290px" class="img-polaroid"
							src="<?php html::p($High_Chairs_Feeding[0]['image_large']); ?>" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>
	

					<br /> <br />
				<div style="clear: both"></div>
				<!-- END CATEGORY -->



			</div>
		</div>
	</div>
</div>