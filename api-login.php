<?php

require_once('globals.php');

// Validate
if( ! isset($_POST['email']) ){ _res(400,['info'=>'email required']); }
if( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){ 
  _res(400, ['info'=>'email is invalid']); 
}

// Validate the password
if( ! isset($_POST['password']) ){ _res(400,['info'=>'password required']); }
if(strlen($_POST['password']) < _PASSWORD_MIN_LEN){ _res(400,['info'=>'password min '._PASSWORD_MIN_LEN.' characters']); }
if(strlen($_POST['password']) > _PASSWORD_MAX_LEN){ _res(400,['info'=>'password max '._PASSWORD_MAX_LEN.' characters']); }


// Expected fake variables
$correct_email = 'a@a.com';
$correct_password = 'password';

if( $correct_email != $_POST['email'] || $correct_password != $_POST['password'] ){
  _res(400, ['info'=>'wrong credentials']);

}

// Success
_res(200, ['info'=>'success login']);









