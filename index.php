<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "ACbbccb887465d055afa97156aa3edec8a"; 
$token  = "217587387e2f920b85bff16a3f59d658"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+17328298458", // to 
                           array( 
                               "from" => "+19292038736",       
                               "body" => "Hi chandni shah" 
                           ) 
                  ); 
 
print($message->sid);