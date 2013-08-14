
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
$Hello_Kitty_Garden = products::getProducts(43628);
$Little_Traveler = products::getProducts(43636);
$Peek_A_Boo_Jungle = products::getProducts(42542);
//kidsline
$Carters_Safari = products::getProducts(35620);
$Fleur_Crib_Bedding = products::getProducts(40552);
$Carter_Pink_Elephant = products::getProducts(46743);

//'Glenn Jean'
$McKenzie_Baby = products::getProducts(14061);
$Isabella_Baby_5_Pc_Set = products::getProducts(35346);
$Anastasia = products::getProducts(43499);

//'Summersault'
$Charlotte = products::getProducts(47472);

//'Sweet_JoJo_Designs
$Dot_Baby_Bedding= products::getProducts(44812);//not under this category
$Princess_Pink = products::getProducts(45094);//not undder this categry
$Jungle_Time = products::getProducts(44819);//not under this category

//Sweet Kyla
$Ebony_Rose = products::getProducts(52140);
$Rockin_Robin = products::getProducts(40387);
$Zoo_Teeny_Mocha = products::getProducts(50645);

//'Trend Lab
$Rock_Angel= products::getProducts(40585);//not under this category
$Rockstar = products::getProducts(40587);//not under this category

//Young America
$Heavy_Antique_Rustic_Built_To_Grow_Crib = products::getProducts(34424);//not under this category
$Natural_Sleigh_Built_To_Grow_Crib = products::getProducts(34432);//not under this category
$Striping_Florentine_Crib = products::getProducts(34709);//not under this category

//Cosican
$Pumpkin_Carriage_Crib = products::getProducts(14734);//not under this category

//Nursery
$Davenport_Convertible_Crib = products::getProducts(38342);

//Bassinets

//Baby Doll'
$Five_Tier_Lace_Bassinet_Liner = products::getProducts(41497);
$Sherbert_Bassinet_Liner_Hood = products::getProducts(41495);

//Strollers'
$Phil_Ted = products::getProducts(24201);
$Peg_Perego = products::getProducts(29821);
$Combi = products::getProducts(35009);
$Bugaboo = products::getProducts(34477); 
$Britax_Strollers = products::getProducts(35010);

//'Carseats'
$Britax = products::getProducts(26496);


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
							src="images/categories/large/home/LambsandivyMain.jpg" alt="">
						</a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>

									<a href="./products.php?id=<?php html::p($Hello_Kitty_Garden[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/11/bandstandbearsroom-lg.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/11/wigglewagonroom-lg.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/11/secretgardenroom-lg.gif" /></div>
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
							src="images/categories/large/home/KidslineMain.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Carters_Safari[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/10/forever-friends-pooh-lg.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/10/mariposacrib-lg.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/10/rapunzel-lg.jpg" /></div>
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
							src="images/categories/large/home/GlennajeanMain.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($McKenzie_Baby[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/22/serengetti-lg_2.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/22/M_Set-BG.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/22/miloroom-lg.jpg" /></div>
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
							src="images/categories/large/home/Sumersault.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Charlotte[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/24/onthemove-lg.jpg" /></div>
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
							src="images/categories/large/home/" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Dot_Baby_Bedding[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/537/hotel-pk-ch-9.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/537/buttonsroom-lg.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/537/leapfrog-9.jpg" /></div>
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
							src="images/categories/large/home/Sweetkyla.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Ebony_Rose[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/219/file_28_18.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/219/fiestaroom-lg.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/219/moonbeamroom-lg_3.jpg" /></div>
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
							src="images/categories/large/home/" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Rock_Angel[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/299/aquariumroom-lg.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/299/caterpillarroom-lg.jpg" /></div>
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
							src="images/categories/large/home/Stanleyyoungamerica.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Heavy_Antique_Rustic_Built_To_Grow_Crib[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/126/923_94_462.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/126/483_94_220.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/126/472_14_762.jpg" /></div>
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
							src="images/categories/large/home/" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Pumpkin_Carriage_Crib[0]["id"]) ?>">
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/132/star-light2.jpg" /></div>
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
							src="images/categories/large/home/Nurserysmart.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Davenport_Convertible_Crib[0]["id"]) ?>">
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/226/nurserysmarthaley-lg.jpg" /></div>
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
							src="images/categories/large/home/" alt=""> </a> <br>
						
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
							src="images/categories/large/home/BabydollMain.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Five_Tier_Lace_Bassinet_Liner[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/294/2050bass-lg.jpg" /></div>
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
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/294/860-lg.jpg" /></div>
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
							src="images/categories/large/home/StrollerbrandsMain.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
							<div class="pull-left well product-container">
								<center>
									<a href="./products.php?id=<?php html::p($Phil_Ted[0]["id"]) ?>">
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/57/hb0400.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/57/fk0500.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/57/2472-81-300.jpg" /></div>
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
										<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/57/centro-toffee.jpg" /></div>
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
								<a href="./products.php?id=<?php html::p($Britax_Strollers[0]["id"]) ?>">
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/57/cosmostaqua.jpg" /></div>
								</a>
								<br> <br>
								
								<div style="height: 40px;">
									<a href="./products.php?id=<?php html::p($Britax_Strollers[0]['id']) ?>"><b><?php html::p($Britax_Strollers[0]['name_short']) ?> </b> </a>
								</div>
								
								<div>Price: <b> $<?php html::p(number_format($Britax_Strollers[0]['price'],2,".",",")); ?> </b> </div>
								<br>
											
								<form action="./cart.php" method="post">
									<input type="hidden" name="item" value="<?php html::p($Britax_Strollers[0]['id']) ?>" />
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
							src="images/categories/large/home/CarseatsMain.jpg" alt=""> </a> <br>
						
					</div>

					<div style="clear: both"></div>
				</div>

					<div class="product-container-link">
						<div class="pull-left well product-container">
							<center>
								<a href="./products.php?id=<?php html::p($Britax[0]["id"]) ?>">
									<div style="width: 200px; height:300px; background-color:#fff; display:table-cell; vertical-align:middle;" ><img  style="width:200px;" src="images/products/small/51/e9l5769.jpg" /></div>
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
							src="images/categories/large/home/HighchairsMain.jpg" alt=""> </a> <br>
						
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