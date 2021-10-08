<?php
require_once('globals.php');
// TODO: Make sure the user is logged

// Validate
if(!isset($_POST['item_name'])){ http_response_code(400); echo 'item_name required'; exit(); }
if(strlen($_POST['item_name']) < _ITEM_MIN_LEN){ http_response_code(400); echo 'item_name min '._ITEM_MIN_LEN.' characters'; exit(); }
if(strlen($_POST['item_name']) > _ITEM_MAX_LEN){ http_response_code(400); echo 'item_name max '._ITEM_MAX_LEN.' characters'; exit(); }

$db = _api_db();

try{
  $item_id = bin2hex(random_bytes(16));
  $q = $db->prepare('INSERT INTO items 
                      VALUES(:item_id, :item_name)');
  $q->bindValue(':item_id', $item_id);
  $q->bindValue(':item_name', $_POST['item_name']);
  $q->execute();
  // Success
  echo "Item created with id $item_id";
}catch(Exception $ex){
  http_response_code(500);
  echo 'System under maintainance '.__LINE__;
  exit();
}


