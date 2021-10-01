<?php

require_once('globals.php');

// Validate
if( ! isset($_POST['email']) ){ _res(400,["info"=>"email required"]); }








