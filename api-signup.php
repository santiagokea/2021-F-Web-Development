<?php
// VALIDATE THE DATA
if( ! isset( $_POST['name'] ) ){
  http_response_code(400);
  echo "name is required";
  exit(); // die() // exit;
}

if( strlen( $_POST['name'] ) < 2 ){
  http_response_code(400);
  echo "name must be at least 2 characters";
  exit(); // die() // exit;
}



// SUCCESS
echo "You are signed up";




