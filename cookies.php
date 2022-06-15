<?php


$cookie_name = "user";
$cookie_value = "Robert Castillo";
$expire_in = time() + 86400 * 30; // 30 dias
$path = "http://localhost/negociostest/";
$domain = $_SERVER["SERVER_NAME"];
$secure = $_SERVER["SERVER_PORT"] == 443 && $_SERVER["REQUEST_SCHEME"] == "https";
$httponly = true;
setcookie(
  $cookie_name,
  $cookie_value,
  $expire_in,
  $path,
  $domain,
  $secure,
  $httponly
);

header("Location: /negociostest");
die();
