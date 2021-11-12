<?php
session_start();
// Validate

$item_id = $_GET["item-id"];
// SQL
// DELETE FROM items WHERE item_id = :item_id 
// AND user_id = :user_id
// $q->bindValue(:item_id, $item_id)
// $q->bindValue(:user_id, $_SESSION["user_id"])
