<?php include('mchn.config.php'); ?>
<?php 
  /**
   * 
   * February 14, 2013
   * @author abz dmachinist
   * 
   * Cart Module on BBT, Include CONFIG
   */
  if( !empty($gp["item"]) && !empty($gp["quantity"]) && !empty($gp["direction"]) && $gp["direction"] == "fromCart") 
  {
    cart::addToCart( $gp["item"],$gp["quantity"] );
    html::redirect("./cart.php?message=new");   
  } 

  if( !empty($gp["action"]) && $gp["action"] == "UPDATE"  && !empty($gp["item"]) && !empty($gp["quantity"]) ) 
  {
    cart::updateCart( $gp["item"],$gp["quantity"] );
    html::redirect("./cart.php?message=update");    
  } 
  
  if( !empty($gp["action"]) && $gp["action"] == "REMOVE"  && !empty($gp["item"]) && !empty($gp["quantity"]) ) 
  { 
    cart::deleteItem( $gp["item"],$gp["quantity"] );
    html::redirect("./cart.php?message=remove");
  } 
  ?>
  <?php ob_start();?>
  <?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
  <?php 
  $buffer = ob_get_contents();
  ob_end_clean();
  $buffer =str_replace("%BBT2013%", "Your Cart: BabyBeddingTown.com", $buffer);
  echo $buffer;

  $host = $_SERVER['HTTP_HOST'];

  ?>
  <?php
  if( !empty($gp['message']) ) 
  {
    if($gp['message']=='new')
      html::alert('success', 'You have successfully added new item.', 'Cart Add Item');
    if($gp['message']=='update')
      html::alert('success', 'You have successfully added updated item.', 'Cart Update Item');
    if($gp['message']=='remove')
      html::alert('success', 'You have successfully added removed item.', 'Cart Remove Item');
  }
  if(!empty($_COOKIE['cart'])) {
    $shippingPrice = shippingCost::getShippingCost($_COOKIE['cart'], 1);
    ?>

    <?php $subTotal = 0; ?>

    <h4>MY SHOPPING CART</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 5%">#</th>
          <th style="width: 20%">THE PRODUCT</th>
          <th style="width: 15%">QUANTITY</th>
          <th style="width: 15%">UNIT PRICE</th>
          <th style="width: 15%">LINE TOTAL</th>
          <th style="width: 15%">ACTIONS</th>
        </tr>
      </thead>
      <tbody>

        <?php if ( !empty($_COOKIE['cart']) ) { 
          arsort($_COOKIE['cart']); ?>
          <?php foreach ( $_COOKIE['cart'] as $item => $qty):?>
            <?php $products = products::getProducts($item);?>
            <tr>    
              <?php ?>  
              <form action="" method="post">
                <?php foreach( $products as $row):?>
                  <td>
                    <?php html::p($row["id"]) ?>
                  </td>
                  <td>
                    <?php html::p($row["name_short"]) ?>
                  </td>
                  <td>
                    <input type="text" style="text-align:center;" name="quantity" class="span5" value="<?php html::p($qty) ?>" />
                  </td>
                  <td>
                    <h4>
                      $<?php html::p(number_format($row["price"], 2)) ?>
                    </h4>
                  </td>
                  <td>
                    <h4>
                      <a>
                        $<?php 
                        $lineTotal = $row["price"] * $qty;
                        $subTotal = $subTotal + $lineTotal;
                        html::p(number_format($lineTotal, 2));
                        ?>
                      </a>
                    </h4>
                  </td>      
                  <td>    
                    <input type="hidden" name="item" value="<?php html::p($row["id"]) ?>" />
                    <input type="submit" class="btn btn-danger btn-mini" name="action" value="REMOVE" />
                    <input type="submit" class="btn btn-mini" name="action" value="UPDATE"/>
                  </td>
                <?php endforeach; ?>
              </form> 
            </tr> 
          <?php endforeach; ?>
          <?php }?>
        </tbody>
      </table>  


      <table class="table pull-right table-striped" style="width:400px;">
        <tr>
          <td style="text-align:right;">
            Sub Total
          </td>
          <td width="50%">
            <b class="">$<?php echo number_format($subTotal, 2); ?></b>
          </td>
        </tr>
        <tr>
          <td style="text-align:right;">
            Shipping and Handling
          </td>
          <td> 
            <b class="">$<?php echo $shippingPrice ?></b>
          </td>
        </tr>
        <tr>
          <td style="text-align:right;">
            <b>Total</b>
          </td>
          <td>
            <?php $cartTotal = $subTotal + $shippingPrice; ?>
            <b style="font-size:20px;">$<?php echo number_format($cartTotal, 2); ?></b>
          </td>
        </tr>
        <tr>
          <td style="text-align:right;">
            <a class="btn btn-medium" href="./"><small>CONTINUE SHOPPING</small></a>
          </td>
          <td>
            <a class="btn btn-medium btn-primary" href="<?php if ($host == "localhost") {echo "/checkout.php";} else {echo "https://www.babybeddingtown.com/checkout.php";}?>"><small>CHECKOUT</small></a>
          </td>
        </tr>
      </table>
      <?php } else { html::alert('warning', '', 'Your cart is empty'); } ?>
      <?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>