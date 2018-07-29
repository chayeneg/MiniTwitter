<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dtNasc = $_POST['data'];
$sexo = $_POST['sexo'];
$pais = $_POST['pais'];
$site = $_POST['site'];

if($nome==""||$usuario==""||$email==""||$senha==""||$dtNasc==""||$sexo==""||$pais==""){
  echo "Os campos marcados com '*' devem ser preenchidos!";
}
else{
  $sql = "INSERT INTO users (nome, usuario, email, senha, dataNasc, sexo, pais, website)
  VALUES ('$nome','$usuario','$email','$senha','$dtNasc','$sexo','$pais','$site')";
  $execSQL = mysqli_query($conn, $sql);


  if ($conn->query($sql) === TRUE) {
    echo "Cadastro efetuado com sucesso!";
  }
}
$conn->close()
?><br><br>
<p>Cadastro efetuado com sucesso! Faça o login!! </p><input type="submit" value="Logar-se" onclick="location.href='login.php'"></a>
</body>
</html>
