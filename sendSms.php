<?php
require 'twilio-php-master/Services/Twilio.php';
$message=$_REQUEST['body'];
$to=$_REQUEST['to'];
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "AC19eedff076dbf276ec7080bf6dbba6e1";
$AuthToken = "687ef360573d10db18ae6ed0422e1838";
$client = new Services_Twilio($AccountSid, $AuthToken);
$sms = $client->account->sms_messages->create(
"2604754122", // From this number
$to, // To this number
$body
);

?>