<?php
require ('conexao.php');
$usuario = $_POST['username'];
$senha = $_POST['password'];
$query = "select username, id, password from users where username = '$usuario' ";
if ($result = $conn->query($query)) {
  if ($row = $result->fetch_object()){
    if (strcmp($row->password, $senha)==0){
      session_start();
      $_SESSION['username'] = $row->username;
      $_SESSION['id'] = $row->id;
      header("Location: Timeline.php");
    } else {
      echo "As senhas nao conferem";
      //header("Location: erro-cad.php");
    }
  } else {
    //header("Location: erro-cad.php");
    echo "nao sei";
  }
}
else {
  die ("erro no banco de dados");
}
?>
