<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "minitwitter";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $nome = $_POST['nome'];
  $usuario = $_POST['usuario'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $dtNasc = $_POST['data'];
  $sexo = $_POST['sexo'];
  $pais = $_POST['pais'];
  $site = $_POST['site'];

  $sql = "INSERT INTO users (name, username, email, password, birthDate, sex, country, website)
VALUES ('$nome','$usuario','$email','$senha','$dtNasc','$sexo','$pais','$site')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()
?>
