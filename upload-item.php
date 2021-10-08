<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form onsubmit="validate(); return false">
    <input name="item_name" type="text"
      data-validate="str" data-min="2" data-max="20"
    >
    <button>Upload item</button>
  </form>

  <script src="validator.js"></script>

</body>
</html>