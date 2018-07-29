<?php
  include_once("conexao.php");

  $login = $_POST['usuario'];
  $senha = md5($_POST['senha']);
  $entrar = $_POST['entrar'];

    if (isset($entrar)) {

      $verifica = mysqli_query($conn, "SELECT email FROM users WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<0){
          echo"fodac";
          die();
        }else{
          header("Location:timeline.php");
        }
    }
?>
