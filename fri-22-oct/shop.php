<?php
$data = file_get_contents("shop.txt");
// Convert text into an array/json
$array_assoc_items = json_decode($data, true);
foreach( $array_assoc_items as $assoc_item ){
  echo "<div>".$assoc_item["title"]."</div>";
  echo "<div>".$assoc_item["price"]."</div>";
}

// Using data as json
// $array_json_items = json_decode($data);
// foreach( $array_json_items as $json_item ){
//   echo "<div>".$json_item->title."</div>";
//   echo "<div>".$json_item->price."</div>";
// }








