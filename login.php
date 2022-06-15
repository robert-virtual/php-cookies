<?php
if($_POST["username"]){
  session_start();
  $_SESSION["username"] = $_POST["username"];
  $_SESSION["email"] = $_POST["email"];
  header("Location: /negociostest/session2.php");
  die();
}
