<?
  session_start();
  unset($_SESSION["cuenta"]); 
  session_destroy();
  header("Location: login.html");
  exit;
?>