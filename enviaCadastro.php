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
  $sql = "INSERT INTO users (name, username, email, password, birthDate, sex, country, website)
  VALUES ('$nome','$usuario','$email','$senha','$dtNasc','$sexo','$pais','$site')";
  $execSQL = mysqli_query($conn, $sql);


  if ($conn->query($sql) === TRUE) {
    echo "Cadastro efetuado com sucesso!";
  } else {
    echo "Erro! Não foi possível cadastrar: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close()
?><br><br>
'<a href="cadastro.php">Voltar a página de cadastro</a>'
</body>
</html>
