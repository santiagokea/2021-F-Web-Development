<?php
try{
  $database_user_name = 'root';
  $database_pasword = ''; // MAC password is root
  $database_connection = "mysql:host=localhost; dbname=company; charset=utf8mb4";

  // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  $database_options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  );
  return new PDO( $database_connection, $database_user_name, $database_pasword, $database_options );
}catch( PDOException $e){
  http_response_code(500);
  header('Content-Type: application/json');
  echo '{"info":"uppps... cannot connect to db"}';
  exit();
}  