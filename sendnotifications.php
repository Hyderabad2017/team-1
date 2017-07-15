<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 
require_once './vendor/autoload.php'; // Loads the library 
 
use Twilio\Rest\Client; 
 
$account_sid = 'AC30995838ad832450b95f2af73b563e6e'; 
$auth_token = '44cc41bf038fd70203846729d4a3e360'; 
$client = new Client($account_sid, $auth_token); 
 
$messages = $client->messages->create("+919640904164", array( 
        'From' => "+18583814108",  
        'Body' => "hi",      
  ));