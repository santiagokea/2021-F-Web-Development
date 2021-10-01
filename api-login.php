<?php

require_once('globals.php');

// Validate
if( ! isset($_POST['email']) ){ _res(400,["info"=>"email required"]); }
if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){ 
  _res(400, ["info"=>"email is invalid"]); 
}

// Success
_res(200, ["info"=>"success login"]);







