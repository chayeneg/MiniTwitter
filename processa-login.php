<?php
  require_once('conexao.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "select username, name, id, password from users where username = '$username' ";
  if ($result = $conn->query($query)) {
    if ($row = $result->fetch_object()){
      if (strcmp($row->password, $password)==0){
        session_start();
        $_SESSION['username'] = $row->username;
        $_SESSION['id'] = $row->id;
        $_SESSION['name'] = $row->name;
        header("Location: timeline.php");
      } else {
        echo "<script language'javascript' type='text/javascript'>alert('Login ou senha incorreto(s).');window.location.href='login.php';</script>";
      }
    } else {
      echo "<script language'javascript' type='text/javascript'>alert('Erro desconhecido!');window.location.href='cadastro.php';</script>";
    }
  }
  else {
    echo "<script language'javascript' type='text/javascript'>alert('Erro no banco de dados!');window.location.href='login.php';</script>";
  }
?>
