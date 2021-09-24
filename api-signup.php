<?php

// Validate name
if( ! isset( $_POST['name'] ) ){ send_400('name is required'); }
if( strlen( $_POST['name'] ) < 2 ){ send_400('name min 2 characters'); }
if( strlen( $_POST['name'] ) > 5 ){ send_400('name max 5 characters'); }

// Validate last_name
if( ! isset( $_POST['last_name'] ) ){ send_400('last_name is required'); }
if( strlen( $_POST['last_name'] ) < 2 ){ send_400('last_name min 2 characters'); }
if( strlen( $_POST['last_name'] ) > 5 ){ send_400('last_name max 5 characters'); }

// Validate email
if( ! isset( $_POST['email'] ) ){ send_400('email is required'); }
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){ send_400('email is invalid'); }


// SUCCESS
echo "You are signed up";

// function to manage responding in case of an error
function send_400($error_message){
  http_response_code(400);
  echo $error_message;
  exit();
}




