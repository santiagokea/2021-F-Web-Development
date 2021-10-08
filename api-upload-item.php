<?php
require_once('globals.php');
// TODO: Make sure the user is logged

// Validate
if(!isset($_POST['item_name'])){ http_response_code(400); echo 'item_name required'; exit(); }
if(strlen($_POST['item_name']) < _ITEM_MIN_LEN){ http_response_code(400); echo 'item_name min '._ITEM_MIN_LEN.' characters'; exit(); }
if(strlen($_POST['item_name']) > _ITEM_MAX_LEN){ http_response_code(400); echo 'item_name max '._ITEM_MAX_LEN.' characters'; exit(); }





