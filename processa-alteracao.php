<?php
  require_once('verifica-usuario.php');
  require_once('conexao.php');
  $username = "$auth_username";
  $name = "$auth_name";

  $name = $_POST['name'];
  $date = $_POST['date'];
  $sex = $_POST['sex'];
  $city = $_POST['city'];
  $website = $_POST['website'];

  $sql = "UPDATE users SET name='$name', birthDate='$date', sex='$sex', city='$city', website='$website' WHERE username = '$username'";
  if ($conn->query($sql) === TRUE) {
    echo "<script language'javascript' type='text/javascript'>alert('Os seus dados foram alterados!');window.location.href='timeline.php';</script>";
  }
 ?>
