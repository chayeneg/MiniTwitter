<?php

include_once("conexao.php");

$tweet = $_POST['mensagem'];



$sql = "INSERT INTO tweets (message) values ('$tweet')";
$execSQL = mysqli_query($conn, $sql);

if ($execSQL) {
  header("location: timeline.php");
}

$conn->close()
?>
