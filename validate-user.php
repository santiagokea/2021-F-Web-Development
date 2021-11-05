<?php
// TODO: Verify the key (must be 32 characters)
if( ! isset($_GET['key']) ){
  echo "mmm... suspicious (key is missing)";
  exit();
}
if(strlen($_GET['key']) != 32){
  echo "mmm... suspicious (key is not 32 chars)";
  exit();
}
// TODO: Connect to the db
$json_data = json_decode(file_get_contents("data.json"));
echo $json_data->verification_key;
// TODO: Update the verified to 1 if match
// TODO: Say Congrats to the user
?>