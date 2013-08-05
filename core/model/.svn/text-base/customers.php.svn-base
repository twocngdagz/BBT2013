<?php
if(isset($gp["button"])) {
  # RESTRICT USERNAME
  if(!html::restrictText($gp['d']['first_name'])) {
    html::alert("error", "Name should not contain special characters.", "Wrong Name Input");
  } else {        
      switch($gp['d']['axn']):
        case 'create':  
          customers::insertCustomers( 
                      $gp['d']['first_name'],
                      $gp['d']['last_name'],  
                      $gp['d']['email'], 
                      $gp['d']['phone'], 
                      $gp['d']['address'], 
                      $gp['d']['address2'], 
                      $gp['d']['city'], 
                      $gp['d']['state'], 
                      $gp['d']['zipcode']
                      );
          $inserted_id = customers::getLastInsertedId();
          customers::insertCustomerAddress(
                      $inserted_id,
                      $gp['d']['first_name'],
                      $gp['d']['last_name'],
                      $gp['d']['address'], 
                      $gp['d']['address2'], 
                      $gp['d']['city'], 
                      $gp['d']['state'], 
                      $gp['d']['zipcode'],
                      $gp['d']['country']
                      );
                      
            html::alert("success", "Successfully Added new Customer", "Customer Created");  
        break;
        
        case 'update':
          customers::updateCustomers(  $gp['d']['customer_id'], 
                      $gp['d']['first_name'],
                      $gp['d']['last_name'],  
                      $gp['d']['email'], 
                      $gp['d']['phone'], 
                      $gp['d']['address'], 
                      $gp['d']['address2'], 
                      $gp['d']['city'], 
                      $gp['d']['state'], 
                      $gp['d']['zipcode']
                      );
          customers::updateStatus(  $gp['d']['customer_id']);
          customers::insertCustomerAddress(
                      $gp['d']['customer_id'],
                      $gp['d']['first_name'],
                      $gp['d']['last_name'],
                      $gp['d']['address'], 
                      $gp['d']['address2'], 
                      $gp['d']['city'], 
                      $gp['d']['state'], 
                      $gp['d']['zipcode'],
                      $gp['d']['country']
                      );
          html::alert("success", "Successfully Updated Customer", "Customer Updated");  
        break;
      endswitch;
    
  }
} else if(isset($gp["delete"])) {
  if(strtolower($gp['delete']) == "delete") {
    customers::deleteCustomers($gp['d']['customer_id']);
  }
}
?>