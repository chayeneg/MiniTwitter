<?php
  require_once("verifica-usuario.php");

  require_once('conexao.php');
  $id_tweet = $_SESSION['tweets_id'];

  $sql = "DELETE FROM tweets WHERE id = $id_tweet";
  if ($conn->query($sql) === TRUE) {
    echo "<script language'javascript' type='text/javascript'>alert('O tweet foi apagado!');window.location.href='timeline.php';</script>";
  }
?>
