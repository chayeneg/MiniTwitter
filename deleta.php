<?php
  require_once("verifica-usuario.php");

  require_once('conexao.php');
  $id_tweet = $_SESSION['tweets_id'];

  $sql = "DELETE FROM tweets WHERE id = $id_tweet";
  if ($conn->query($sql) === TRUE) {
    header("location:timeline.php");
  }
?>
