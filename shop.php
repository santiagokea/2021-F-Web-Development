<?php
$data = json_decode(file_get_contents("shop.txt"));
foreach($data as $item){
  echo "<div>{$item->id}</div>";
  echo "<div>{$item->title}</div>";
  echo "<img src='https://coderspage.com/2021-F-Web-Dev-Images/{$item->image}'>";
}
?>