<?php
  $items = ['a', 'b', 'c'];
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
  <?php
  foreach($items as $item){
    echo "<div>$item</div>";
  }
  // for($i = 0; $i < count($items); $i++){
  //   echo "<div>$items[$i]</div>";
  // }

  ?>
</body>
</html>

