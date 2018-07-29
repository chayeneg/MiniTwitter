<?php
   require_once('conexao.php');
   $username = $_POST['usuario'];
   $password = $_POST['senha'];
   $query = "select usuario, nome, senha from users where usuario = '$username' ";
   if ($result = $conn->query($query)) {
      if ($row = $result->fetch_object()){
         if (strcmp($row->senha, $password)==0){
            session_start();
            $_SESSION['usuario'] = $row->usuario;
            $_SESSION['nome'] = $row->nome;
            header("Location: Timeline.php");
         } else {
            session_start();
            $_SESSION['error'] = "usuário ou senha incorretos";
            header("Location: login.php");
         }
      } else {
         session_start();
         $_SESSION['error'] = "usuário ou senha incorretos";
         header("Location: login.php");
      }
   } else {
      die ("erro no banco de dados");
   }
?>
