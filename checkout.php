<?php
  /**
  * Configuration for Stripe Keys
  * Before updating please check Stripe API to Test
  * Checkout Page
  *
  * @author abz dmachinist
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
  $buffer =str_replace("%BBT2013%", "Complete Your Checkout, BabyBeddingTown.com", $buffer);
   $secure_connection = false;
  if(isset($_SERVER['HTTPS']))
  {
    if ($_SERVER["HTTPS"] == "on") 
    {
      $secure_connection = true;
    }
  }

  if ($secure_connection) {
    if ($_SERVER['HTTP_HOST'] != "localhost") {
      $buffer =str_replace("http://", "https://", $buffer);
    }
  } else {
      if ($_SERVER['HTTP_HOST'] != "localhost") {
        header('Location: https://www.babybeddingtown.com/checkout.php/');
      }
  }
  echo $buffer;
  ?>
  <?php 

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

  if( !empty($gp['message']) ) 
  {
    if($gp['message']=='new')
      html::alert('success', 'You have successfully added new item.', 'Cart Add Item');
    if($gp['message']=='update')
      html::alert('success', 'You have successfully added updated item.', 'Cart Update Item');
    if($gp['message']=='remove')
      html::alert('success', 'You have successfully added removed item.', 'Cart Remove Item');
  }

  if(!empty($_COOKIE['cart']))
    $shippingPrice = shippingCost::getShippingCost($_COOKIE['cart'], 1);

  ?>

  <?php $subTotal = 0; ?>
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
          <a class="btn btn-medium" href="./products.php"><small>CONTINUE SHOPPING</small></a>
        </td>
        <td>
          Click at the bottom.
        </td>
      </tr>
    </table>


    <?php 
    $amountFloat = number_format($cartTotal, 2);
    $amountComma = str_replace(".", "", $amountFloat);
    $amount = str_replace(",", "", $amountComma);

  // Checkout using stripe API implementation.
    if ( isset($_POST['checkout']) && $_POST['checkout'] == 'true' && !empty($amount) )
    {
      Stripe::setApiKey($secretKey);

      $customer = Stripe_Customer::create(array(
        'email' => trim(strip_tags($_POST['email'])),
        'card'  =>  trim(strip_tags($_POST['stripeToken']))
        ));

      $charge = Stripe_Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $amount,
        'currency' => 'usd'
        ));

    /*
    Do not remove configuration, old configurations are used.

    $stripeCom = new StripeCom($secretKey);
    $array = array( "amount" => $amount,
                    "currency" => "usd",
                    "description" => trim(strip_tags($_POST['email'])),
                    "email" => trim(strip_tags($_POST['email'])),
                    "card" => trim(strip_tags($_POST['stripeToken']))
                  );

    $stripeCom->charge($array);
    */

    $stripeCom = new StripeCom($secretKey);

    if(!$stripeCom->isError()) {
      $success = TRUE;
    } else {
      $error = $stripeCom->getErrors();
      $error = $error[0];
    }
  }
  ?>

  <?php if ($success): ?>
    <?php html::alert('success', 'Checkout has been successful', 'Account Charged'); ?>
    <?php
  // payment_method payment_receipt_number
    if(!empty($_REQUEST['email'])) 
    {
      $checkUser = checkout::findCustomerByEmail($_REQUEST['email']);

      if(empty($checkUser)) {
      // TAKE NOTE OF THE INPUT
        checkout::insertCustomerAccount($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 0);

      // CHECK TO COPY FROM BILLING DETAILS FOR SHIPPING DETAILS.
        if( isset($_REQUEST['s_copy_billing'])) {
          // COPY FROM MAIN FORM.
          checkout::insertCustomerAddress($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 0);
          checkout::insertCustomerAddress($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 1);
        } else {
          // TRIGGER s_ MEANS SHIPPING.
          checkout::insertCustomerAddress($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 0);
          checkout::insertCustomerAddress($_REQUEST['s_firstname'], $_REQUEST['s_lastname'], $_REQUEST['email'], NULL, $_REQUEST['s_address1'], $_REQUEST['s_address2'], $_REQUEST['s_city'], $_REQUEST['s_state'], $_REQUEST['s_zipcode'], $_REQUEST['s_country'], 1);
        }

      // CREATE ORDER ITEMS
        checkout::insertOrderItems($_COOKIE['cart'], "Credit Card: Stripe", $charge->id);

      // SHIPPING PREFERENCES
        checkout::insertShippingDetails($shippingPrice,1);

        html::redirect('checkout-thank-you.php');
      } 
      else 
      {
        checkout::updateCustomerAccount($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 0);
        checkout::insertOrderItems($_COOKIE['cart'], NULL, NULL);

      // CHECK TO COPY FROM BILLING DETAILS FOR SHIPPING DETAILS.
        if( isset($_REQUEST['s_copy_billing'])) {
          // COPY FROM MAIN FORM.
          checkout::insertCustomerAddress($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 0);
          checkout::insertCustomerAddress($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 1);
        } else {
          // TRIGGER s_ MEANS SHIPPING.
          checkout::insertCustomerAddress($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['city'], $_REQUEST['state'], $_REQUEST['zipcode'], $_REQUEST['country'], 0);
          checkout::insertCustomerAddress($_REQUEST['s_firstname'], $_REQUEST['s_lastname'], $_REQUEST['email'], NULL, $_REQUEST['s_address1'], $_REQUEST['s_address2'], $_REQUEST['s_city'], $_REQUEST['s_state'], $_REQUEST['s_zipcode'], $_REQUEST['s_country'], 1);
        }

      // CREATE ORDER ITEMS
        checkout::insertOrderItems($_COOKIE['cart'], "Credit Card: Stripe", $charge->id);

      // SHIPPING PREFERENCES
        checkout::insertShippingDetails($shippingPrice,1);
        html::redirect('checkout-thank-you.php');
      }
    }
    ?>
  <?php endif; ?>

  <?php // STRIPE CODE ?>
  <script type="text/javascript">
    Stripe.setPublishableKey('<?php echo $publishableKey; ?>');
    $(document).ready(function() {
      function addInputNames() {
        $(".card-number").attr("name", "card-number")
        $(".card-cvc").attr("name", "card-cvc")
        $(".card-expiry-year").attr("name", "card-expiry-year")
      }

      function removeInputNames() {
        $(".card-number").removeAttr("name")
        $(".card-cvc").removeAttr("name")
        $(".card-expiry-year").removeAttr("name")
      }
      jQuery.validator.addMethod("cardNumber", Stripe.validateCardNumber, "Please enter a valid card number");
      jQuery.validator.addMethod("cardCVC", Stripe.validateCVC, "Please enter a valid security code");
      jQuery.validator.addMethod("cardExpiry", function() {
        return Stripe.validateExpiry($(".card-expiry-month").val(), 
          $(".card-expiry-year").val())
      }, "Please enter a valid expiration");
      $("#checkout-cc-form").validate({
        submitHandler: function(form)
        {
          removeInputNames();
          $(form['submit-button']).attr("disabled", "disabled")

          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(), 
            exp_year: $('.card-expiry-year').val()
          }, function(status, response) {
            if (response.error) {
              $(form['submit-button']).removeAttr("disabled")
              $(".payment-errors").html(response.error.message);
              addInputNames();
            } else {
              var token = response['id'];
              var input = $("<input name='stripeToken' value='" + token + "' style='display:none;' />");
              form.appendChild(input[0])
              form.submit();
            }
          });

          return false;
        },
        rules: {
          "card-cvc" : {
            cardCVC: true,
            required: true
          },
          "card-number" : {
            cardNumber: true,
            required: true
          },
          "card-expiry-year" : "cardExpiry"
        }
      });              
