<?php
if ($_POST["close"]) {
  session_unset();
  session_destroy();
  header("Location: /negociostest/session2.php");
}
