
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
$query_select = "SELECT usuario FROM users WHERE usuario = '$usuario'";
$select = mysqli_query($conn, $query_select);
$resultado = $select->fetch_assoc();

if($nome==""||$usuario==""||$email==""||$senha==""||$dtNasc==""||$sexo==""||$pais==""){
  echo "<script language'javascript' type='text/javascript'>alert('Os campos com * devem ser preenchidos');window.location.href='cadastro.php';</script>";
}
else if($senha!=$confirmaSenha){
  echo "<script language'javascript' type='text/javascript'>alert('As senhas não conferem!');window.location.href='cadastro.php';</script>";
}
else if($usuario==$resultado["usuario"]){
  echo "<script language'javascript' type='text/javascript'>alert('O usuário já está cadastrado!');window.location.href='cadastro.php';</script>";
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
