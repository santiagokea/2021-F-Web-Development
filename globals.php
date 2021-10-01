<?php


// ##############################
function _res( $status=200, $message=[] ){
  http_response_code($status); 
  header('Content-Type: application/json'); 
  echo json_encode($message); 
  exit();
}


// ##############################
function _db(){
  $database_user_name = 'xxxx';
  $database_pasword = 'xxxx';
  $database_connection = 'mysql:host=localhost; dbname=xxxx; charset=utf8mb4';

  $database_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  return new PDO( $database_connection, $database_user_name, $database_pasword, $database_options ); 
}




















