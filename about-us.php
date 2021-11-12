<?php
session_start();
if( ! isset($_SESSION["theme"]) ){ $_SESSION["theme"] = "light"; }
echo $_SESSION["theme"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>Document</title>
</head>
<body class="<?= $_SESSION["theme"] ?>">

  <h1>
    About us
  </h1>

<input type="radio" name="theme" value="Light" 
  <?= $_SESSION["theme"] == "light" ? "checked" : "" ?>>
<label for="html">Light</label>
<input type="radio" name="theme" value="Dark"
  <?= $_SESSION["theme"] == "dark" ? "checked" : "" ?>>
<label for="css">Dark</label>

  
</body>
</html>