addInputNames();


$('#s_copy_billing').change(function(){

  if( this.checked ){
    $('#shipping div input:text').attr('disabled','disabled');
    $('#shipping div select:option').attr('disabled','disabled');

  } else {
                // find all text inputs inside billingInfo and enable them
                $('#shipping div input:text').removeAttr('disabled');
                $('#shipping div select:option').removeAttr('disabled');
              }

        }).trigger('change'); // close change() then trigger it once

});
</script>

<?php if ($error): ?>
  <h2><?php echo $error ?></h2>
<?php endif; ?>

<form action="" method="post" id="checkout-cc-form" style="display: none;">
  <?php if (!$success && $subTotal != NULL): ?>
    <div class='row-fluid'> 
      <div class='span12'>
        <legend>Payment and Billing</legend>
        <div class="form-row">
          <label>Card Number</label>
          <input type="text" name='card_number' maxlength="20" value="" class="card-number stripe-sensitive required input-block-level" />
        </div>

        <div class="form-row">
          <label>CVC</label>
          <input type="text" name='cvc' maxlength="4" value="000" class="card-cvc stripe-sensitive required input-block-level" />
        </div>

        <div class="form-row">
          <label>Expiration</label>
          <div class="expiry-wrapper">
            <select class="card-expiry-month stripe-sensitive required span3">
            </select>
            <script type="text/javascript">
              var select = $(".card-expiry-month"),
              month = new Date().getMonth() + 1;
              for (var i = 1; i <= 12; i++) {
                select.append($("<option value='"+i+"' "+(month === i ? "selected" : "")+">"+i+"</option>"))
              }
            </script>
            <span> / </span>
            <select class="card-expiry-year stripe-sensitive required span3"></select>
            <script type="text/javascript">
              var select = $(".card-expiry-year"),
              year = new Date().getFullYear();

              for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
              }
            </script>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <div class='row-fluid'> 
      <div class='span6'> 
        <legend>Billing Information</legend>

        <div class="form-row">
          <label for="name" class="stripeLabel">Name</label>
          <input type="text" name="firstname" class="required input-block-level span6" value='' placeholder='First'/>
          <input type="text" name="lastname" class="required input-block-level span6" value=''  placeholder='Last'/>
        </div>     

        <div class="form-row">
          <label for="name" class="stripeLabel">Email</label>
          <input type="text" name="email" class="required input-block-level" value='' />
        </div>   

        <div class="form-row">
          <label for="name" class="stripeLabel">Phone</label>
          <input type="text" name="phone" class="required input-block-level" value='' />
        </div>     

        <div class="form-row">
          <label for="name" class="stripeLabel">Address</label>
          <input type="text" name="address1" class="required input-block-level" value='' />
        </div>         

        <div class="form-row">
          <label for="name" class="stripeLabel">Address Line 2 (optional)</label>
          <input type="text" name="address2" class="input-block-level" value='' />
        </div>     

        <div class="form-row">
          <label for="name" class="stripeLabel">City</label>
          <input type="text" name="city" class="required input-block-level" value='' />
        </div>    

        <div class="form-row">
          <label for="name" class="stripeLabel"> State / Zipcode / Country</label>
          <select name="state" class='span4'>
            <?php foreach($options['state'] as $state): ?>
              <option value='<?php echo $state ?>'><?php echo $state ?></option>
            <?php endforeach; ?>
          </select>
          <input type="text" name="zipcode" class="required input-block-level span4" value='' placeholder="Zipcode" />

          <?php $countryList = array('USA','Canada'); ?>
          <select name="country" class='span4'>
            <?php foreach($countryList as $country): ?>
              <option value='<?php echo $country ?>'><?php echo $country ?></option>
            <?php endforeach; ?>
          </select>
        </div> 

        <!--
            <div class="form-row">
                <label for="name" class="stripeLabel">Your Name</label>
                <input type="text" name="name" class="required input-block-level" value='Test Tests' />
            </div>            

            <div class="form-row">
                <label for="email">E-mail Address</label>
                <input type="text" name="email" class="required input-block-level" value='testing@testerzeeee.com' />
            </div>            
          -->

          <input type="hidden" name="checkout" value="true" />
          <span class="payment-errors"></span>
        </div> <!-- span6 -->

        <div class='span6' id='shipping'>
          <legend>
            Shipping Information
            <div class='pull-right' style=''>
              <label class=''>
                <input type="checkbox" id="s_copy_billing" name="s_copy_billing" class="pull-left" value='yes'/>
                &nbsp;Same as Billing
              </label>
            </div>
          </legend>
          <div class="form-row">
            <label for="name" class="stripeLabel">Name</label>
            <input type="text" name="s_firstname" class="input-block-level span6" value='' placeholder='First'/>
            <input type="text" name="s_lastname" class="input-block-level span6" value=''  placeholder='Last'/>
          </div>     

          <div class="form-row">
            <label for="name" class="stripeLabel">Address</label>
            <input type="text" name="s_address1" class="input-block-level" value='' />
          </div>       

          <div class="form-row">
            <label for="name" class="stripeLabel">Address Line 2 (optional)</label>
            <input type="text" name="s_address2" class="input-block-level" value='' />
          </div>       

          <div class="form-row">
            <label for="name" class="stripeLabel">City</label>
            <input type="text" name="s_city" class="input-block-level" value='' />
          </div>    

          <div class="form-row">
            <label for="name" class="stripeLabel">State / Zipcode / Country</label>
            <select name="s_state" class='span4'>
              <?php foreach($options['state'] as $state): ?>
                <option value='<?php echo $state ?>'><?php echo $state ?></option>
              <?php endforeach; ?>
            </select>
            <input type="text" name="s_zipcode" class="input-block-level span4" value='' placeholder="Zipcode" />
            <?php $countryList = array('USA','Canada'); ?>
            <select name="s_country" class='span4'>
              <?php foreach($countryList as $country): ?>
                <option value='<?php echo $country ?>'><?php echo $country ?></option>
              <?php endforeach; ?>
            </select>
          </div> 
        </div>

      </div> <!-- ROW -->
      <br><br><br>
      <button type="submit" name="submit-button" class='btn btn-primary btn-medium pull-right'>Checkout</button>
      <br><br><br>
    <?php else: ?>
      <?php # html::alert('error', 'Sorry Checkout without billing from cart is invalid', 'Checkout Invalid'); ?>
    <?php endif; ?>
  </form>
  


  <?php ob_start();?>
  <?php include (MCHN_DIR_HTML . 'html.footer.php'); ?>
  <?php 

  $buffer = ob_get_contents();
  ob_end_clean();
  $buffer =str_replace("%BBT2013%", "Complete Your Checkout, BabyBeddingTown.com", $buffer);
   $secure_connection = false;
  if(isset($_SERVER['HTTPS']))
  {
    if ($_SERVER["HTTPS"] == "on") 
    {
      $secure_connection = true;
    }
  }

  if ($secure_connection) {
    if ($_SERVER['HTTP_HOST'] != "localhost") {
      $buffer =str_replace("http://", "https://", $buffer);
    }
  } else {
    if ($_SERVER['HTTP_HOST'] != "localhost") {
      header('Location: https://www.babybeddingtown.com/checkout.php/');
    }
  }
  echo $buffer;
  ?>
