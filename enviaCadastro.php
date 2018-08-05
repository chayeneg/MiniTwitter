
<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmasenha'];
$dtNasc = $_POST['data'];
$sexo = $_POST['sexo'];
$cidade = $_POST['city'];
$site = $_POST['site'];

$query_select_user = "SELECT username FROM users WHERE username = '$usuario'";
$select_user = mysqli_query($conn, $query_select_user);
$resultado_user = $select_user->fetch_assoc();

$query_select_email = "SELECT email FROM users WHERE email = '$email'";
$select_email = mysqli_query($conn, $query_select_email);
$resultado_email = $select_email->fetch_assoc();

if($senha!=$confirmaSenha){
  echo "<script language'javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastro.php';</script>";
}
else if($usuario==$resultado_user["username"]){
  echo "<script language'javascript' type='text/javascript'>alert('O usuário já está cadastrado!');window.location.href='cadastro.php';</script>";
}
else if($email==$resultado_email["email"]){
  echo "<script language'javascript' type='text/javascript'>alert('O email já foi utilizado!');window.location.href='cadastro.php';</script>";
}
else{
  $sql = "INSERT INTO users (name, username, email, password, birthDate, sex, city, website)
  VALUES ('$nome','$usuario','$email','$senha','$dtNasc','$sexo','$cidade','$site')";
  $execSQL = mysqli_query($conn, $sql);

  if ($execSQL) {
    echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='login.php';</script>";
  }
}
$conn->close()
?>
