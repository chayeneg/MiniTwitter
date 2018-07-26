<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Entrar </title>
</head>
<body>
  <h2> Entre com seu usuário e senha</h2>
  <?php
  if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);
  }
  ?>
  <form method="post" action="valida.php">
    

    <label>Usuário</label>
    <input type="text" name="username" placeholder="Digite o seu usuário"><br><br>

    <label>Senha</label>
    <input type="password" name="password" placeholder="Digite a sua senha"><br><br>

    <input type="submit" name="btnLogin" value="Acessar">

  </form>
</body>
</html>
