<?php
  $name = 'Santiago';
  $lastName = 'Donoso';

  function get_full_name(){
    return 'My name is Santiago';
  }

  

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

  <h3>
    <?= get_full_name(); ?>
  </h3>

  <h1>
    <?= $name; ?>
  </h1>
  <h2>
    <?php echo $lastName; ?>
  </h2>
</body>
</html>

