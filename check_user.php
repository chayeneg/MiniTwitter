<?php
session_start();
$auth_username = $_SESSION['usuario'];
$auth_name = $_SESSION['nome'];
if (!isset($auth_username)){
   header("Location: login.php");
}
?>
