<?php
  $valor = $_GET["camponome"];
  $servername = "localhost";
  $username = "root";
  $password = "123";
  $dbname = "MiniTwitter";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO teste (id, nome)
  VALUES ('', $valor)";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
