<?php

// min length 6 max 20
// db 255
// database

// Signup
// This should come from an input field/form/POST
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// INSERT INTO users VALUES(......$password)
echo $password;







