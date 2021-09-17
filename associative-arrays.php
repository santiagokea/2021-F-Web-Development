<?php
// multidimensional associative array
$users = [
  ['name'=>'A', 'email'=>'@a', 'password'=>'passA'],
  ['name'=>'B', 'email'=>'@b', 'password'=>'passB']
];
// Associative array
// $person = [ 'name' => 'Santiago', 'last_name' => 'Donoso' ];
// echo $person['name'].' '.$person['last_name'];
// echo "{$person['name']} {$person['last_name']}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="users">
    <?php
    foreach($users as $user){
      echo "<div class='user'>
              <div>{$user['name']}</div>
              <div>{$user['email']}</div>
              <div>{$user['password']}</div>
              <button>block user</button>
            </div>";
    }
    ?>
  </div>
</body>
</html>






