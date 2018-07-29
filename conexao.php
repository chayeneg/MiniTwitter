<?php
  $conn = new mysqli("localhost", "root", "123", "minitwitter");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
