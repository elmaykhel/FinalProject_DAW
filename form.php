<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/form.js"></script>
</head>
<body>
    
    <form method="post" id="form">
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" id="username" required>
          <br>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
          <br>
          <button type="submit" id="submit" name="Entrar">Entrar</button>
        </div>
      </form>
</body>
</html>