<?php
//require_once('/home/users/web/b214/ipg.bumiops/TestApp/includes/initialize.php');
/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */

$name = $_REQUEST['name'] ;
$mail = $_REQUEST['email'] ;
$telephone =  $_REQUEST['telephone'] ;
$comment = $_REQUEST['comment'] ;
$email = 'customerservice@babybeddingtown.com';

$subject = "Customer Concern";
$message = "Name :" . $name ."\n" . "Email :" . $mail . "\n" . "Phone :" . $telephone . "\n\n\n" . $comment;
/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
if (mail($email,$subject,$message)) {
  
  echo json_encode("sent");
} else {
  echo json_encode("failed");
}
//[10:12:37 AM] Mederic Roy Beldia: customerservice@babybeddingtown.com
?>
