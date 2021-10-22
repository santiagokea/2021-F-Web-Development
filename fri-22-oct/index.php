<?php
$data = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vTqtp7Klfsw229m1pXDYh6fWLMEEMBrv9DCYjQD9CZ5fO9oytPC-DUsJwkk2E1bRA2ywh3-J2GmE8Zn/pub?output=tsv');
// Break lines
$lines = explode("\n", $data);
$keys = explode("\t", $lines[0]);
$out = [];
for($i = 1; $i < count($lines); $i++){
  $data = explode("\t", $lines[$i]);
  $item = [];
  for($j = 0; $j < count($data); $j++){
    $data[$j] = str_replace("\r", "", $data[$j]);
    $keys[$j] = str_replace("\r", "", $keys[$j]);
    $item[$keys[$j]]=$data[$j];
  }
  array_push($out, $item);
}
file_put_contents("shop.txt", json_encode($out));
header('Content-Type: application/json');
echo json_encode($out);
