<?php
  require_once('verifica-usuario.php');
  require_once('conexao.php');
  $username = "$auth_username";
  $message = $_POST['new_message'];
  $user_id =  $_SESSION['id'];

  $stmt = $conn->prepare("INSERT INTO tweets (message, user_id) VALUES (?, ?)");
  $stmt->bind_param("ss", $message, $user_id);
  if ($stmt->execute()){
         header("location:timeline.php");
  } else {
      echo "<script language'javascript' type='text/javascript'>alert('Erro no banco de dados!');window.location.href='cadastro.php';</script>";
  }
?>
