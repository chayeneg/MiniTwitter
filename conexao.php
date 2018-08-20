<?php
  $conn = new mysqli("localhost", "root", "", "minitwitter");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
