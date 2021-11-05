<?php

$name = "A";
$_to_email = "santiagokeatestemail@gmail.com";
// $verification_key = bin2hex(random_bytes(16));
$verification_key = "12345678901234567890123456789012";
$_message = "Thank you. 
  <a href='http://localhost/validate-user.php?key=$verification_key'>
    Click here to verify your account
  </a>";

require_once(__DIR__."/private/send_email.php");