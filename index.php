<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="./index.css">
</head>

<body>
  <h1>Hola Mundo</h1>
  <form action="login.php" method="POST">
    <input type="username" placeholder="username">
    <input type="email" placeholder="email">
    <input type="password" placeholder="password">
    <button>Entrar</button>
  </form>
  <a href="session2.php">Dashboard</a>
  <form action="cookies.php" method="GET">
    <button>set Cookie</button>
  </form>
  <?php
  if (isset($_COOKIE["user"])) {
    $user_cookie = $_COOKIE["user"];
    echo "<p>user cookie: $user_cookie</p>";
  } else {
    echo "<p>No hay cookies</p>";
    echo "<p>user cookie: $user_cookie</p>";
  }

  foreach ($_SERVER as $key => $value) {
    echo "<p>$key : $value</p>";
  }
  ?>

</body>

</html>
