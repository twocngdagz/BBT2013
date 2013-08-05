<?php

class Customers {
  
  # GET CUSTOMER
  public static function getCustomers($user_id) 
  {
    $sql = "SELECT * FROM `customer_account` 
        WHERE (`id` = '{$user_id}' )";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d)
      {
        array_push($r,$d);
      }
    return $r;  
  } 
  
  # GET ALL CUSTOMER
  public static function getAllCustomers() 
  {
    $sql = "SELECT * FROM `customer_account`";
    db::execute_query($sql);
    $d_arr = db::get_result();
    $r = array();
      foreach($d_arr as $d)
      {
        array_push($r,$d);
      }
    return $r;  
  } 
  
  # INSERT CUSTOMER
  public static function insertCustomers($first_name, $last_name, $email, $phone, $address, $addres2, $city, $state, $zipcode) 
  {
    $sql = "INSERT INTO `customer_account` (
        `first_name`,
        `last_name`,
        `email`,
        `phone`,
        `status` 
        )
        VALUES (
        '".html::cln($first_name)."',
        '".html::cln($last_name)."',
        '".html::cln($email)."',
        '".html::cln($phone)."',
        '1'
        );
        ";
    db::execute_query($sql);

  }

  # GET LAST INSERTED ID
  public static function getLastInsertedId(){
    $sql = "SELECT id
            FROM  `customer_account` 
            ORDER BY id DESC 
            LIMIT 1";
    db::execute_query($sql);
    $_id = db::get_result();
    return $_id;
  }

  # UPDATE CUSTOMER
  public static function updateCustomers($customer_id, $first_name, $last_name, $email, $phone, $address, $addres2, $city, $state, $zipcode) 
  {
    $sql = "UPDATE `customer_account` SET  
        `first_name` =  '".html::cln($first_name)."',
        `last_name` =  '".html::cln($last_name)."',
        `email` =  '".html::cln($email)."',
        `phone` =  '".html::cln($phone)."' 
        WHERE  
        `customer_account`.`id` = ".html::cln($customer_id).";";
    db::execute_query($sql);
  }
  
  # DELETE CUSTOMER
  public static function deleteCustomers($customer_id) {
    $sql = "DELETE FROM `customer_account` WHERE `customer_account`.`id` = {$customer_id}";
    db::execute_query($sql);
  }
  
  # UPDATE CUSTOMER ACTIVE TO INACTIVE
  public static function updateStatus($customer_id) {
    $sql = "UPDATE `customer_addresses` SET
    `active` = '0' 
    WHERE 
    `customer_addresses`.`cust_fk` = ".html::cln($customer_id)."";
    db::execute_query($sql);
  }

  # INSERT CUSTOMER ADDRESSES DETAILS
  public static function insertCustomerAddress($customer_id, $first_name, $last_name, $address, $addres2, $city, $state, $zipcode, $country){
    $sql = "INSERT INTO `customer_addresses` (
        `cust_fk`,
        `first_name`,
        `last_name`,
        `address1`,
        `address2`,
        `city`,
        `state`,
        `zipcode`,
        `country`,
        `billing_or_shipping`,
        `active` 
        )
        VALUES (
        '".html::cln($customer_id)."',
        '".html::cln($first_name)."',
        '".html::cln($last_name)."',
        '".html::cln($address)."',
        '".html::cln($addres2)."',
        '".html::cln($city)."',
        '".html::cln($state)."',
        '".html::cln($zipcode)."',
        '".html::cln($country)."',
        0,
        1
        );
        ";
    db::execute_query($sql);
  }

}
?>