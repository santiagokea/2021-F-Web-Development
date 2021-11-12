<?php
require_once(__DIR__."/nav.php");

$user = ["id"=>1, "name"=>"A", "password"=>"secret"];
unset($user["password"]);
$_SESSION["test"] = "the test";
$_SESSION["user"] = $user;
$_SESSION["data"] = "xxxxxx";
?>
one