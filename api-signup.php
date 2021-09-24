<?php

// VALIDATE THE DATA
if( ! isset( $_POST['name'] ) ){ send_error(); }
if( strlen( $_POST['name'] ) < 2 ){ send_error(); }
if( strlen( $_POST['name'] ) > 5 ){ send_error(); }


// SUCCESS
echo "You are signed up";


// function to manage responding in case of an error
function send_error(){
  http_response_code(400);
  echo "xxxxxxxxxxx";
  exit();
}




