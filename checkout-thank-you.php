<?php
    /**
    * @author abz dmachinist
    * 
    * Thank you page for checkout page
    */
?>
<?php include('mchn.config.php'); ?>
<?php include('stripe.config.php'); ?>
<?php include('settings.php'); ?>
<?php ob_start();?>
<?php include (MCHN_DIR_HTML . 'html.header.php'); ?>
<?php 
$buffer = ob_get_contents();
ob_end_clean();
$buffer =str_replace("%BBT2013%", "Thank You from BabyBeddingTown.com", $buffer);
echo $buffer;
?>

<?php
$orderDetails     = checkout::findCustomerOrder($_SESSION['checkout_order_id']);
$billingDetails   = checkout::findCustomerBillingOrShipping($_SESSION['checkout_billing_user_id'], 0);
$shippingDetails    = checkout::findCustomerBillingOrShipping($_SESSION['checkout_shipping_user_id'], 1);
$shippingPrice    = shippingCost::getShippingCost($_COOKIE['cart'], 1);

$subTotal = 0;
$total = 0;

?>

<div class='well'>
  <br>
  <?php html::alert('success', 'Checkout has been successful', 'Thank you for ordering!'); ?>
  <?php
  $content  = '';
  $content .= "<div>";
  foreach( $orderDetails as $order ):
    $content .= "<h3>Receipt </h3>";
    $content .= "<div>".$order['payment_receipt_number']."</div>";
    $orderItems = checkout::findCustomerItemsOrder($order['id']);


    $content .= "<h3>Orders </h3>";
    $content .= "<table width='100%' border='1' style='border-collapse:collapse;' cellpadding='5px'>";
    $content .= "<tr>";
    $content .= "<th>ID</th>";
    $content .= "<th>PRODUCT</th>";
    $content .= "<th>PRICE</th>";
    $content .= "<th>QUANTITY</th>";
    $content .= "<th>LINE TOTAL</th>";
    $content .= "</tr>";
    foreach( $orderItems as $item ):
      $products = products::getProducts($item['product_items_fk']);
      $content .= "<tr>";
        foreach( $products as $row):
            $content .= "<td>";
                $content .= $row['id'];
            $content .= "</td>";
            $content .= "<td>";
                $content .= $row['name_short'];
            $content .= "</td>";
            $content .= "<td>";
                $content .= '$' . number_format($row['price'], 2);
            $content .= "</td>";
            $content .= "<td>";
                $content .= $item['qty'];
            $content .= "</td>";
            $content .= "<td>";
                   $lineTotal = $row['price'] * $item['qty'];
                   $subTotal = $subTotal + $lineTotal;
                   $content .= '$' . number_format($lineTotal, 2);
            $content .= "</td>";
        endforeach;
        $content .= "</tr>";
    endforeach;
        $total = $total + $subTotal;
      $content .= "<tr>";
            $content .= "<td colspan='3'>";
            $content .= "</td>";
            $content .= "<td colspan='' style='text-align:right;'>";

              $content .= "<div>";
                  $content .= 'Sub Total';
            $content .= "</div>";

          $content .= "<div>";
                  $content .= 'Shipping and Handling';
            $content .= "</div>";
            
            $content .= "<div>";
                  $content .= 'Total';
            $content .= "</div>";

            $content .= "</td>";

            $content .= "<td colspan=''>";

              $content .= "<div>";
                  $content .= '$' . number_format($total, 2) . "";
            $content .= "</div>";
              $cartTotal = $subTotal + $shippingPrice; 
          $content .= "<div>";
                  $content .= '$' . $shippingPrice . " ";
            $content .= "</div>";
            
            $content .= "<div>";
                  $content .= '$' . number_format($cartTotal, 2) . " ";
            $content .= "</div>";

            $content .= "</td>";
        $content .= "</tr>";
    $content .= "</table>";

  endforeach;
  $content .= "</div>";

  $content .= "<h3>Billing</h3>";
  foreach( $billingDetails as $bill ):
    $customerDetails = checkout::findCustomerById($bill['cust_fk']);
    $_SESSION['last_customer_order'] = $customerDetails[0]['email'];
    $content .= "<div><b>Name:</b> <span>".$bill['first_name']."</span> <span>".$bill['last_name']."</span></div>";
    $content .= "<div><b>Address:</b> <span>".$bill['address1']."</span></div>";
    $content .= "<div><b>Address Line 2:</b> <span>".$bill['address2']."</span></div>";
    $content .= "<div><b>City:</b> <span>".$bill['city']."</span></div>";
    $content .= "<div><b>State:</b> <span>".$bill['state']."</span></div>";
    $content .= "<div><b>Zipcode:</b> <span>".$bill['zipcode']."</span></div>";
    $content .= "<div><b>Country:</b> <span>".$bill['country']."</span></div>";
  endforeach;

  $content .= "<h3>Shipping</h3>";
  foreach( $shippingDetails as $ship ):
    $content .= "<div><b>Name:</b> <span>".$ship['first_name']."</span> <span>".$ship['last_name']."</span></div>";
    $content .= "<div><b>Address:</b> <span>".$ship['address1']."</span></div>";
    $content .= "<div><b>Address Line 2:</b> <span>".$ship['address2']."</span></div>";
    $content .= "<div><b>City:</b> <span>".$ship['city']."</span></div>";
    $content .= "<div><b>State:</b> <span>".$ship['state']."</span></div>";
    $content .= "<div><b>Zipcode:</b> <span>".$ship['zipcode']."</span></div>";
    $content .= "<div><b>Country:</b> <span>".$ship['country']."</span></div>";
  endforeach;

  echo $content;

  $subject   = 'Your Baby Bedding Town Order from '. date("j/n/Y") .'. Receipt Number ' .$order['payment_receipt_number'];
  # $u_email   = 'Baby Bedding Town <orders@babybeddingtown.com>';
  $u_email   = $_SESSION['last_customer_order'];

  $headers     = 'MIME-Version: 1.0' . "\r\n";
  $headers  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers    .= "From: Baby Bedding Town <orders@babybeddingtown.com>". "\r\n";
  $headers    .= "Bcc: Alon Cohen <alon@alon-cohen.com>, Mederic Beldia <twocngdagz@yahoo.com>". "\r\n";
  $headers    .= "Reply-To: Baby Bedding Town Orders <orders@babybeddingtown.com>". "\r\n";
  

  @mail($u_email, $subject, $content, $headers);
?>
</div>

<?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>