<?php
  $conn = new mysqli("localhost", "minitwitter", "123456", "minitwitter");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
