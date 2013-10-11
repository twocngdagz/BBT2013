<?php
/**
 * Checkout Module
 * 
 * March 26, 2013
 * @author abz dmachinist
 * 
 */

class checkout {
  
  public static function findCustomerByEmail($email=NULL) 
  {
    $sql = "SELECT * FROM `customer_account` WHERE (`email`='{$email}');";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
    foreach($d_arr as $d)
    {
      array_push($r,$d);
    }
    return $r;
  }

  public static function findCustomerById($id) 
  {
    $sql = "SELECT * FROM `customer_account` WHERE `id`='{$id}' LIMIT 1";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d)
      {
        array_push($r,$d);
      }
    return $r;
  }

  public static function findCustomerOrder($id) 
  {
    $sql = "SELECT * FROM `customer_orders` WHERE `id` = ".$id." LIMIT 1";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d)
      {
        array_push($r,$d);
      } 
    return $r;
  }

  public static function findCustomerItemsOrder($order_fk) 
  {
    $sql = "SELECT * FROM `customer_order_items` WHERE `order_fk` = ".$order_fk." ";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d)
      {
        array_push($r,$d);
      } 
    return $r;
  }

  public static function findLastCustomerOrder() 
  {
    $sql = "SELECT MAX(id) as `id` FROM `customer_orders` LIMIT 1";
    db::execute_query($sql);
    $d_arr = db::get_result();
    foreach($d_arr as $d)
    {
      return $d['id'];
    }
  }

  public static function findLastCustomerAddress($cust_fk=0, $billing_or_shipping=1) 
  {
    // billing = 0, shipping = 1
    $sql = "SELECT id FROM `customer_addresses` WHERE `cust_fk` = ".$cust_fk." 
        AND `billing_or_shipping` = ".$billing_or_shipping." LIMIT 1";

    db::execute_query($sql);
    $d_arr = db::get_result();
    foreach($d_arr as $d)
    {
      return $d['id'];
    }
  }

  public static function findLastCustomer() 
  {
    $sql = "SELECT MAX(id) as `id` FROM `customer_account` LIMIT 1";
    db::execute_query($sql);
    $d_arr = db::get_result();
    foreach($d_arr as $d) {
      return $d['id'];
    }
  }

  public static function insertOrderItems($ordersArr, $payment_method=NULL, $payment_receipt_number=NULL, $customer_id) 
  {
    $customer_address_0 = self::findLastCustomerAddress($customer_id,0);
    $customer_address_1 = self::findLastCustomerAddress($customer_id,1);
    $sql = "INSERT INTO `customer_orders` (`id`, `cust_fk`, `billing_fk`, `shipping_fk`, 
          `payment_method`, `payment_receipt_number`) 
        VALUES (NULL, '".$customer_id."', '".$customer_address_0."', '".$customer_address_1."', '".html::cln($payment_method)."', '".html::cln($payment_receipt_number)."');";
    db::execute_query($sql);
    $customer_order = mysql_insert_id();

    // SHIPPING AND BILLING FOR THANK YOU PAGE.
    $_SESSION['checkout_billing_user_id'] = $customer_address_0;
    $_SESSION['checkout_shipping_user_id'] = $customer_address_1;
    self::findLastCustomerOrder();
    $_SESSION['checkout_order_id'] = $customer_order;

    foreach($ordersArr as $item => $qty)
    {
      $products = products::getProducts($item);
      foreach( $products as $row)
      {
        $sql_2 = "INSERT INTO `customer_order_items` (`id`, `order_fk`, `product_items_fk`, `products_item_option_fk`, `product_name`, `option_name`, `weight`, `price`, `qty`) 
            VALUES (NULL, '".$customer_order."', '".$item."', '', '".html::cln($row["name_short"])."', '', '', '".html::cln(number_format($row["price"], 2))."', '".html::cln($qty)."');";
        db::execute_query($sql_2);
      } 
    }
  }

  public static function insertCustomerAccount($firstname, $lastname, $email, $phone, $address1, $address2, $city, $state, $zipcode, $country, $billing_or_shipping, $password=NULL) 
  {
    $sql = "INSERT INTO `customer_account` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`) 
        VALUES (NULL, '".html::cln($firstname)."', '".html::cln($lastname)."', '".html::cln($email)."', '".html::cln($phone)."', 
        '".html::cln($password)."');";
    db::execute_query($sql);
    return mysql_insert_id();
  }

  public static function insertCustomerAddress($firstname, $lastname, $email, $phone, $address1, $address2, $city, $state, $zipcode, $country, $billing_or_shipping, $password=NULL) 
  {
    $customerData = self::findCustomerByEmail($email);
    $emailFk = $customerData[0]['email'];
    $customerIdFk = $customerData[0]['id'];

    $sql_2 = "INSERT INTO `customer_addresses` (`id`, `cust_fk`, `first_name`, `last_name`, `address1`, `address2`, `city`, `state`, `zipcode`, `country`, `billing_or_shipping`, `active`) 
          VALUES (NULL, '".html::cln($customerIdFk)."', '".html::cln($firstname)."', '".html::cln($lastname)."', '".html::cln($address1)."'
          , '".html::cln($address2)."', '".html::cln($city)."' , '".html::cln($state)."' , '".html::cln($zipcode)."' , '".html::cln($country)."'
          , '".html::cln($billing_or_shipping)."', '".html::cln(1)."');";
    db::execute_query($sql_2);

  }

  public static function updateOrderStatus($status, $shippingmethod, $shippingdate, $trackingnumber, $comment, $id) {
    echo $shippingdate;
    $sql = "Update `customer_orders` SET
            `status` = '".$status."',
            `shippingmethod` = '".$shippingmethod."',
            `shippingdate` = '$shippingdate',
            `trackingnumber` = '".$trackingnumber."',
            `comment` = '".$comment."'
            WHERE `customer_orders`.`id`  = '$id'
            ";
    db::execute_query($sql);
  }

  public static function updateCustomerAccount($firstname, $lastname, $email, $phone, $address1, $address2, $city, $state, $zipcode, $country, $billing_or_shipping) 
  {
    $sql = "UPDATE `customer_account` SET  
        `email` =  '".html::cln($email)."',
        `first_name` =  '".html::cln($firstname)."',
        `last_name` =  '".html::cln($lastname)."' ,
        `phone` =  '".html::cln($phone)."'
        WHERE  `customer_account`.`email` = '$email';";
    db::execute_query($sql);

    $customerData = self::findCustomerByEmail($email);
    $emailFk      = $customerData[0]['email'];
    $customerIdFk = $customerData[0]['id'];

    $sql_2 = "UPDATE `customer_addresses` SET  
        `first_name` =  '".html::cln($firstname)."',
        `last_name` =  '".html::cln($lastname)."' ,
        `address1` =  '".html::cln($address1)."',
        `address2` =  '".html::cln($address2)."',
        `city` =  '".html::cln($city)."',
        `state` =  '".html::cln($state)."',
        `zipcode` =  '".html::cln($zipcode)."',
        `country` =  '".html::cln($country)."',
        `billing_or_shipping` =  '".html::cln($billing_or_shipping)."'
        WHERE  `customer_addresses`.`cust_fk` = '{$customerIdFk}';";
    db::execute_query($sql_2);
  }

  public static function findCustomerBillingOrShipping($add_id=0, $billing_or_shipping=1) 
  {
    // billing = 0, shipping = 1
    $sql = "SELECT * FROM `customer_addresses` WHERE `id` = ".$add_id." 
        AND `billing_or_shipping` = ".$billing_or_shipping." LIMIT 1";
    db::execute_query($sql);
    $r = array();
    $d_arr = db::get_result();
    foreach($d_arr as $d)
    {
      array_push($r,$d);
    } 
    return $r;
  }

  public static function insertShippingDetails($price=0, $qty=0)
  {
    $sql = "INSERT INTO `customer_order_items` (`id`, `order_fk`, `product_items_fk`, `products_item_option_fk`, `product_name`, `option_name`, `weight`, `price`, `qty`) 
        VALUES (NULL, '".self::findLastCustomerOrder()."', '99999', '', 'shipping', '', '', '".$price."', '".$qty."');";
    db::execute_query($sql);
  }
  
}
?>