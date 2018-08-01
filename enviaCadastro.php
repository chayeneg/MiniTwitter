
<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmasenha'];
$dtNasc = $_POST['data'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
$site = $_POST['site'];

$query_select_user = "SELECT usuario FROM users WHERE usuario = '$usuario'";
$select_user = mysqli_query($conn, $query_select_user);
$resultado_user = $select_user->fetch_assoc();

$query_select_email = "SELECT email FROM users WHERE email = '$email'";
$select_email = mysqli_query($conn, $query_select_email);
$resultado_email = $select_email->fetch_assoc();

if($nome==""||$usuario==""||$email==""||$senha==""||$dtNasc==""||$sexo==""){
  echo "<script language'javascript' type='text/javascript'>alert('Os campos com * devem ser preenchidos');window.location.href='cadastro.php';</script>";
}
else if($senha!=$confirmaSenha){
  echo "<script language'javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastro.php';</script>";
}
else if($usuario==$resultado_user["usuario"]){
  echo "<script language'javascript' type='text/javascript'>alert('O usuário já está cadastrado!');window.location.href='cadastro.php';</script>";
}
else if($email==$resultado_email["email"]){
  echo "<script language'javascript' type='text/javascript'>alert('O email já foi utilizado!');window.location.href='cadastro.php';</script>";
}
else{
  $sql = "INSERT INTO users (nome, usuario, email, senha, dataNasc, sexo, pais, website)
  VALUES ('$nome','$usuario','$email','$senha','$dtNasc','$sexo','$pais','$site')";
  $execSQL = mysqli_query($conn, $sql);

  if ($execSQL) {
    echo "<script language'javascript' type='text/javascript'>alert('Cadastro efetuado!');window.location.href='login.php';</script>";
  }
}
$conn->close()
?>
