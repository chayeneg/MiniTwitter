<?php
require ('conexao.php');
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$query = "select usuario, nome, senha from users where usuario = '$usuario' ";
if ($result = $conn->query($query)) {
  if ($row = $result->fetch_object()){
    if (strcmp($row->senha, $senha)==0){
      session_start();
      $_SESSION['usuario'] = $row->usuario;
      $_SESSION['nome'] = $row->nome;
      header("Location: timeline.php");
    } else {
      header("Location: erro-cad.php");
    }
  } else {
    header("Location: erro-cad.php");

  }
} else {
  die ("erro no banco de dados");
}
?>
