<?php
   require_once('data.php');
   $username = $_POST['usuario'];
   $password = $_POST['senha'];
   $query = "select usuario, nome, senha from users where usuario = '$username' ";
   if ($result = $conn->query($query)) {
      if ($row = $result->fetch_object()){
         if (strcmp($row->password, $password)==0){
            session_start();
            $_SESSION['usuario'] = $row->username;
            $_SESSION['nome'] = $row->name;
            header("Location: timeline.php");
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
