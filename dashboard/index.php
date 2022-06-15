<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./index.css">
</head>

<body>
  <h1>Bienvenido <?= $_SESSION["username"] ?></h1>
  <a href="/negociostest">Volver</a>
  <?php
  var_dump($_SESSION);
  echo $_SERVER["REMOTE_ADDR"];
  ?>
  <form action="logout.php" method="POST">
    <input type="text" hidden name="close" value="true">
    <button>Logout</button>
  </form>
</body>

</html>
