<?php
// The user logs via a form passing email and password
$password = $_POST['password']; // 2222
// Pretend we connect to the database and get the password
// of a user based on the email
// SELECT user_password FROM users WHERE user_email = :email
$hashed_password = '$2y$10$ITYZZJLgK.VUAG2UAkZcf.IHAKFrMyXK3Ip5W8oA/nTQJ1EDBiyJu';
if( password_verify($password, $hashed_password) ){
  echo "MATCHED";
}else{
  echo "WRONG PASSWORD";
}








