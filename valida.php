<?php
session_start();
include_once("conexao.php");

$btnLogin = FILTER_INPUT(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
      $username = FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    # echo "$username - $password";
    if((!empty($username)) and (!empty($password))){
    $result_usuario = "select id, name, email, password from users where username = '$username' limit 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    if ($result_usuario){
          $row_usuario = mysqli_fetch_assoc($resultado_usuario);
          echo $row_usuario;

    }
  }  else {
          $_SESSION['msg'] = "Login ou Senha Incorreto - Vazio";
          header("Location: Login.php");
      }
} else {
  $_SESSION['msg'] = "Pagina não encontrada";
  header("Location: Login.php");
}
?>
