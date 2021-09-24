<?php

// VALIDATE THE DATA
if( ! isset( $_POST['name'] ) ){ send_400('name is required'); }
if( strlen( $_POST['name'] ) < 2 ){ send_400('name min 2 characters'); }
if( strlen( $_POST['name'] ) > 5 ){ send_400('namemax 5 characters'); }

// SUCCESS
echo "You are signed up";


// function to manage responding in case of an error
function send_400($error_message){
  http_response_code(400);
  echo $error_message;
  exit();
}




