<?php

define('_ITEM_MIN_LEN', 2);
define('_ITEM_MAX_LEN', 20);

// ##############################
function _api_db(){
  try{
    $database_user_name = 'rootxxxx';
    $database_password = '';
    $database_connection = 'mysql:host=localhost; dbname=company; charset=utf8mb4';
    
    $database_options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    return new PDO( $database_connection, $database_user_name, $database_password, $database_options ); 
  }catch(Exception $ex){
    http_response_code(500);
    echo "System under maintainance";
  }
}

_api_db();










