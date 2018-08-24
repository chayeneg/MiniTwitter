<?php
  session_start();
  $auth_username = $_SESSION['username'];
  $auth_name = $_SESSION['name'];
  $auth_id = $_SESSION['id'];
  if (!isset($auth_username)){
     header("Location: login.php");
  }
?>
