<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form onsubmit="return false">
    <input name="email" type="text" placeholder="email">
    <input name="password" type="password" placeholder="password">
    <button onclick="login()">Login</button>
  </form>

  <script>
    async function login(){
      const form = event.target.form
      console.log(form)
      let conn = await fetch("api-login", {
        method: "POST",
        body: new FormData(form)
      })

      let res = await conn.json()
      console.log(res)
      if( conn.ok ){ location.href = "user" }
    }
  </script>
  
</body>
</html>