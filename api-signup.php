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

// Connect to DB
// include / require
$db = require_once('db.php');
try{
  // Insert data in the DB
  $q = $db->prepare('INSERT INTO users 
  
  VALUES(:user_id, :user_name, :user_last_name, :user_email)');
  $q->bindValue(":user_id", null); // The db will give this automati.
  $q->bindValue(":user_name", $_POST['name']);
  $q->bindValue(":user_last_name", $_POST['last_name']);
  $q->bindValue(":user_email", $_POST['email']);
  $q->execute();
  $user_id = $db->lastInsertId();
  // SUCCESS
  header('Content-Type: application/json');
  // echo '{"info":"user created", "user_id":"'.$user_id.'"}';
  $response = ["info" => "user created", "user_id" => intval($user_id)];
  echo json_encode($response);
}catch(Exception $ex){
  http_response_code(500);
  echo 'System under maintainance';
  exit();
}





// function to manage responding in case of an error
function send_400($error_message){
  header('Content-Type: application/json');
  http_response_code(400);
  $response = ["info"=>$error_message];
  echo json_encode($response);
  exit();
}




