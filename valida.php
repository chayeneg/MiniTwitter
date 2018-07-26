<?php
session_start();
include_once("conexao.php")

$btnLogin = FILTER_INPUT(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
  $username = FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
# echo "$username - $password";
if((!empty($username)) and (!empty($password))){

 } else {
    $_SESSION['msg'] = "Login ou Senha Incorreto";
   header("Location: Login.php");

  }

} else {
  $_SESSION['msg'] = "Pagina não encontrada";
  header("Location: Login.php");
}

?>
