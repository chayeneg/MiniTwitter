<?php
  require_once("verifica-usuario.php");

  require_once('conexao.php');
  $id_tweet = $_SESSION['tweets_id'];
  $id_user = $_SESSION['id'];

  $sql = "DELETE FROM tweets WHERE id = $id_tweet and user_id = $id_user";
  if ($conn->query($sql) === TRUE) {
    header("location:timeline.php");
  }
?>
