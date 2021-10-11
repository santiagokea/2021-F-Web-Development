<?php
require_once('dictionary.php');
$lan = $_GET['lan'] ?? 'en'; // en es dk
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $text['2'][$lan] ?></title>
</head>
<body>
 
  <h1>
    <?= $text['1'][$lan] ?>
  </h1>

</body>
</html>




